@extends('master')

@section('content')

    <div class="container" id="secondary" style="width: 65%">
        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
        @endif
        <form role="form" method="POST" action="{{ url('jobs/post') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label for="job_id">Job ID</label>
            <input type="text" class="form-control" id="job_id" name="job_id" placeholder="{{ $random }}" value="{{ $random }}">
          </div>

          <div class="form-group">
            <label for="job_title">Job Title</label>
            <input type="text" class="form-control" id="job_title" name="job_title">
          </div>

          <div class="form-group">
            <label for="job_description">Job Description</label>
            <textarea rows="5" class="form-control"  name="job_description">
            </textarea>
          </div>

          <div class="form-group">
              <label for="job_description">Job Status</label><br>
              <input type="radio" name="status" value="open">Open<br>
              <input type="radio" name="status" value="closed">Closed
          </div>

          <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>


@endsection