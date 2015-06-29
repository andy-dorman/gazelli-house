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
<meta name="description" content="Walton's Street SE3's newest secret! Full details will be revealed in February 2015, but for now we ask you this: if you could achieve one thing, what would it be? Determine your goal, lock it safely with us, and you’ll have already taken the first step towards making it happen.">
<meta name="keywords" content="inspire, goal, inspiration, dream, live, learn, family, london, south kensington, walton street, secret, event, launch, new, spa, treatment, facial, massage, skincare, skin, advice, help, mentor, explore, wellbeing, wellness, emotion, emotional, journey, health, body, mind, soul, captivate, engage, interact, innovative, different, concept, groundbreaking, key, lock, safe, unlock, potential, discover">
<meta name="author" content="">

<title>Gazelli House - About</title>

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
            The Gazelli world has been built upon a foundation of expertise in results driven skincare. Now, in the Gazelli House London, you can be fully immersed in the brand’s creativity and commitment to enhancing lives. 
            </p>
            <p>
            Divided into three unique floors, the House offers a range of services, workshops and lifestyle events that provide guests with the tools to enrich every aspect of their wellbeing. 
            </p>
            <p>
            With its intimate, homely and inviting interiors, the Gazelli House is the perfect space in which to learn and be inspired, a unique atmosphere that encourages healing through all of the senses.
            </p>
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
