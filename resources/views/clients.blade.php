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
             <img src="imagesa/sap01.png">
           </div>
           <div>
             <img src="images/sap02.png">
           </div>
        </div>
      </div>
      <div class="col-md-9">
        <h2>Our Clients</h2>
        <p>Our clients engage us in a number of ways—we help them solve business problems, increase visibility and help them thrie in a networked world where customers and employees have become increasingly empowered. We view our clients as partners and work collaboratively with them to achieve results they can measure.</p>
        <br>
        <p>We work both diligently and intelligently to ensure that the needs of our clients come first. And we’re not afraid to push the envelope or encourage restraint. We are only as good as the reputation of our clients, and we willingly put our own reputation on the line to ensure that they get as much out of the relationship as we do.</p>
        <br><br>
        <p>List of clients we worked with:</p>
        <p class="bold-list">
        Client 1<br>
        Client 2
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