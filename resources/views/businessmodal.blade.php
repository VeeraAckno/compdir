@extends('master')

@section('content')

<div class="container" id="secondary">
    <div class="row">
      <div class="col-md-3">
      <h3>Services</h3>
        <div id="slideshow">
           <div>
             <img src="images/prd.jpg">
           </div>
           <div>
             <img src="images/sap01.png">
           </div>
           <div>
             <img src="images/sap02.png">
           </div>
        </div>
      </div>
      <div class="col-md-9">
        <h2>Business Modal</h2>
        <br>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <br>
        <br>
        <h3>Time and material model</h3>
        <br><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <br>
        <h3>Fixed-price model</h3>
        <br>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

      </div>
    </div>
  </div>

  <script>
      $(document).ready(function(){
          $("#slideshow > div:gt(0)").hide();

              setInterval(function() {
                $('#slideshow > div:first')
                  .fadeOut(1000)
                  .next()
                  .fadeIn(1000)
                  .end()
                  .appendTo('#slideshow');
              },  3000);
      });

  </script>


@endsection