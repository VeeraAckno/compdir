@extends('master')

@section('content')

<div class="container" id="secondary">
    <div class="row">
      <div class="col-md-4">
        <div id="slideshow">
           <div>
             <img src="/../images/crm1.jpg">
           </div>
        </div>
      </div>
      <div class="col-md-8">
        <h2>Customer Relationship Management</h2>
        <p>Customer relationship management (CRM) is an approach to managing a company’s interactions with current and future customers. It often involves using technology to organize, automate, and synchronize sales, marketing, customer service, and technical support
        CRM is a customer-oriented feature with service response based on customer input, one-to-one solutions to customers' requirements, direct online communications with customer and customer service centers that are intended to help customers solve their issues.</p>
        <br><hr>
        <br><br>
        <div class="row">
            <div class="col-md-6">
            <h3>Types</h3>
            <ul>
              <li>Call Centers</li>
              <li>Business-to-business</li>
              <li>Social media</li>
              <li>Other Types</li>
            </ul>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
            </div>
             <div class="col-md-6">
                <img class = "tech-img" src="/../images/crm2.jpg">
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
             </div>
        </div>
      </div>
    </div>
  </div>



@endsection