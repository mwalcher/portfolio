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
