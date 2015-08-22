<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Job;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Mail;

class ApplicantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $jobs = Job::all()->where('status', 'open');
        foreach ($jobs as  $value) {
            $value->job_description = nl2br($value->job_description);
        }
        
        $counts = $jobs->count();
        return view('company.careers', compact('jobs', 'counts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id)
    {
        $job = Job::where('job_id', $id)->first();
        return view('company.apply',compact('job'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request, $id)
    {
        //return ($request->all());
        $job = Job::where('job_id', $id)->first();
        $applicant = new Applicant($request->all());
        $applicant->job_id = $id;
        //return $applicant;
//        $a =$job->applicants()->create($request->all());
//        $applicant = new $job->applicants($request->all());



        $filename = Str::lower(
            pathinfo($request->file('resume')->getClientOriginalName(), PATHINFO_FILENAME)
            .'-'
            .uniqid()
            .'.'
            .$request->file('resume')->getClientOriginalExtension()
        );
        $applicant->resume =  $filename;


        if(
        $request->file('resume')->move(
            base_path() . '/public/images/Resumes/', $filename)
        )
        {
            $applicant->save();
            $firstname = $request->first_name;
            $lastname = $request->last_name;
            $applyemail = $request->email;
            $this->sendConfirmation($firstname, $lastname, $applyemail);

            return redirect('company/careers')->with('success', 'Your application is successfully submitted');
        }

        else
            return redirect('company/careers')->with('fail', 'Something went wrong. Try again.');
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
     */
    public function sendConfirmation($fname, $lname, $email)
    {
        $name = $fname. $lname;
        $data = array(
            'name'=>$name,
            'email'=>$email
        );

//        $mailto = $request->email;

        Mail::queue('emails.apply', $data, function($message)use($email)
        {
            $message->from('acknotech@gmail.com', 'Acknotech');

            $message->to($email);
            $message->subject('Application Submitted');


        });
    }
}