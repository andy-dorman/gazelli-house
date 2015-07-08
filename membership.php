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

<title>Gazelli House - Membership Registration</title>

<!-- Bootstrap core CSS -->
<link href="stylesheets/style.css" rel="stylesheet">
<link href="bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">
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
    </header>
    <div class="container">
      <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
      <div>
        <!-- Page content of course! -->
        <main class="text-center" id="content" role="main">
          <h2>Membership</h2>
          <p>
            Gazelli House Membership is completely free of charge. All we ask is that you fill out this quick form to ensure your place within the House, and so that the service we provide you with is as tailored to you as possible. We look forward to welcoming you to the Gazelli world.
          </p>
          <form <?php if(!$detect->isMobile()) { ?> class="form-horizontal" <?php } ?>role="form" id="membership-registration" action="entry.php" method="post">
            <fieldset>
              <legend>About you</legend>
                <div class="form-group required">
                <label class="control-label<?php if(!$detect->isMobile()) { ?> col-xs-3<?php } ?>">Full name</label>
                <div<?php if(!$detect->isMobile()) { ?> class="col-xs-8"<?php } ?>>
                    <input type="text" name="fullname" class="form-control"/>
                  </div>
                </div>
                <div class="form-group dob required">
                  <label class="control-label<?php if(!$detect->isMobile()) { ?> col-xs-3<?php } ?>">Date of birth</label>
                  <div<?php if($detect->isMobile()) { ?> class="row"<?php } ?>>
                  <div class="<?php if(!$detect->isMobile()) { ?>col-xs-2 <?php } else { ?>col-xs-4 <?php } ?> separator">
                    <input type="text" name="day" class="form-control" placeholder="DD"/>
                  </div>
                  <div class="<?php if(!$detect->isMobile()) { ?>col-xs-2 <?php } else { ?>col-xs-4 <?php } ?> separator">
                    <input type="text" name="month" class="form-control" placeholder="MM"/>
                  </div>
                  <div class="<?php if(!$detect->isMobile()) { ?>col-xs-2 <?php } else { ?>col-xs-4 <?php } ?>">
                    <input type="text" name="year" class="form-control" placeholder="YYYY"/>
                  </div>
                  </div>
                </div>
                <div class="form-group required">
                  <label class="control-label<?php if(!$detect->isMobile()) { ?> col-xs-3<?php } ?>">Address 1</label>
                  <div<?php if(!$detect->isMobile()) { ?> class="col-xs-8"<?php } ?>>
                    <input type="text" name="address1" class="form-control"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label<?php if(!$detect->isMobile()) { ?> col-xs-3<?php } ?>">Address 2</label>
                  <div<?php if(!$detect->isMobile()) { ?> class="col-xs-8"<?php } ?>>
                    <input type="text" name="address2" class="form-control"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label<?php if(!$detect->isMobile()) { ?> col-xs-3<?php } ?>">Town / City</label>
                  <div<?php if(!$detect->isMobile()) { ?> class="col-xs-8"<?php } ?>>
                    <input type="text" name="city" class="form-control"/>
                  </div>
                </div>
                <div class="form-group required">
                  <label class="control-label<?php if(!$detect->isMobile()) { ?> col-xs-3<?php } ?>">Post code</label>
                  <div<?php if(!$detect->isMobile()) { ?> class="col-xs-8"<?php } ?>>
                    <input type="text" name="postcode" class="form-control"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label<?php if(!$detect->isMobile()) { ?> col-xs-3<?php } ?>">Country</label>
                  <div<?php if(!$detect->isMobile()) { ?> class="col-xs-8"<?php } ?>>
                    <input type="text" name="country" class="form-control"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label<?php if(!$detect->isMobile()) { ?> col-xs-3<?php } ?>">Telephone</label>
                  <div<?php if(!$detect->isMobile()) { ?> class="col-xs-8"<?php } ?>>
                    <input type="text" name="tel" class="form-control"/>
                  </div>
                </div>
                <div class="form-group required">
                  <label class="control-label<?php if(!$detect->isMobile()) { ?> col-xs-3<?php } ?>">Email</label>
                  <div<?php if(!$detect->isMobile()) { ?> class="col-xs-8"<?php } ?>>
                    <input type="text" name="email" class="form-control"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label<?php if(!$detect->isMobile()) { ?> col-xs-3<?php } ?>">Re-enter email</label>
                  <div<?php if(!$detect->isMobile()) { ?> class="col-xs-8"<?php } ?>>
                    <input type="text" name="confirm_email" class="form-control"/>
                  </div>
                </div>
              <legend>Your interests</legend>
                <div class="form-group">
                  <label class="control-label<?php if(!$detect->isMobile()) { ?> col-xs-3<?php } ?>">What interests you most about joining the Gazelli House community?</label>
                  <div<?php if(!$detect->isMobile()) { ?> class="col-xs-8"<?php } ?>>
                    <textarea name="interests" class="form-control" placeholder="Between 50 - 100 words"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label<?php if(!$detect->isMobile()) { ?> col-xs-3<?php } ?>">Which of the following areas do you enjoy?</label>
                  <div<?php if(!$detect->isMobile()) { ?> class="col-xs-8"<?php } ?>>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="literature" id="literature" class="pull-left" />
                      <label class="pull-left" for="literature">Literature</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="art" id="art" class="checkbox pull-left" />
                      <label class="pull-left" for="art">Art</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="languages" class="checkbox pull-left" id="languages"/>
                      <label class="pull-left" for="languages">Languages</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="fashion" class="checkbox pull-left" id="fashion"/>
                      <label class="pull-left" for="fashion">Fashion</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="cosmetics" class="checkbox pull-left" id="cosmetics"/>
                      <label class="pull-left" for="cosmetics">Cosmetics</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="spirituality" class="checkbox pull-left" id="spirituality"/>
                      <label class="pull-left" for="spirituality">Spirituality</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="self_development" class="checkbox pull-left" id="self_development"/>
                      <label class="pull-left" for="self_development">Self-development</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="body_treatments" class="checkbox pull-left" id="body_treatments"/>
                      <label class="pull-left" for="body_treatments">Body Treatments</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="skincare" class="checkbox pull-left" id="skincare"/>
                      <label class="pull-left" for="skincare">Skincare</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" class="checkbox pull-left" id="life-coaching"/>
                      <label class="pull-left" for="life-coaching">Life Coaching</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="facial_treatments" class="checkbox pull-left" id="facial_treatments"/>
                      <label class="pull-left" for="facial_treatments">Facial Treatments</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="alternative_therapies" class="checkbox pull-left" id="alternative_therapies"/>
                      <label class="pull-left" for="alternative_therapies">Alternative Therapies</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="travel" class="checkbox pull-left" id="travel"/>
                      <label class="pull-left" for="travel">Travel</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="ayurveda" class="checkbox pull-left" id="ayurveda"/>
                      <label class="pull-left" for="ayurveda">Ayurveda</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="lifestyle" class="checkbox pull-left" id="lifestyle"/>
                      <label class="pull-left" for="lifestyle">Lifestyle</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="nutrition" class="checkbox pull-left" id="nutrition"/>
                      <label class="pull-left" for="nutrition">Nutrition</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="fitness" class="checkbox pull-left" id="fitness"/>
                      <label class="pull-left" for="fitness">Fitness</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="theatre" class="checkbox pull-left" id="theatre"/>
                      <label class="pull-left" for="theatre">Theatre</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="ballet" class="checkbox pull-left" id="ballet"/>
                      <label class="pull-left" for="ballet">Ballet</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="socialising" class="checkbox pull-left" id="socialising"/>
                      <label class="pull-left" for="socialising">Socialising</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="relaxing" class="checkbox pull-left" id="relaxing"/>
                      <label class="pull-left" for="relaxing">Relaxing</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="film_screenings" class="checkbox pull-left" id="film_screenings"/>
                      <label class="pull-left" for="film_screenings">Film Screenings</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="yoga" class="checkbox pull-left" id="yoga"/>
                      <label class="pull-left" for="yoga">Yoga</label>
                    </div>
                    <div class="col-xs-<?php if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary">
                      <input type="checkbox" name="events" class="checkbox pull-left" id="events"/>
                      <label class="pull-left" for="events">Events</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label<?php if(!$detect->isMobile()) { ?> col-xs-3<?php } ?>">Are there any areas not listed above that you would like to be available at the Gazelli House?</label>
                  <div<?php if(!$detect->isMobile()) { ?> class="col-xs-8" <?php } ?>>
                    <textarea name="suggestions" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-xs-6 col-xs-offset-3">
                    <button id="submit-form" class="btn btn-primary">Submit</button>
                  </div>
                </div>
            </fieldset>
          </form>
          <hr/>
          <div>
            <p>
              Sign up to register your interest and recieve your complimentary membership
            </p>
            <a href="/membership.php" id="sign-up">Click here to sign up</a>
        </main>
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
