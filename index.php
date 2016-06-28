<?php
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

<title>Gazelli House</title>

<!-- Bootstrap core CSS -->
<link href="stylesheets/style.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-precomposed.png">
<link rel="icon" href="/favicon.ico">

  </head>
  <body class="home-page">
  <a href="#" name="top" id="top"></a>
    <!-- Docs master nav -->
    <header class="navbar navbar-static-top text-center" id="top" role="banner">
      <div class="navbar-header">
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
          <li><a href="/menu">Treatment Menu</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/events">Events</a></li>
          <li><a href="/membership">Guest Registration</a></li>
          <li><a href="https://gazellihouse.phorest.me/book#/service-category?id=9CBphLQfcl9L8yTTnT5Q9Q" target="_blank">Book now</a></li>
          <!--<li><a href="http://gazellihouselondon.tumblr.com" target="_blank">Live Beautifully</a></li>-->
        </ul>
        <ul class="nav navbar-nav navbar-right">
        </ul>
      </nav>
      <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="/images/headers/live-beautifully.jpg" alt="Live Beautifully">
            <div class="carousel-caption narrow">
              Live<br/>Beautifully
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="container">
      <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
      <div>
        <!-- Page content of course! -->
        <main class="text-center" id="content" role="main">
          <div>
          <h2>Gazelli House</h2>
          <p>
            With its intimate, homely and inviting interiors, the Gazelli House is the perfect space in which to learn, feel inspired, and be empowered in a unique atmosphere that encourages healing through all of the senses.
          </p>
          <p>
            Divided into three floors, experience our performance-led treatments and switch off as the therapist’s hands work their magic, hear inspiring guest speakers at evening events, swing by for informal supper clubs, book swaps and poetry readings, and discover new practices and therapies.
          </p>
          <p>
            You’ll find us on Walton Street, in the heart of Belgravia, a light-filled destination where you will fully immerse yourself, discover our story, and write your own.
          </p>
          </div>
          <hr/>
          <div class="text-center footer">
            <p>Gazelli House | 174 Walton Street | London | SW3 2JL<br/>
              TO BOOK ONLINE <a href="https://gazellihouse.phorest.me/book#/service-category?id=9CBphLQfcl9L8yTTnT5Q9Q" target="_blank">CLICK HERE</a>
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
            <li class="social-icon twitter"><a href="http://gazellihouselondon.tumblr.com" target="_blank"></a></li>
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
