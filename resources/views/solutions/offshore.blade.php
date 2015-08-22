@extends('master')

@section('content')

<div class="container" id="secondary">
    <div class="row">
      <div class="col-md-4">
        <div id="slideshow">
           <div>
             <img src="/../images/offshore1.jpg">
           </div>
        </div>
      </div>
      <div class="col-md-8">
        <h2>OFFSHORE DEVELOPMENT CENTRE (ODC)</h2>
        <ul>
          <li>Application development on Java and .Net</li>
          <li>Application development on IBM Enterprise Service Bus (ESB)</li>
          <li>Troubleshooting application code issues</li>
          <li>Database Performance monitoring</li>
          <li>Performance Optimization of queries which have a long execution time</li>
        </ul>
        <br><hr>
        <br><br>
        <div class="row">
            <div class="col-md-6">
              <h3>SLA based Production Support</h3>
              <ul>
                <li>End to End support of Production Issues which includes </li>
                <li>Ticketing - i.e. Service ManagementFirst level troubleshooting of Network, Operating System, Database and Application ServeResolution of issues</li>
                <li>First level troubleshooting of Network, Operating System, Database and Application ServeResolution of issues</li>
                <li>Resolution of issues</li>
                <li>Database Performance monitoring</li>
                
              </ul>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
            </div>
             <div class="col-md-6">
                <img class = "tech-img" src="/../images/offshore2.png">
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
             </div>
        </div>
      </div>
    </div>
  </div>



@endsection