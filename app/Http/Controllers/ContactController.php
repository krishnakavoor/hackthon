<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller as Controller;

class ContactController extends Controller {

    function __construct() {
        
    }

    public function contactUsForm(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $country = $request->input('country');
        $comment = $request->input('comment');

        $countries = DB::table('stage')->where('id', $country)->first();


      /*  DB::table('contact_us')->insert(
                ['name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'comment' => $comment,
                    'country_id' => $country]
        );

        Mail::send('emails.contact-us-mail', ['name' => $name,
            'email' => $email,
            'phone' => $phone,
            'comment' => $comment,
            'country_id' => $countries->name], function($message) use ($request) {
            $message->to($request->input('email'), $request->input('name'))->subject
                    ('Thank for contacting us');
            $message->from('info@kavmy.com', 'Kavmy');
        });
*/
        return Redirect::to('/thank-you/thank-you?type=contactus');
    }

    public function loadContactUsForm() {
        $countryList = DB::table('tenant')->get();
        return view('page.contact-us', ['countryList' => $countryList]);
    }

    public function captureNewsletter(Request $request) {
        DB::table('news_letter')->insert(
                ['email' => $request->input('email'),
                    'g_captcha' => $request->input('g-recaptcha-response'),
                    'token' => $request->input('_token'),
                    'status' => 1]
        );
        return Redirect::to('/thank-you?type=newsletter');
    }

    public function thankYou() {
        return view('page.thank-you');
    }

}
