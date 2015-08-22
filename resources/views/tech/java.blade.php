@extends('master')

@section('content')

<div class="container" id="secondary">
    <div class="row">
      <div class="col-md-3">
        <div id="slideshow">
           <div>
             <img src="/../images/java.jpg">
           </div>
        </div>
      </div>
      <div class="col-md-9">
        <h2>Java</h2>
        <p>Java is a set of several computer software and specifications developed by Sun Microsystems, later acquired by Oracle Corporation, that provides a system for developing application software and deploying it in a cross-platform computing environment. Java is used in a wide variety of computing platforms from embedded devices and mobile phones to enterprise servers and supercomputers. While less common, Java applets run in secure, sandboxed environments to provide many features of native applications and can be embedded in HTML pages.

Writing in the Java programming language is the primary way to produce code that will be deployed as byte code in a Java Virtual Machine (JVM); byte code compilers are also available for other languages, including Ada, JavaScript, Python, and Ruby. In addition, several languages have been designed to run natively on the JVM, including Scala, Clojure and Groovy.</p>
        <br><hr>
        <br><br>
        <div class="row">
            <div class="col-md-6">
            <p>The Java platform is a suite of programs that facilitate developing and running programs written in the Java programming language. The platform is not specific to any one processor or operating system, rather an execution engine (called a virtual machine) and a compiler with a set of libraries are implemented for various hardware and operating systems so that Java programs can run identically on all of them. There are multiple platforms, each targeting a different class of devices</p>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
            </div>
             <div class="col-md-6">
                <img class = "tech-img" src="/../images/java.jpg">
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
             </div>
        </div>
      </div>
    </div>
  </div>



@endsection