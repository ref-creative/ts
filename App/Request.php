<?php

namespace App\Request;

class Request {
    public function get($val) {
        $res = addslashes($_REQUEST[$val]);
        return $res;
    }
    public function post($val) {
        $res = addslashes($_POST[$val]);
        return $res;
    }
}