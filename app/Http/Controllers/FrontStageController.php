<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mainnews;
use App\Models\News;

class FrontStageController extends Controller
{
    public function index(){
        $mainnews = Mainnews::whereIn('show',[1])->get();
        return view('frontstage.index',compact('mainnews'));
    }

    public function news(){
        $mainnews1 = Mainnews::whereIn('show',[1])->get();
        $mainnews0 = Mainnews::whereIn('show',[0])->get();
        $news = News::orderBy('id','desc')->get();
        return view('frontstage.news',compact('mainnews1','mainnews0','news'));
    }

    public function location(){
        return view('frontstage.location');
    }

    public function story(){
        return view('frontstage.story');
    }
    public function room5(){
        return view('frontstage.room5');
    }
    public function room7(){
        return view('frontstage.room7');
    }
    public function booking(){
        return view('frontstage.booking');
    }

}
