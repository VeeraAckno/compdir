@extends('master')

@section('content')
<div class="container-fluid">
	<div class="row" style="margin-top: 100px">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">Register<a href="{{ url('/auth/login') }}">/Login</a></div>
				<div class="panel-body">
				    @if (session('error'))
                       <div class="alert alert-danger">
                           {{ session('error') }}
                       </div>
                      @endif
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form id="register-form" class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">


						<div class="form-group" id="employee-id">
                            <label class="col-md-4 control-label">Offer Letter ID:</label>
                            <div class="col-md-6">
                        	    <input type="text" class="form-control" name="employee_id" id="emp-id">
                        	    <div id="emp-alert">
                                    <span id="eid-1">Enter the four digit number in your offer letter</span>
                                    <span id="eid-2">This Offer Letter ID is not valid.Enter the four digit number in your offer letter</span>
                                    <span id="eid-3">Enter Offer Letter ID first to continue</span>
                                </div>
                            </div>
                        </div>

						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name">
							</div>
						</div>


						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password" id="pass-1">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation" id="pass-2">

							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
    $("#emp-id").focus(function(){
        $("#eid-2").css("display", "none");
        $("#eid-3").css("display", "none");
        $("#eid-1").css("display", "inline").fadeOut(4000);

    });

    $("#register-form :input").not( "#emp-id" ).focus(function(){
        var id_length = $("#emp-id").val().length;
        if (id_length == 0){
            $("#eid-1").css("display", "none");
            $("#eid-3").css("display", "inline").fadeOut(5000);
        }
        else if (id_length != 4) {
            $("#eid-1").css("display", "none");
            $("#eid-2").css("display", "inline").fadeOut(5000);
        	}
    });
});
</script>

@endsection
