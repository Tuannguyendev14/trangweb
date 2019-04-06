<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function gettrangchu(){
    	return view('pages.trangchu');
    }

    public function getloaiSP(){
    	return view('pages.loai_sanpham');
    }

    public function getChitiet(){
    	return view('pages.chitiet_sanpham');
    }

    public function getLH(){
    	return view('pages.lienhe');
    }

    public function getAbout(){
    	return view('pages.about');
    }
}
