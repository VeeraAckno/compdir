<!-- /*************************************************************************************************************
* Company    : AcknoTech 
* Copy Right  : All rights reserved.....  
* File Name   : master.blade.php
* Description : This is file is used for master content  
* Initial Version : 1.0 
* Modification :  
*  History       :  Version             Reason                                    Date                          Modify By  
*                       1.1                  Some reasone                          Jul-20-2015                 Veer
*
*
*************************************************************************************************************/ -->
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow">
        <meta name="keywords" content="Acknotech , Customer business focused Consulting, Product development , Platform development, mobile solutions, agile framework" />
        <meta name="description" content="AcknoTech is a young, dynamic and customer business focused Consulting Solution firm backed by TEAM of highly qualified & experienced professionals from the industry and committed to deliver world-class business solutions to a wide range of enterprises at competitive price" />

        <title>AcknoTech - Customer business focused Consulting, Product development , Platform development &amp; IT Services</title>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="/js/gootrans.js"></script>
    <script src="/js/gen_validatorv4.js"></script>
    <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">

    <style type="text/css">
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65565552-1', 'auto');
  ga('send', 'pageview');

</script>
    <meta name="google-translate-customization" content="23fb17e05bc77e87-b49432a6d81b38b1-g96ae232fbcb3a35d-e"></meta>
div.goog-te-gadget-simple{ border-radius:7px; background:#fff; padding:3px; border: 1px solid rgba(0,0,0,0.15);}
    box-shadow: 0 1px 1px rgba(50,50,50,0.1);}
