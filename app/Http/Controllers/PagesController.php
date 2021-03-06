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

    public function libro(){
        return $this->setPage('libro');
    }

    public function pinkPrecast(){
        return $this->setPage('pink-precast');
    }

    public function thankYou(){
        return $this->setPage('thank-you');
    }

    public function whatsMy(){
        return $this->setPage('whats-my');
    }

    public function zucora(){
        return $this->setPage('zucora');
    }
}
