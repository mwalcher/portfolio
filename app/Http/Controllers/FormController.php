<?php

namespace App\Http\Controllers;

class FormController extends Controller
{
    public function submit(){
        return redirect()->route('home');
    }
}
