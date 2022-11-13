<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\FilesController;
use App\Models\Mainnews;
use App\Models\News;

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
            //把所有資料庫的東西都先取消顯示並儲存，再把當前那一筆改為顯示在首頁
            foreach ($editAll as $item) {
                $item->show = 0;
                $item->save();
            }
            $editone->show = $show;
        }else if($show == 0){
            $editone->show = $show;
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
}
