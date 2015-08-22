@extends('master')

@section('content')

    <div class="container" id="secondary">

        @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
        @endif

         @if (session('fail'))
                 <div class="alert alert-danger">
                            {{ session('fail') }}
                 </div>
         @endif
         @if( $counts  ==  0)
        <h3>Currently We dont have any vacancies.Still you can apply by clicking <a href="{{ url('/company/apply/NA') }}">here</a>.We will get back to you once there is a requirement.</h3>
        @endif
        <table class="jobs-table">
        <tr>
            <th class="col-md-2">Job ID</th>
            <th class="col-md-8" style="text-align: center">Job Description</th>
            <th class="col-md-2"></th>
        </tr>
        </table>
        <hr><br>

        @foreach($jobs as $job)
        <div>
        <table class="jobs-table">
            <tr>
                <th class="col-md-2 job-show"><a href="#"> <h4>{{ $job->job_id }}</h4></a></th>

                <th class="col-md-8">{{ $job->job_title }}</th>
                <th class="col-md-2"><a href="{{ url('/company/apply', $job->job_id) }}"><button type="submit" class="btn btn-default">Apply</button></a></th>
            </tr>
        </table>
        <br>
        <p class="col-lg-12 jobs-details" id="{{ $job->job_id }}">{{ $job->job_description }}</p>
        </div>
        @endforeach
    </div>

    <script>
    $(document).ready(function(){
        $(".job-show").click(function(){
//        if(typeof id2 !== 'undefined'){
//            if
//        }
       var job = $(this).text()
        job = job.replace(/\s+/g, '');
        var id1 = job.split("JJ").pop();
        if( $("#"+job).css('display').toLowerCase() == 'none'){
            $("#"+job).slideDown();
            }
            else if( $("#"+job).css('display').toLowerCase() == 'block'){
            $("#"+job).slideUp();
            }

//            var id = job;
//            alert(id);
//            var id1 = job.split("JJ").pop();
//            var id2 = id1-1;




        })
    });
    </script>


@endsection