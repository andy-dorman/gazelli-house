<?php
require 'lib/Mobile_Detect.php';
require 'lib/config.php';
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
          <li><a href="/menu.php">Treatment Menu</a></li>
          <li><a href="/about.php">About</a></li>
          <li><a href="/membership.php">Guest Registration</a></li>
          <li><a href="http://gazellihouselondon.tumblr.com" target="_blank">Live Beautifully</a></li>
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
          <h2>Guest Registration</h2>
          <p>
            Registering as a Gazelli House Guest will ensure your place within the House and enable us to tailor our service to you as much as possible. Please complete the form below and we will be in touch shortly with you complimentary Membership Card.
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
                    <select class="selectpicker col-xs-12">
                      <option>United Kingdom</option>
                      <option>United States</option>
                    </select>
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
                <div class="form-group checkboxes">
                  <label class="block-caps control-label<?php if(!$detect->isMobile()) { ?> col-xs-3<?php } ?>">What do you think you will enjoy the most about your Gazelli House membership?</label>
                  <div<?php if(!$detect->isMobile()) { ?> class="col-xs-8"<?php } ?>>
                    <?php
                    $index = 1;
                    foreach ($form["enjoy"] as $value) { ?>
                    <div class="col-xs-<?php if($value["name"] === "other") { ?>6<?php } else if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary<?php if($value["name"] === "other") { ?> other<?php }?>">
                      <input type="checkbox" name="enjoy[]" value="<?php echo "enjoy-".$value["name"]; ?>" class="checkbox pull-left" id="<?php echo "enjoy-".$value["name"]; ?>"/>
                      <label class="pull-left" for="<?php echo "enjoy-".$value["name"]; ?>"><?php echo isset($value["label"]) ? $value["label"] : $value["name"]; ?></label>
                      <?php if($value["name"] === "other") { ?>
                        <input class="form-control other" type="text" />
                      <?php } ?>
                    </div>
                    <?php if(($detect->isMobile() && $index%2 === 0) || (!$detect->isMobile() && $index%3 === 0) ) { ?>
                      <div class="clearfix visible-lg-block"></div>
                    <?php }
                    $index++;
                    } ?>
                  </div>
                </div>
                <div class="form-group checkboxes">
                  <label class="block-caps control-label<?php if(!$detect->isMobile()) { ?> col-xs-3<?php } ?>">Please share with us your interests so we can make sure there is something for every Gazelli House member to enjoy</label>
                  <div<?php if(!$detect->isMobile()) { ?> class="col-xs-8"<?php } ?>>
                    <?php
                    $index = 1;
                    foreach ($form["share"] as $value) { ?>
                    <div class="col-xs-<?php if($value["name"] === "other") { ?>6<?php } else if(!$detect->isMobile()) { ?>4<?php } else {?>6<?php } ?> checkbox checkbox-primary<?php if($value["name"] === "other") { ?> other<?php }?>">
                      <input type="checkbox" name="share[]" value="<?php echo "share-".$value["name"]; ?>" class="checkbox pull-left" id="<?php echo "share-".$value["name"]; ?>"/>
                      <label class="pull-left" for="<?php echo "share-".$value["name"]; ?>"><?php echo isset($value["label"]) ? $value["label"] : $value["name"]; ?></label>
                      <?php if($value["name"] === "other") { ?>
                        <input class="form-control other" type="text" />
                      <?php } ?>
                    </div>
                    <?php if(($detect->isMobile() && $index%2 === 0) || (!$detect->isMobile() && $index%3 === 0) ) { ?>
                      <div class="clearfix visible-lg-block"></div>
                    <?php }
                    $index++;
                    } ?>
                  </div>
                </div>
                <div class="form-group checkboxes terms">
                  <div class="col-xs-10 checkbox checkbox-primary">
                    <input type="checkbox" name="terms" value="1" class="checkbox pull-left" id="terms"/>
                    <label class="pull-left" for="terms">I promise to treat the Gazelli House and the objects within it with the same respect I would treat my own home. I look forward to meeting and getting to
                   know other House Members and I will always behave with compassion towards them. I understand that the House allows children at selected times only due to
                   workshops and seminars that might be taking place. I agree to comply with the 24 hour cancellation policy that the House operates across all services. Most of all,
                   I vow to enjoy my Membership to the fullest, and remember each day the Gazelli philosophy to Live Beautifully.</label>
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
        </main>
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
if($detect->isMobile() or $detect->isTablet()) {
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
        return window.twttr or (t = { _e: [], ready: function(f){ t._e.push(f) } });
      }(document, "script", "twitter-wjs"));
    </script>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]orfunction(){
      (i[r].q=i[r].qor[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-48048293-2', 'auto');
          ga('send', 'pageview');
    </script>
  </body>
</html>
