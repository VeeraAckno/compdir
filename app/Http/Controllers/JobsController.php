<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Mail;

class JobsController extends Controller
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
        $random = $this->randomGenerator();
        return view('company.create-job', compact('random'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $job = new Job($request->all());
        $job->author =  Auth::user()->name;
        $job->save();
        return redirect('jobs/create')->with('success', 'Job is successfully submitted');
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
    public function update()
    {
        $data = array(
            'name'=>'test',
            'email'=>'acknotech@gmail.com',
            'message'=>'test'
        );

        Mail::send('emails.email', $data, function($message)
        {
            $message->from('acknotech@gmail.com', 'Acknotech');

            $message->to('sreekanth.mkunhikannan@gmail.com');


        });
        return "success";
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

    public function randomGenerator()
    {
        $id = 'JJ'.mt_rand(1000, 9999);
        $count = Job::where('job_id', '$id')->count();
        if($count != 0)
          randomGenerator();
        return $id;

    }

}
    