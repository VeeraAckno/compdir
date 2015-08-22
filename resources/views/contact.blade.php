@extends('master')

@section('content')

<div class="container" id="secondary">
    <div class="row">

      <div class="col-md-9">
      @if (session('success'))
       <div class="alert alert-success">
           {{ session('success') }}
       </div>
      @endif
        <h2 style="text-align: center">Contact Us</h2>
        <br><br>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/contact') }}" id="contactform">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
              <label for="name" class="col-sm-3 control-label">Name:</label>
              <div class="col-sm-7">
              <input type="text" class="form-control" name="name" id="name"  placeholder="Your Name">
              </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email address:</label>
            <div class="col-sm-7">
            <input type="email" class="form-control" name="email" id="email"  placeholder="Email">
            </div>
          </div>

          <div class="form-group">
              <label for="phone" class="col-sm-3 control-label">Phone:</label>
              <div class="col-sm-7">
              <input type="text" class="form-control" name="phone" id="phone"  placeholder="Phone Number">
              </div>
          </div>

          <div class="form-group">
          <label for="industry" class="col-sm-3 control-label">Select Industry:</label>
          <div class="col-sm-7">
              <select  class="form-control" name="industry" id="industry" placeholder="Select Industry">
                <option>--</option>
                <option value="Manufacturing">Manufacturing</option>
                <option value="Retail">Retail</option>
                <option value="Health Care">Health Care</option>
                <option value="Telecom">Telecom</option>
                <option value="Finance">Finance</option>
                <option value="Real Estate">Real Estate</option>
                <option value="Agriculture">Agriculture</option>
                <option value="IT services">IT Services</option>
                </select>
          </div>
          </div>

           <div class="form-group">
           <label for="technology" class="col-sm-3 control-label">Select Technology</label>
           <div class="col-sm-7">
                <select  class="form-control" name="technology" id="technology" placeholder="Select Technology">
                  <option>--</option>
                  <option value="SAP">SAP</option>
                  <option value="Microsoft">Microsoft</option>
                  <option value="Odoo">Odoo</option>
                  <option value="Java">Java</option>
                  <option value="SugarCRM">SugarCRM</option>
                  <option value="SuiteCRM">SuiteCRM</option>
                </select>
           </div>
           </div>

           <div class="form-group">
                <label for="message" class="col-sm-3 control-label">Message:</label>
                <div class="col-sm-7">
                <textarea name="message" class="form-control" id="message" rows="3" placeholder="Your Message/Query"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>


      </div>
      <div class="col-md-3">
            <h3 style="text-align: left">Address</h3>
            Peninsula Palmville,<br>
            Villa 110, <br>
            New Dodda Thimmasandra Road,<br>
            Sarjapur Village,<br>
            Bangalore, Karnataka <br>
            562125

            </div>
    </div>
  </div>

  <script  type="text/javascript">
 var frmvalidator = new Validator("contactform");
 frmvalidator.addValidation("name","req","Please enter your Name");
 frmvalidator.addValidation("name","maxlen=20",
        "Max length for FirstName is 20");
 
 frmvalidator.addValidation("email","maxlen=50");
 frmvalidator.addValidation("email","req","Please enter your Email");
 frmvalidator.addValidation("email","email");
 
 frmvalidator.addValidation("phone","req","Please enter your phone number");
 frmvalidator.addValidation("phone","maxlen=50");
 frmvalidator.addValidation("phone","numeric");

 frmvalidator.addValidation("message","maxlen=500");
 frmvalidator.addValidation("message","req","Please enter your Query");

 </script>
 



@endsection