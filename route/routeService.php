<?php

use App\Request\Request;

class Route {
    public function __construct()
    {

    }
    public function get($path,$class,$func)
    {
        $page = Request::get('page');
        if($path === $page){
            $class ? $class::$func() : $class;
        }
    }
}

Request::get('page') ? $page : view('home','');