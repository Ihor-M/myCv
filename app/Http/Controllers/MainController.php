<?php

namespace App\Http\Controllers;

use App\Entity\Feedbacks;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;


class MainController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('pages.main');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function whoIsPage()
    {
        return view('pages.who-is');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function skillsPage()
    {
        return view('pages.skills'); 
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contactPage()
    {
        return view('pages.contact');
    }

    /**
     * @param ContactFormRequest $request
     * @return mixed
     */
    public function feedbackPage(ContactFormRequest $request)
    {
        $feedback = Feedbacks::create($request->all());

        Mail::send('emails.email', [
            'feedback' => $feedback
        ], function ($m) use ($feedback) {
            $m->from('user@mail.com');
            $m->to($feedback->email);
        }

        );


        return \Redirect::route('userEmailShow', [
            'Feedbacks' => $feedback
        ]);
    }

    public function emailSent(Feedbacks $feedback)
    {
        return view('pages.feedback', [
            'feedback' => $feedback
        ]);
    }

}

