<!-- Initialize session -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Delta offers high-performance unlimited hosting solutions for anyone! They are easy to set up and support is there to help you at every step of the way!">
    <meta name="author" content="bunni">
    <meta name="keywords" content="VPS,hosting,startup,box,deltasec,servers,host">
    <meta name="theme-color" content="#6c4cff"/>

    <!-- Favicon -->
    <link rel="icon" href="/graphics/favicon.ico">

    <!-- Title -->
    <title>Simply better hosting > DeltaSec</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/animsition.min.css">
    <link rel="stylesheet" href="css/home.css">
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6170bba5f7c0440a591f3faf/1fig5pvlq';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</head>
<body>
    <!-- Navigation Bar -->
    <a href="/"><img class="navbar-logo img-fluid" src="graphics/logo.png" alt=""></a>
    <ul class="navbar-list">
        <li class="navbar-item"><a class="nav-link" href="#">Features</a></li>
        <li class="navbar-item"><a class="nav-link" href="#">Panel</a></li>
        <li class="navbar-item"><a class="nav-link" href="#">Support</a></li>
        <?php
            // If not logged in, display the text "account"
            if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
                echo '<li class="navbar-item"><a class="nav-link animsition-link" href="/login">Account</a></li>';
            }
            else {
                echo '<li class="navbar-item"><a class="nav-link animsition-link" href="/login">Logged In</a></li>';
            }
        ?>
    </ul>

    <div class="hero container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <h1 class="hero-header animated fadeInUp" id="heroText">The ultimate host for your grandma's photo collection.</h1>
                <h5 class="hero-subtitle animated fadeInUp">Cloud computing. No limitations. No headaches.</h5>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 animated slideInRight">
                <div class="card hero-card animated fadeIn">
                  <div class="card-body hero-card-body">
                    <h1 class="hero-card-price">$15</h1>
                    <h5 class="hero-card-per-month">per month</h5>
                    <div class="hero-card-button-wrapper">
                        <button type="button" class="btn hero-card-unbox-button" onclick="location.href = '/unbox';">Unbox</button>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <img src="graphics/not-so-wavy.svg" class="benchmarks-wave animated slideInUp">
    </div>

    <div class="benchmarks container-fluid">
        <div class="row benchmarks-row">
            <h1 class="benchmarks-title animated fadeInUp">Equipped to excel.</h1>
            <h5 class="benchmarks-paragraph animated fadeInUp">Our servers are equipped with hardware that you won't find elsewhere. Each box gets a dedicated processor core and its own resources. That means no resource sharing and faster performance across the board.

            <h1 class="benchmarks-graph-title animated fadeIn">Geekbench 4 Single Core Benchmark</h1>
            <div class="benchmarks-graph col-12">
                <ul class="benchmarks-bar">
                    <li class="benchmarks-box-bar" style="width: 73%;"></li><span class="benchmark-stat-box animated fadeIn">3754</span>
                </ul>
                <h3 class="benchmarks-graph-item-name animated fadeIn">Cardboard Box (1 dedicated core)</h3>
                <ul class="benchmarks-bar">
                    <li class="benchmarks-competitor-bar" style="width: 45%;"></li><span class="benchmark-stat-competitor animated fadeIn">2331</span>
                </ul>
                <h3 class="benchmarks-graph-item-name animated fadeIn">Competitor (1 virtual core)</h3>
            </div>
        </div>
    </div>

    <div class="features container-fluid">
        <img src="graphics/wavier-wave.svg" class="features-wave animated slideInDown">
        <div class="features-row row">
            <div class="feature-column col-12 col-sm-12 col-md-12 col-lg-4">
                <img class="img-fluid" src="graphics/NVMe.png">
                <h1 class="feature-title">Blazing fast!</h1>
                <p class="feature-description">We use robust NVMe SSD storage in every one of our servers, providing a blazing fast data transfer experience. On top of that, we RAID our drives with RAID 10, creating an incredible combination of speed and reliability!</p>
            </div>
            <div class="feature-column col-12 col-sm-12 col-md-12 col-lg-4">
                <img class="img-fluid" src="graphics/CPU.png">
                <h1 class="feature-title">Dedicated!</h1>
                <p class="feature-description">We use robust NVMe SSD storage in every one of our servers, providing a blazing fast data transfer experience. On top of that, we RAID our drives with RAID 10, creating an incredible combination of speed and reliability!</p>
            </div>
            <div class="feature-column col-12 col-sm-12 col-md-12 col-lg-4">
                <img class="img-fluid" src="graphics/NVMe.png">
                <h1 class="feature-title">No limitations!</h1>
                <p class="feature-description">We believe that a server that's on the internet should have access to unlimited internet. So that's why our boxes come equipped with unlimited bandwidth!</p>
            </div>
        </div>
        <img class="specs-wave animated slideInUp" src="graphics/specs-wave.svg">
    </div>

    <div class="container-fluid">
        <div class="row specs-row">
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 animated slideInLeft">
                <h1 class="specs-title">Out of the box performance.</h1>
                <h1 class="specs-spec">1 dedicated Core</h1>
                <h1 class="specs-spec">2 Gigabytes of Memory</h1>
                <h1 class="specs-spec">100 Gigabytes of Storage</h1>
                <h1 class="specs-spec">Unlimited Internet</h1>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 animated slideInRight">
                <img src="graphics/unbox.png" class="specs-image img-fluid">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <img src="graphics/wave.svg" class="setup-support-wave animated shake">
        <div class="row setup-support-row">
            <h1 class="setup-support-header animated fadeInUp">Lightning fast setup with actually helpful support.</h1>
            <h5 class="setup-support-paragraph animated fadeInUp">Fed up with lethargic setup times? Or abismal support? With Box, you'll never have to experience that again! Setting up a new box takes a few minutes and support is always there to guide you along.</h5>
            <img src="graphics/setup-fast.png" class="setup-support-image img-fluid animated slideInLeft">
        </div>
    </div>

    <div class="container-fluid footer">
        <div class="row footer-row">
            <div class="footer-wave"></div>
            <h1 class="footer-text">A project made with 💖 by Bunni & Neverland & Beverage</h1>
        </div>
    </div>
    
    <!-- JavaScript -->
    <script src=https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src="js/drift.js"></script>
    <script src="js/cheatcodes.js"/></script>
    <script src="js/heroheadercycle.js"/></script>

    <!-- Animsition -->
    <script>
        $(document).ready(function() {
        $(".animsition").animsition({
            inClass: 'fade-in',
            outClass: 'fade-out',
            inDuration: 1500,
            outDuration: 800,
            linkElement: '.animsition-link',
            // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
            loading: true,
            loadingParentElement: 'body', //animsition wrapper element
            loadingClass: 'animsition-loading',
            loadingInner: '', // e.g '<img src="loading.svg" />'
            timeout: false,
            timeoutCountdown: 5000,
            onLoadEvent: true,
            browser: [ 'animation-duration', '-webkit-animation-duration'],
            // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
            // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
            overlay : false,
            overlayClass : 'animsition-overlay-slide',
            overlayParentElement : 'body',
            transition: function(url){ window.location.href = url; }
        });
        });
    </script>
    <!-- Start of Async Drift Code -->
<!-- <script>
"use strict";==
!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('ybaek5r8ix5s');
</script>
End of Async Drift Code -->
</body>
</html>
