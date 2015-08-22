@extends('master')

@section('content')

<div class="container" id="secondary">
    <div class="row">
      <div class="col-md-4">
        <div id="slideshow">
           <div>
             <img src="/../images/testing1.jpg">
           </div>
        </div>
      </div>
      <div class="col-md-8">
        <h2>Software Testing</h2>
        <p>Software testing is an investigation conducted to provide stakeholders with information about the quality of the product or service under test.Software testing can also provide an objective, independent view of the software to allow the business to appreciate and understand the risks of software implementation. Test techniques include the process of executing a program or application with the intent of finding software bugs (errors or other defects).

It involves the execution of a software component or system component to evaluate one or more properties of interest.</p>
        
        <br><hr>
        <br><br>
        <div class="row">
            <div class="col-md-6">
            <ul>
              <li>meets the requirements that guided its design and development.</li>
              <li>responds correctly to all kinds of inputs</li>
              <li>performs its functions within an acceptable time</li>
              <li>is sufficiently usable</li>
              <li>can be installed and run in its intended environments</li>
              <li>achieves the general result its stakeholders desire.</li>
            </ul>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
            </div>
             <div class="col-md-6">
                <img class = "tech-img" src="/../images/testing2.jpg">
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
             </div>
        </div>
      </div>
    </div>
  </div>



@endsection