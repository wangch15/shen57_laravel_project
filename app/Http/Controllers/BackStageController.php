<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\FilesController;
use App\Models\Mainnews;
use App\Models\News;
use App\Models\Screensizes;

class BackStageController extends Controller
{
    //基本回傳view
    public function mainList(){
        $newslist = Mainnews::orderBy('id','desc')->get();
        return view('backstage.main-news-list',compact('newslist'));
    }

    public function mainAdd(){
        return view('backstage.add-main-news');
    }

    public function newsList(){
        $newslist = News::orderBy('id','desc')->get();
        return view('backstage.news-list',compact('newslist'));
    }

    public function newsAdd(){
        return view('backstage.add-news');
    }

    //上傳功能
    public function addnews(Request $request){
        $title = $request->title;
        $date = $request->date;
        $content = $request->content;
        $img = $request->img;

        $path = FilesController::imgUpload($img, '/news');

        $result = News::create([
            'title' => $title,
            'date' => $date,
            'content' => $content,
            'img_path' => $path,
        ]);

        $newslist = News::orderBy('id','desc')->get();

        return redirect('/admin/news-list');
    }

    public function addmainnews(Request $request){
        $title = $request->title;
        $date = $request->date;
        $content1 = $request->content1;
        $content2 = $request->content2;
        $img = $request->img;

        $path = FilesController::imgUpload($img, '/mainnews');

        $result = Mainnews::create([
            'title' => $title,
            'date' => $date,
            'content' => $content1,
            'content2' => $content2,
            'img_path' => $path,
        ]);

        return redirect('/admin/main-news-list');
    }

    //編輯功能
    //進入編輯頁
    public function newsedit($id){
        $editnews = News::find($id);

        return view('backstage.edit-news',compact('editnews'));
    }

    //將編輯後的結果表單與id帶到model中，並更新資料(且要刪除舊圖片)
    public function newseditchecked(Request $request,$id){
        $title = $request->title;
        $date = $request->date;
        $content = $request->content;
        $img = $request->img;

        $editone = News::find($id);
        $editone->title = $title;
        $editone->date = $date;
        $editone->content = $content;
        $imgold = $editone->img_path;


        if(!$img == null || !$img == '' ){
            FilesController::deleteUpload($imgOld);

            $path = FilesController::imgUpload($img, '/news');
            $editone->img_path = $path;
        }

        //隱藏打勾,把值改為true or false
        $hidden = $request->hidden;
        if($hidden == 'on'){
            $hidden = 1;
        }else{
            $hidden = 0;
        }
        $editone->hidden = $hidden;

        $editone->save();

        return redirect('/admin/news-list');
    }

    public function mainedit($id){
        $editnews = Mainnews::find($id);

        return view('backstage.edit-main',compact('editnews'));
    }

    public function maineditchecked(Request $request,$id){

        $title = $request->title;
        $date = $request->date;
        $content1 = $request->content1;
        $content2 = $request->content2;
        $img = $request->img;

        $editone = Mainnews::find($id);
        $editone->title = $title;
        $editone->date = $date;
        $editone->content = $content1;
        $editone->content2 = $content2;

        //如果有上傳新圖片，將舊的圖片從主機上刪除，並上傳新圖片
        $imgold = $editone->img_path;
        if(!$img == null || !$img == '' ){
            FilesController::deleteUpload($imgold);
            $path = FilesController::imgUpload($img, '/mainnews');
            $editone->img_path = $path;
        }

        //如果有打勾首頁選擇此消息,把值改為true or false
        $show = $request->showonindex;
        if($show == 'on'){
            $show = 1;
        }else{
            $show = 0;
        }


        $editAll = Mainnews::get();
        if($show == 1){
            //如果id是當前指定id標註為顯示，如果不是當前id標註為不顯示
            foreach ($editAll as $item) {
                $itemId = $item->id;
                if($itemId == $id){
                    $item->show = 1;
                }else{
                    $item->show = 0;
                }
                $item->save();
            }
        }

        //隱藏打勾,把值改為true or false
        $hidden = $request->hidden;
        if($hidden == 'on'){
            $hidden = 1;
        }else{
            $hidden = 0;
        }
        $editone->hidden = $hidden;

        $editone->save();

        return redirect('/admin/main-news-list');
    }

    //刪除消息
    public function mainDel($id){
        $editnews = Mainnews::find($id);
        $img = $editnews->img_path;
        FilesController::deleteUpload($img);
        $editnews->delete();

        return redirect('/admin/main-news-list');
    }

    public function newsDel($id){
        $editnews = News::find($id);
        $img = $editnews->img_path;
        FilesController::deleteUpload($img);

        $editnews->delete();

        return redirect('/admin/news-list');
    }


    public function screencheck(){
        $screenlist = Screensizes::get();
        $screenArray = array();
        foreach ($screenlist as $item) {
            array_push($screenArray,$item->size);
        };

        $countScreen = [];
        $device='';
        foreach($screenArray as $key=>$item2){
            //如果沒有資料，生成第一筆資料
            if(!isset($countScreen[$item2])){
                //根據回傳寬度判斷裝置是什麼類型
                $screen_size = explode('x', $item2);
                if($screen_size[0] > 1024){
                    $device='Desktop';
                }elseif($screen_size[0] > 468 && $screen_size[0] < 1024){
                    $device='Tablet';
                }else{
                    $device='Mobile';
                }
                //將資料傳入陣列中

                $countScreen[$item2] = (object)[
                    'count' => 1,
                    'title' => $item2,
                    'device' => $device,
                ];
            //如果已有資料，幫我們瀏覽人次+1
            }else{
                $countScreen[$item2]->count = $countScreen[$item2]->count+1;
            }
        };

        arsort($countScreen);
        $NewCountArray = array();
        foreach($countScreen as $item){
            array_push($NewCountArray,$item);
        }

        //計算所有瀏覽人次
        $countScreenTotal=[];
        foreach ($countScreen as $count1){
            array_push($countScreenTotal,$count1->count);
        };

        $total = 0;
        foreach($countScreenTotal as $countTotal){
            $total = $total + $countTotal;
        };

        return view('backstage.screenlist',compact('NewCountArray','total'));
    }
}
