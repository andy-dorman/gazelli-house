<?php
require 'lib/config.php';
require 'lib/Mobile_Detect.php';
$detect = new Mobile_Detect;

$carousel_images = array();

if ($handle = opendir($img_dir)) {
  /* This is the correct way to loop over the directory. */
  while (false !== $entry = readdir($handle)) {
    if($entry !== "." && $entry !== "..") {
      $img_obj = new stdClass();
      $img_obj->image = $entry;
      $img_obj->contrast = strpos($entry, '-dark') ? 'dark' : 'light';
      $carousel_images[] = $img_obj;
    }
  }
  shuffle($carousel_images);
  while(count($carousel_images) > 3) {
    array_shift($carousel_images);
  }
}
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

<title>Gazelli House - About</title>

<!-- Bootstrap core CSS -->
<link href="stylesheets/style.css" rel="stylesheet">
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
  <body>
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
          <li><a href="/menu.php">Treatment Menu</a></li>
          <li><a href="/about.php">About</a></li>
          <li><a href="/membership.php">Guest Registration</a></li>
          <li><a href="http://gazellihouselondon.tumblr.com" target="_blank">Live Beautifully Campaign</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        </ul>
      </nav>
      <div id="carousel-example-generic" class="carousel carousel-fade slide">
        <!-- Indicators -->
        <ol class="carousel-indicators" data-animation="animated slideDown">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/headers/carousel/living-room.jpg" alt="Living Room" data-animation="animated">
            <div class="carousel-caption light">
              Living Room
            </div>
          </div>
          <div class="item">
          <img src="images/headers/carousel/foundations-dark.jpg" alt="Foundations" data-animation="animated">
            <div class="carousel-caption light">
              Foundations
            </div>
          </div>
          <div class="item">
            <img src="images/headers/carousel/sky-parlour.jpg" alt="Sky Parlour" data-animation="animated">
            <div class="carousel-caption light">
             Sky Parlour
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
          <div id="carousel-text" class="carousel carousel-fade slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators" data-animation="animated slideDown">
          <li data-target="#carousel-text" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-text" data-slide-to="1"></li>
          <li data-target="#carousel-text" data-slide-to="2"></li>
        </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <h2>Discover & Inspire</h2>
                <p>
                  In the heart of the House is a warm and welcoming space in which to connect with others and discover our innovative calendar of events. This room will bring people together and encourage us to learn, discover and stretch our imagination.
                </p>
              </div>
              <div class="item">
                <h2>Expertise in Skincare</h2>
                <p>
                  Our select team of Facial Experts delivers our next-generation skincare treatments based on Dr Hamzayeva’s potent formulations, targeted hands-on techniques, and seamlessly integrated state-of-the-art technology.
                </p>
              </div>
              <div class="item">
                <h2>Awaken the Senses</h2>
                <p>
                  An intimate space flooded with natural light. Here you can enjoy one-to-one consultations with our range of insightful, intuitive and highly skilled specialist practitioners and coaches.
                </p>
              </div>
            </div>
          </div>
          <hr/>
          <div>
            <a href="/membership.php" id="sign-up">Click here to sign up</a>
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
