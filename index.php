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
<meta name="description" content="Walton's Street SE3's newest secret! Full details will be revealed in February 2015, but for now we ask you this: if you could achieve one thing, what would it be? Determine your goal, lock it safely with us, and you’ll have already taken the first step towards making it happen.">
<meta name="keywords" content="inspire, goal, inspiration, dream, live, learn, family, london, south kensington, walton street, secret, event, launch, new, spa, treatment, facial, massage, skincare, skin, advice, help, mentor, explore, wellbeing, wellness, emotion, emotional, journey, health, body, mind, soul, captivate, engage, interact, innovative, different, concept, groundbreaking, key, lock, safe, unlock, potential, discover">
<meta name="author" content="">

<title>Gazelli House</title>

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
          <li><a href="/about.php">About Gazelli House</a></li>
          <li><a href="/membership.php">Membership Registration</a></li>
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
          <img src="images/headers/carousel/foundations-dark.jpg" alt="Foundations" data-animation="animated">
            <div class="carousel-caption dark">
              Foundations
            </div>
          </div>
          <div class="item">
            <img src="images/headers/carousel/living-room.jpg" alt="Living Room" data-animation="animated">
            <div class="carousel-caption light">
              Living Room
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
                <h2>Expertise in Skincare</h2>
                <p>
                  Our hand-selected team of Facial Experts deliver our next-generation skincare treatments based on the exclusive combination of Dr Hamzayeva’s iconic Gazelli White Oil™ formulations with the best in state-of-the-art technology. 
                </p>
              </div>
              <div class="item">
                <h2>Discover & Inspire</h2>
                <p>
                  In the heart of the House you will find a warm and welcoming space in which to connect with others and discover our innovative calendar of events and workshops. This room will bring people together, and encourage us to stretch our intellect and imagination.
                </p>
              </div>
              <div class="item">
                <h2>Awaken the Senses</h2>
                <p>
                  An intimate space flooded with natural light. Here you can enjoy one-to-one consultations with resident and visiting lifestyle experts, while reawakening all the channels of the senses in a spirit of healing and mindfulness.
                </p>
              </div>
            </div>
          </div>
          <hr/>
          <div>
            <p>
              Sign up to register your interest and recieve your complimentary membership
            </p>
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
            <li class="social-icon bird"><a href="https://www.twitter.com/WaltonSecret" target="_blank"></a></li>
            <li class="social-icon facebook"><a href="https://www.facebook.com/WaltonSecret" target="_blank"></a></li>
            <li class="social-icon icon-3"><a href="https://www.instagram.com/walton_secret" target="_blank"></a></li>
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
  </body>
</html>
