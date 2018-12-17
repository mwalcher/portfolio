<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class FormController extends Controller
{
    public function submit(Request $request){
        $data = $request->all();

        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];

        $messages = [
            'required' => ':attribute is required',
            'email' => ':attribute is not a valid email'
        ];

        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return redirect(URL::previous() . '#contact')
                ->withErrors($validator)
                ->withInput();
        }

        unset($data['_token']);

        return redirect()->route('home');
    }
}
