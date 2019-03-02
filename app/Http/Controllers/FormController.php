<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use App\Helpers\GoogleHelpers;

class FormController extends Controller
{
    public function submit(Request $request){
        $data = $request->all();

        $googleHelper = new GoogleHelpers();

        if($data['g-recaptcha-response'] && $googleHelper->verifyCaptcha($data['g-recaptcha-response'])->success === true){
            unset($data['g-recaptcha-response']);
            validateAndSendEmail($data);
        } else if(!$data['g-recaptcha-response']) {
            validateAndSendEmail($data);
        }

        return redirect()->route('thank-you');
    }

    private function validateAndSendEmail(Array $fields){
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];

        $messages = [
            'required' => ':attribute is required',
            'email' => ':attribute is not a valid email'
        ];

        $validator = Validator::make($fields, $rules, $messages);

        if ($validator->fails()) {
            return redirect(URL::previous() . '#contact')
                ->withErrors($validator)
                ->withInput();
        }

        unset($fields['_token']);
        $fields['email'] = filter_var($fields['email'], FILTER_SANITIZE_EMAIL);

        $to = 'matt@mwalcher.com';
        $subject = 'Website Contact Form';
        $message = '';

        foreach($fields as $key => $content){
            $message .= "<strong>" . ucfirst($key) . "</strong>: " . $content . "<br />";
        }

        $headers = array(
            "MIME-Version: 1.0",
            "Content-type: text/html; charset=iso-8859-1",
            "From: Matthew Walcher <no-reply@mwalcher.com>",
            "Reply-To: <{$fields['email']}>",
            "X-Mailer: PHP/".phpversion().""
        );

        mail($to, $subject, $message, implode("\r\n", $headers));
    }
}
