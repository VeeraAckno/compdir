@extends('master')

@section('content')

<div class="container" id="secondary">
    <div class="row">
      <div class="col-md-3">
        <div id="slideshow">
           <div>
             <img src="/../images/sugarcrm.jpg">
           </div>
        </div>
      </div>
      <div class="col-md-9">
        <h2>SugarCRM</h2>
        <p>SugarCRM is a software company based in Cupertino, California. It produces the web application Sugar, a customer relationship management (CRM) system that is available in both open-source and commercial open-source applications. In February 2014, SugarCRM announced that they would no longer be releasing new open source versions of their Community Edition application and this would now be a bug fix only application.

Sugar's functionality includes sales-force automation, marketing campaigns, customer support, collaboration, Mobile CRM, Social CRM and reporting.</p>
        <br><hr>
        <br><br>
        <div class="row">
            <div class="col-md-6">
              <h3>Editions</h3>
              <p>SugarCRM sells CRM software, typically referred to as Sugar, in three editions</p>
              <ul>
                <li>Sugar Professional</li>
                <li>Sugar Enterprise</li>
                <li>Sugar Ultimate</li>

              </ul>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
            </div>
             <div class="col-md-6">
                <img class = "tech-img" src="/../images/sugarcrm.jpg">
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
             </div>
        </div>
      </div>
    </div>
  </div>



@endsection