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

<title>Gazelli House</title>

<!-- Bootstrap core CSS -->
<link href="stylesheets/style.css" rel="stylesheet">
<link href="bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">
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
          <li><a href="/index.php">About Gazelli House</a></li>
          <li><a href="/membership.php">Membership Registration</a></li>
          <li><a href="/about.php">Live Beautifully Campaign</a></li>
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
            Our hand-selected team of Facial Experts deliver our next-generation skincare treatments based on the exclusive combination of Dr Hamzayeva’s iconic Gazelli White Oil™ formulations with the best in state-of-the-art technology. 
          </p>
          <form class="form-horizontal" role="form">
            <fieldset>
              <legend>About you</legend>
                <div class="form-group">
                  <label class="control-label col-xs-3">Full name</label>
                  <div class="col-xs-8">
                    <input type="text" name="fullname" class="form-control"/>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-3">Date of birth</label>
                  <div class="col-xs-2">
                    <input type="text" name="day" class="form-control"/>
                  </div>  
                  <div class="col-xs-1">/</div>
                  <div class="col-xs-2">
                    <input type="text" name="month" class="form-control"/>
                  </div>  
                  <div class="col-xs-1">/</div>
                  <div class="col-xs-2">
                    <input type="text" name="year" class="form-control"/>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-3">Address 1</label>
                  <div class="col-xs-8">
                    <input type="text" name="address1" class="form-control"/>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-3">Address 2</label>
                  <div class="col-xs-8">
                    <input type="text" name="address2" class="form-control"/>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-3">Town / City</label>
                  <div class="col-xs-8">
                    <input type="text" name="towncity" class="form-control"/>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-3">Post code</label>
                  <div class="col-xs-8">
                    <input type="text" name="postcode" class="form-control"/>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-3">Country</label>
                  <div class="col-xs-8">
                    <div class="row-fluid">
                      <select class="selectpicker" data-width="100%" data-style="btn-primary">
                        <option>Select one</option>
                        <option>United Kingdom</option>
                        <option>France</option>
                        <option>Germany</option>
                      </select>
                    </div>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-3">Telephone</label>
                  <div class="col-xs-8">
                    <input type="text" name="telephone" class="form-control"/>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-3">Email</label>
                  <div class="col-xs-8">
                    <input type="text" name="email" class="form-control"/>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-3">Re-enter email</label>
                  <div class="col-xs-8">
                    <input type="text" name="renteremail" class="form-control"/>
                  </div>  
                </div>
              <legend>Your interests</legend>
                <div class="form-group">
                  <label class="control-label col-xs-3">What interests you most about joining the Gazelli House community?</label>
                  <div class="col-xs-8">
                    <textarea name="interests" class="form-control"></textarea>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-3">Which of the following areas do you enjoy?</label>
                  <div class="form-group col-xs-8">
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Literature
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Art
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox"  class="checkbox pull-left"/>Languages
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Fashion
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Cosmetics
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Spirituality
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Self-development
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Body Treatments
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Skincare
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Life Coaching
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Facial Treatments
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Alternative Therapies
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Travel
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Ayurveda
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Lifestyle
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Nutrition
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Fitness
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Theatre
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Ballet
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Socialising
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Relaxing
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Film Screenings
                    </div>  
                    <div class="col-xs-3 checkbox">
                      <label class="col-xs-3 pull-left"><input type="checkbox" class="checkbox pull-left" />Yoga
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-3">Are there any areas not listed above that you would like to be available at the Gazelli House?</label>
                  <div class="col-xs-8">
                    <textarea name="suggestion" class="form-control"></textarea>
                  </div>  
                </div>
                <div class="form-group">
                  <button class="btn btn-primary">Submit</button>
                </div>
            </fieldset>
          </form>
          <hr/>
          <div>
            <p>
              Sign up to register your interest and recieve your complimentary membership
            </p>
            <button id="sign-up">Click here to sign up</button>
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
            <li class="social-icon twitter"><a href="https://www.twitter.com/WaltonSecret" target="_blank"></a></li>
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
