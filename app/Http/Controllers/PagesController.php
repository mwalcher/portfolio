<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    private function setPage(String $view){
        return view($view);
    }

    public function index(){
        return $this->setPage('home');
    }

    public function comingSoon(){
        return $this->setPage('coming-soon');
    }

    public function zucora(){
        return $this->setPage('zucora');
    }
}
