@extends('master')

@section('content')

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <!-- <div class="item active">
      <img src="images/sap.png" alt="...">
      <div class="carousel-caption">

      </div>
    </div> -->
    <div class="item active">
      <img src="images/marketing.png" alt="...">
      <div class="carousel-caption">

      </div>
    </div>

    <div class="item">
          <img src="images/banner.png" alt="...">
          <div class="carousel-caption">

          </div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
    <div class="row">
      <div class="col-md-3">
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
        <div>
        <h2>Welcome to AcknoTech</h2>
        {{--<p>We the team at GuidedTree are conversant in the top enterprise products, across the core verticals of the industry. Our motto is to put into effect the opportunity of bringing this expertise into the business, by leveraging the best-integrated enterprise solutions with utmost cost-effectiveness. </p>--}}
        {{--<p>We at GuidedTree are firm believers in enhancing the flexibility towards the scope and perspective awareness on the supply chain activity of an enterprise. The ongoing business activity demands a strong integration in the supply chain in order to accomplish the competitive advantage and sustained growth. We have chosen SAP towards this and have had the profound expertise in deploying the best integrated solutions towards the supply chain activity.</p>--}}
            <p> AcknoTech is a young, dynamic and customer business focused Consulting Solution firm backed by TEAM of highly qualified & experienced professionals from the industry and committed to deliver world-class business solutions to a wide range of enterprises at competitive price.  </p>
            <p>  We have been good enough in delivering cost effective and innovative solutions to corporates and institutions.
               We have a very strong expertise in understanding and acknowledging IT needs by implementing rightful business applications whether it be a simple website, CRM, ERP, BPM, BI& Analytics, eCommerce or be a suggestion for our clients.  </p>
        </div>
        <div class="row" id="boxes">
            <h3 style="text-align: center; font-weight: bold">WHY US</h3><br>
          <div class="col-md-4">
            <div id="box-1" class="box">
            <img src="images/logo.png">
            <p>Our streamlined software development process and highly skilled resources allows us to provide Quality & Affordable solutions with faster Turnaround</p>
            <h4>Quality & Affordable</h4>
            </div>
          </div>
          <div class="col-md-4">
            <div id="box-2" class="box">
                <img src="images/logo.png">
                <p>We conduct business in a manner that continuously improves the quality of goods and services, reduces costs, increases speed and enhances flexibility to achieve competitive superiority.</p>
                <h4>Operational excellence </h4>
            </div>
          </div>
          <div class="col-md-4">
            <div id="box-3" class="box">
                <img src="images/logo.png">
                <p>To be successful, it is very important to understand & acknowledge how to leverage information technologies/ systems and automation, to provide value based services for business</p>
                <h4>Acknowledge</h4>
            </div>
          </div>
        </div>
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