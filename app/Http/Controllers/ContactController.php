<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $contact = new Contact($request->all());
        $contact->save();
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        $technology = $request->technology;
        $industry = $request->industry;
        $this->sendConfirmation($name, $email, $technology, $industry, $message);
        return redirect('/contact')->with('success', 'Message successfully submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param Request $request
     * Sending email confirmation on resume submission
     *
     *
     * , $tech, $ind, $query
     */
    public function sendConfirmation($nam, $mail, $tech, $ind, $query)
    {
        $email = $mail;

        $data = array(
            'name'=>$nam,
            'industry'=>$ind,
            'technology' =>$tech,
            'text' =>$query

        );


        Mail::queue('emails.contact', $data, function($message)use($email)
        {
            $message->from('acknotech@gmail.com', 'Acknotech');

            $message->to($email);
            $message->subject('Application Submitted');


        });
    }
}
