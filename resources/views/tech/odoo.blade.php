@extends('master')

@section('content')

<div class="container" id="secondary">
    <div class="row">
      <div class="col-md-3">
        <div id="slideshow">
           <div>
             <img src="/../images/odoo.png">
           </div>
        </div>
      </div>
      <div class="col-md-9">
        <h2>Odoo</h2>
        <p>Odoo , formerly OpenERP  and Tiny ERP is basically a software package free of integrated management including very many modules to simplify business management as a whole. The software is under AGPL license and is used by over 2 million users worldwide.

Originally an ERP , the software has been extending its functionality to applications front office (CMS, e-commerce, Blogs, Forums, News, Events, LiveChat, Job offers, etc).
The free aspect of the software has enabled the development of many third-party modules created by the developer community. These applications are for some officially validated by the publisher while others are intended only specific versions.</p>
        <br><hr>
        <br><br>
        <div class="row">
            <div class="col-md-6">
              <h3>Features</h3>
              <ul>
                <li>RSS sales</li>
                <li>Create Online quotes</li>
                <li>Address Book</li>
                <li>Warehouse management with automatic controls</li>
                <li>Manufacturing and Resource Planning</li>
                <li>Accounting & Finance</li>
                <li>Expense Claims Management</li>
              </ul>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
            </div>
             <div class="col-md-6">
                <img class = "tech-img" src="/../images/odoo.png">
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
             </div>
        </div>
      </div>
    </div>
  </div>



@endsection