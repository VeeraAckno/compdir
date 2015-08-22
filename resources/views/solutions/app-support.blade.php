@extends('master')

@section('content')

<div class="container" id="secondary">
    <div class="row">
      <div class="col-md-4">
        <div id="slideshow">
           <div>
             <img src="/../images/app-support1.jpg">
           </div>
        </div>
      </div>
      <div class="col-md-8">
        <h2>Application Support</h2>
        <p>This service is focused on managing the IT applications and ensuring the highest levels of availability for the business applications to function without interruption. Service options are customized to include
         different application elements and levels of availability required. We  evaluates client’s network of hardware, servers, and enterprise application systems and detects potential points of improvement. Based on the initial audit, we develop a strategy and roadmap tailored to unique client business and technology needs that increase 
         business efficiencies and provide higher ROI in infrastructure investments. </p>
        <br><hr>
        <br><br>
        <div class="row">
            <div class="col-md-6">
            <h4>This service includes the following IT infrastructure elements:</h4>
            <ul>
              <li>Hardware Platforms & System Software</li>
              <li>Database Software</li>
              <li>Network & Enterprise Security</li>
            </ul>
            </div>
             <div class="col-md-6">
                <img class = "tech-img" src="/../images/app-support2.jpg">
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
             </div>
        </div>
      </div>
    </div>
  </div>



@endsection