@extends('master')

@section('content')

<div class="container" id="secondary">
    <div class="row">
      <div class="col-md-3">
        <div id="slideshow">
           <div>
             <img src="/../images/suitecrm.jpg">
           </div>
        </div>
      </div>
      <div class="col-md-9">
        <h2>SuiteCRM</h2>
        <p>SuiteCRM is a software fork of the popular customer relationship management (CRM) system SugarCRM. It is a free and open source alternative to paid editions of SugarCRM products, and is based on the last open-source release, but ships with additional modules. It was released on October 21, 2013 as version 7.0, and provides upgrade paths for existing SugarCRM users.
        SuiteCRM is intended to be an open source alternative to SugarCRM's Professional Edition.</p>
        <br><hr>
        <br><br>
        <div class="row">
            <div class="col-md-6">
            <h3>Modules</h3>
            <ul>
              <li>Products</li>
              <li>Quotes</li>
              <li>Contracts</li>
              <li>Invoices</li>
              <li>Workflow</li>
              <li>Reporting</li>
              <li>Events</li>
            </ul>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
            </div>
             <div class="col-md-6">
                <img class = "tech-img" src="/../images/suitecrm.jpg">
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
             </div>
        </div>
      </div>
    </div>
  </div>



@endsection