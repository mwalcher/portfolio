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
        $data['email'] = filter_var($data['email'], FILTER_SANITIZE_EMAIL);

        $to = 'matt@mwalcher.com';
        $subject = 'Website Contact Form';
        $message = '';

        foreach($data as $key => $content){
            $message .= "<strong>" . ucfirst($key) . "</strong>: " . $content . "<br />";
        }

        $headers = array(
            'From' => 'Matthew Walcher <no-reply@mwalcher.com>',
            'Reply-To' => $data['email'],
            'MIME-Version' => '1.0',
            'Content-type' => 'text/html; charset=iso-8859-1'
        );

        mail($to, $subject, $message, $headers);

        return redirect()->route('thank-you');
    }
}
