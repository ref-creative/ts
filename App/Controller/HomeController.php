<?php

use App\Request\Request;

class HomeController  {

    public function index()
    {
        $title = "Ana Sayfa";
        $query = DB::table('etkinlik')
            ->where('durum','aktif')
            ->whereAnd('il',$_SESSION["city"])
            ->result();
        return view('home', compact('title','query'));
    }

    public function about()
    {
        return view('about');
    }
}

