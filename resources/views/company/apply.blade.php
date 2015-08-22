@extends('master')

@section('content')

    <div class="container" id="secondary" style="width: 65%">

        <form role="form" method="POST" action="{{ url('company/apply', $job->id) }}" enctype="multipart/form-data" id="applyform">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label for="job_id">Job ID</label>
            <input type="text" class="form-control" id="job_id" name="job_id" value="{{ $job->id }} {{ $job->job_description }}" placeholder="{{ $job->job_id }} {{ $job->job_description }}" disabled>
          </div>

          <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control"  name="first_name" id="FirstName">
          </div>

          <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="LastName">
          </div>

          <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control"  name="email" id="Email">
          </div>

          <div class="form-group">
              <label for="dob">Date of Birth</label>
              <input type="date" class="form-control"  name="dob" id="dob">
          </div>

          <div class="form-group">
            <label for="unique_id">Unique ID</label>
            <input type="text" class="form-control" id="unique_id" name="unique_id" placeholder="Passport Number/Voters Id">
          </div>

          <div class="form-group">
              <label for="resume">Attach Resume</label>
              <input type="file" name="resume" id="resume">
          </div>

          <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

    <script  type="text/javascript">
       var frmvalidator = new Validator("applyform");
       frmvalidator.addValidation("FirstName","req","Please enter your First Name");
        frmvalidator.addValidation("FirstName","maxlen=20",
        "Max length for FirstName is 20");
 
        frmvalidator.addValidation("LastName","req","Please enter your Last Name");
        frmvalidator.addValidation("LastName","maxlen=20");
 
        frmvalidator.addValidation("Email","maxlen=50","Please enter your Email");
        frmvalidator.addValidation("Email","req");
        frmvalidator.addValidation("Email","email");

        frmvalidator.addValidation("dob","req","Please enter your Date of Birth");

        frmvalidator.addValidation("unique_id","req","Please enter your Unique ID");

        frmvalidator.addValidation("resume","req","Please attach your Resume");
    </script>


@endsection