a.goog-te-menu-value{ text-decoration:none;}
a.goog-te-menu-value > span {color:#d8930e; font-family:Verdana, Geneva, sans-serif; font-size:11px;font-weight:bold;}
          </style>
</head>
<body>
<div class="wrapper">
        <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="/" class="navbar-brand"><img src="/images/ack-logo.png"></a>
        </div>
        <nav id="bs-navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            {{--<li class="{{Request::path() == '/' ? 'active' : ''}}">--}}
            {{--<li class="{{Request::path() == '/' ? 'active' : ''}}">--}}
              {{--<a href="/">Home</a>--}}
            {{--</li>--}}
            <li class="dropdown {{Request::segment(1) == 'solutions' ? 'active' : ''}}" >

                              <a class="menu-active" href="#" role="button" aria-haspopup="true" aria-expanded="false">Solutions<span class="caret"></span></a>
                              <ul class="dropdown-menu" id="solutions">
                              <li class="dropdown-header">Enterprise Solutions</li>
                              <li><a href="{{ url('/solutions/erp') }}">ERP</a></li>
                              <li><a href="{{ url('/solutions/crm') }}">CRM</a></li>
                              <li><a href="{{ url('/solutions/ecommerce') }}">E-Commerce</a></li>
                              <li><a href="{{ url('/solutions/bpm') }}">BPM</a></li>
                              <li><a href="{{ url('/solutions/bi') }}">BI & Analytics</a></li>
                              <li role="separator" class="divider"></li>
                              <li class="dropdown-header">IT Services</li>
                              <li><a href="{{ url('/solutions/software') }}">Software Development</a></li>
                              <li><a href="{{ url('/solutions/infrastructure') }}">Infrastructure Support</a></li>
                              <li><a href="{{ url('/solutions/app-support') }}">Application Support</a></li>
                              <li><a href="{{ url('/solutions/db-support') }}">Database Support</a></li>
                              <li><a href="{{ url('/solutions/testing') }}">Software Testing</a></li>
                              <li><a href="{{ url('/solutions/offshore') }}">Ind Offshore Center</a></li>
                              <li><a href="{{ url('/solutions/staff-aug') }}">Staff Augmentation</a></li>
                            </ul>
                            </li>

            <li class="dropdown {{Request::segment(1) == 'industry' ? 'active' : ''}}">
                            <a class="menu-active" href="#" role="button" aria-haspopup="true" aria-expanded="false">Industry<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="{{ url('/industry/manufacture') }}">Manufacturing</a></li>
                              <li><a href="{{ url('/industry/retail') }}">Retail</a></li>
                              <li><a href="{{ url('/industry/health') }}">Health Care</a></li>
                              <li><a href="{{ url('/industry/telecom') }}">Telecom</a></li>
                              <li><a href="{{ url('/industry/finance') }}">Finance</a></li>
                              <li><a href="{{ url('/industry/realestate') }}">Real Estate</a></li>
                              <!-- <li><a href="{{ url('/industry/agriculture') }}">Agriculture</a></li> -->
                              <li><a href="{{ url('/industry/it') }}">IT Services</a></li>

                            </ul>
                          </li>

            <li class="dropdown {{Request::segment(1) == 'technologies' ? 'active' : ''}}">
                                        <a class="menu-active" href="#" role="button" aria-haspopup="true" aria-expanded="false">Technology<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                          <li><a href="{{ url('/technologies/sap') }}">SAP</a></li>
                                          <li><a href="{{ url('/technologies/microsoft') }}">Microsoft</li>
                                          <li><a href="{{ url('/technologies/odoo') }}">Odoo</a></li>
                                          <li><a href="{{ url('/technologies/java') }}">Java</a></li>
                                          <li><a href="{{ url('/technologies/sugarcrm') }}">Sugar CRM</a></li>
                                          <li><a href="{{ url('/technologies/suitecrm') }}">Suite CRM</a></li>

                                        </ul>
                                      </li>

            <li class="dropdown {{Request::segment(1) == 'company' ? 'active' : ''}}">
                                        <a class="menu-active" href="#" role="button" aria-haspopup="true" aria-expanded="false">Company<span
class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                          <li><a href="{{ url('/company/about') }}">about Us</a></li>
                                          <li><a href="{{ url('/company/careers') }}">Career Opportunity</a></li>

                                        </ul>
                                      </li>
            <li class="{{Request::path() == 'contact' ? 'active' : ''}}">
                <a href="{{ url('/contact') }}">Contact Us</a>
            </li>

          </ul>
         <ul class="nav navbar-nav navbar-right">
                <li>
                <form method="get" id="searchform" id="searchbox_011595884721815984509:c6apsz44dti" action="{{ url('/search') }}">
                    <div class="search-bar">
                        <div class="input-group">
                            <input value="searchbox_011595884721815984509:c6apsz44dti" name="cx" type="hidden"/>
                            <input value="FORID:11" name="cof" type="hidden"/>
                          <input type="text" placeholder="Search..." class="form-control" name="s" id="s" onfocus="defaultInput(this)" onblur="clearInput(this)" />
                          <span class="input-group-btn">
                          <input type="submit" id="searchsubmit" value="Go" class="btn btn-default"/>
                          </span>
                        </div>
                      </div>
                </form>
                </li>
                                                @if (Auth::guest())
                                                        <li><a href="{{ url('/auth/login') }}">Employee Login</a></li>
                                                        <li><div id="google_translate_element"></div></li>

                                                @else
                                                        <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                                                                <ul class="dropdown-menu" role="menu">
                                                                        <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                                                                        <li><a href="{{ url('/jobs/create') }}">Post a Job</a></li>
                                                                </ul>
                                                        </li>
                                                @endif
         </ul>
        </nav>
      </div>
    </header>



    @yield('content')

</div>
    <footer class="footer">
          <div class="container">
            <a href="#"><p class="text-muted">Terms of Use</p></a>
            <a href="#"><p class="text-muted">Privacy</p></a>
            <a href="{{ url('/contact') }}"><p class="text-muted">Contact</p></a>
            <a href="{{ url('/sitemap') }}"><p class="text-muted">Sitemap</p></a>
            <p class="text-muted" id="copyright">Copyright@AcknoTech</p>
          </div>
    </footer>


</html>