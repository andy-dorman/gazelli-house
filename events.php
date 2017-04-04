<?php
require 'lib/config.php';
require 'lib/Mobile_Detect.php';
$detect = new Mobile_Detect;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Gazelli House, launching in South Kensington in London 2015, brings a new and innovative concept to the beauty industry.  Based on a foundation of unparalleled expertise in skincare, Gazelli is expanding in to lifestyle where all areas of well-being are addressed with a dynamic calendar of events and a team of specialist practitioners.">
<meta name="keywords" content="skincare, targeted, treatments, lifting, sculpting, formulations, acne, skin, ageing, anti-ageing, youth, wrinkles, fine lines, lymphatic, Gazelli, Dr Hamzayeva, experts, specialist, Askarova, Azerbaijan, Baku, Oxyjet, Radiofrequency, Microneedling, MesoVytal, Microdermabrasion, High frequency, LED, light therapy, health, body, mind, soul, mindfulness, nutrition, lifestyle, programme, discover, learn, create, hypnotherapy, life coach, counselling, nlp, cbt, sound therapy, art therapy, ayuverda, wellbeing, wellness, emotional intelligence, advice, mentor, journey, spirit, spiritual, yoga">
<meta name="author" content="">

<title>Gazelli House - Events</title>

<!-- Bootstrap core CSS -->
<link href="/bower_components/bootstrap-calendar/css/calendar.css" rel="stylesheet">
<link href="stylesheets/style.css?v=2.0" rel="stylesheet">
<link href="stylesheets/jquery.fancybox.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-precomposed.png">
<link rel="icon" href="/favicon.ico">

  </head>
  <body class="events-page">
  <a href="#" name="top" id="top"></a>
    <!-- Docs master nav -->
    <header class="navbar navbar-static-top text-center" id="top" role="banner">
      <div class="navbar-header">
        <a href="tel:+447909092343" id="phone-link" class="glyphicon glyphicon-earphone"></a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="../" class="navbar-brand">Gazelli House</a>
      </div>
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="/treatments">Treatments</a></li>
          <li class="active"><a href="/events">Events</a></li>
          <li><a href="/explore">Explore</a></li>
          <li><a href="/register">Registration</a></li>
          <li class="book-now">BOOK NOW - 07909 092 343</li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        </ul>
      </nav>
    </header>
    <div class="container">
      <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
      <div>
        <!-- Page content of course! -->
        <main id="content" role="main">
          <h2 class="text-center">Calendar of Events</h2>
          <div class="row">
            <div id="calendar-container" class="col-xs-12 col-sm-5">
              <div class="calendar-nav">
                <button class="btn btn-primary" data-calendar-nav="prev"><i class="fa fa-caret-left"></i></button>
                <h4 class="month-title"></h4>
                <button class="btn btn-primary" data-calendar-nav="next"><i class="fa fa-caret-right"></i></button>
              </div>
              <div id="calendar"></div>
            </div>
            <div class="col-xs-12 col-sm-7">
              <p>
                Here at the Gazelli House, we want to help you make positive, long-term changes in a way that fit into your life: tiny
                tweaks to your emotional and physical wellbeing that feel at once natural and powerful. That’s why we’ve devised an exciting calendar of events. Discover new, alternative therapies, take part in group activities, broaden your interests, and above all, have some fun.
              </p>
              <p>
                We look forward to seeing you there.
              </p>
            </div>
          </div>
          <div class="row">
            <div id="events" class="col-xs-12">
            </div>
          </div>


          <hr/>
          <div class="text-center footer">
            <p>Gazelli House | 174 Walton Street | London | SW3 2JL<br/>
              BOOK NOW - <span>07909 092 343</span>
            </p>
          </div>
        </main>

        <?php
        if($detect->isMobile()) {
          $limit = 24;
        } else {
          $limit = 100;
        }
        ?>
      </div>
      <div class="social-icons">
        <ul class="list-inline text-center">
            <li class="social-icon bird"><a href="https://www.twitter.com/gazellihouse" target="_blank"></a></li>
            <li class="social-icon facebook"><a href="https://www.facebook.com/GazelliHouse" target="_blank"></a></li>
            <li class="social-icon icon-3"><a href="https://www.instagram.com/gazellihouse" target="_blank"></a></li>
          </ul>
      </div>
    </div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="javascripts/gazelli-house.min.js"></script>

<?php
if($detect->isMobile() || $detect->isTablet()) {
?>
<script type="text/javascript">
function mobileclickToHover() {
  $('.key-panel.goal').each(function(index, value) {
    $(value).unbind("click");
    $(value).on("click", function(){
      $('.key-panel.goal').removeClass("hover");
      $(this).addClass("hover");
    });
  });
}
$(document).ready(function(){
  mobileclickToHover();
});
</script>
<?php
}
?>
    <script>
      window.twttr = (function (d,s,id) {
        var t, js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return; js=d.createElement(s); js.id=id; js.async=1;
        js.src="https://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs);
        return window.twttr || (t = { _e: [], ready: function(f){ t._e.push(f) } });
      }(document, "script", "twitter-wjs"));
    </script>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-48048293-2', 'auto');
          ga('send', 'pageview');
    </script>
  </body>
</html>
