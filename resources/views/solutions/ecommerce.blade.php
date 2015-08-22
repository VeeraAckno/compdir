@extends('master')

@section('content')

<div class="container" id="secondary">
    <div class="row">
      <div class="col-md-4">
        <div id="slideshow">
           <div>
             <img src="/../images/ecommerce1.jpg">
           </div>
        </div>
      </div>
      <div class="col-md-8">
        <h2>E-Commerce</h2>
        <p>We Strive to serve you with “out of the Box” E-commerce solutions. Our very experienced team of experts have enabled us to do so successfully. You just need to 
        discuss your business and product ideas and you can start selling them immediately with our designed E-commerce Portals.<br><br>
        With our CMS based portal Designs business owners can add in unlimited product categories, sub categories, edit/remove/replace- product pricing, images, product descriptions. Our features of business analytics, sales reports, Inventory management
         system, and customer management are like cherry on the cake for a business owner desiring to move online for E-commerce. </p>
        <br><hr>
        <br><br>
        <div class="row">
            <div class="col-md-6">
            <h4>E-commerce Features</h4>
            <ul>
              <li>Inventory Management System</li>
              <li>Online Sales Reports</li>
              <li>Multi-Currency Support</li>
              <li>Discount or Reward based schemes</li>
              <li>Customer Product Reviews</li>
              <li>Integrated Shipping</li>
              <li>Safe and Secure Payment Gateway</li>
              <li>SEO Friendly Designing</li>
            </ul>
            </div>
             <div class="col-md-6">
                <img class = "tech-img" src="/../images/ecommerce2.jpg">
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
             </div>
        </div>
      </div>
    </div>
  </div>



@endsection