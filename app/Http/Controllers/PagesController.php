<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    private function setPage(String $view){
        $title = __($view.'.title');
        return view($view, ['view' => $view, 'title' => $title]);
    }

    public function index(){
        return $this->setPage('home');
    }
}
