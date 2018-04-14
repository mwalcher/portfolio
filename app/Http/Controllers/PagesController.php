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

    public function musicbook(){
        return $this->setPage('musicbook');
    }

    public function sexEd(){
        return $this->setPage('sex-ed');
    }

    public function smartFridge(){
        return $this->setPage('smart-fridge');
    }

    public function truckladders(){
        return $this->setPage('truckladders');
    }
}
