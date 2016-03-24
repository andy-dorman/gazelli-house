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
<link href="stylesheets/style.css?v=2.0" rel="stylesheet">
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
          <li><a href="/menu">Treatment Menu</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/events">Events</a></li>
          <li><a href="/membership">Guest Registration</a></li>
          <!--<li><a href="http://gazellihouselondon.tumblr.com" target="_blank">Live Beautifully</a></li>-->
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
            Gazelli House Membership is complimentary and offered by invitation only. Please register your interest here and we will be in touch soon.
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
                    <input type="text" name="country" class="form-control">
                    <!--
                    <select class="selectpicker col-xs-12">
                      <option class="text-center" value="" class="text-center">Select one</option>
                      <option class="text-center" value="Afghanistan">Afghanistan</option>
                      <option class="text-center" value="Åland Islands">Åland Islands</option>
                      <option class="text-center" value="Albania">Albania</option>
                      <option class="text-center" value="Algeria">Algeria</option>
                      <option class="text-center" value="American Samoa">American Samoa</option>
                      <option class="text-center" value="Andorra">Andorra</option>
                      <option class="text-center" value="Angola">Angola</option>
                      <option class="text-center" value="Anguilla">Anguilla</option>
                      <option class="text-center" value="Antarctica">Antarctica</option>
                      <option class="text-center" value="Antigua and Barbuda">Antigua and Barbuda</option>
                      <option class="text-center" value="Argentina">Argentina</option>
                      <option class="text-center" value="Armenia">Armenia</option>
                      <option class="text-center" value="Aruba">Aruba</option>
                      <option class="text-center" value="Australia">Australia</option>
                      <option class="text-center" value="Austria">Austria</option>
                      <option class="text-center" value="Azerbaijan">Azerbaijan</option>
                      <option class="text-center" value="Bahamas">Bahamas</option>
                      <option class="text-center" value="Bahrain">Bahrain</option>
                      <option class="text-center" value="Bangladesh">Bangladesh</option>
                      <option class="text-center" value="Barbados">Barbados</option>
                      <option class="text-center" value="Belarus">Belarus</option>
                      <option class="text-center" value="Belgium">Belgium</option>
                      <option class="text-center" value="Belize">Belize</option>
                      <option class="text-center" value="Benin">Benin</option>
                      <option class="text-center" value="Bermuda">Bermuda</option>
                      <option class="text-center" value="Bhutan">Bhutan</option>
                      <option class="text-center" value="Bolivia">Bolivia</option>
                      <option class="text-center" value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                      <option class="text-center" value="Botswana">Botswana</option>
                      <option class="text-center" value="Bouvet Island">Bouvet Island</option>
                      <option class="text-center" value="Brazil">Brazil</option>
                      <option class="text-center" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                      <option class="text-center" value="Brunei Darussalam">Brunei Darussalam</option>
                      <option class="text-center" value="Bulgaria">Bulgaria</option>
                      <option class="text-center" value="Burkina Faso">Burkina Faso</option>
                      <option class="text-center" value="Burundi">Burundi</option>
                      <option class="text-center" value="Cambodia">Cambodia</option>
                      <option class="text-center" value="Cameroon">Cameroon</option>
                      <option class="text-center" value="Canada">Canada</option>
                      <option class="text-center" value="Cape Verde">Cape Verde</option>
                      <option class="text-center" value="Cayman Islands">Cayman Islands</option>
                      <option class="text-center" value="Central African Republic">Central African Republic</option>
                      <option class="text-center" value="Chad">Chad</option>
                      <option class="text-center" value="Chile">Chile</option>
                      <option class="text-center" value="China">China</option>
                      <option class="text-center" value="Christmas Island">Christmas Island</option>
                      <option class="text-center" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                      <option class="text-center" value="Colombia">Colombia</option>
                      <option class="text-center" value="Comoros">Comoros</option>
                      <option class="text-center" value="Congo">Congo</option>
                      <option class="text-center" value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                      <option class="text-center" value="Cook Islands">Cook Islands</option>
                      <option class="text-center" value="Costa Rica">Costa Rica</option>
                      <option class="text-center" value="Cote D'ivoire">Cote D'ivoire</option>
                      <option class="text-center" value="Croatia">Croatia</option>
                      <option class="text-center" value="Cuba">Cuba</option>
                      <option class="text-center" value="Cyprus">Cyprus</option>
                      <option class="text-center" value="Czech Republic">Czech Republic</option>
                      <option class="text-center" value="Denmark">Denmark</option>
                      <option class="text-center" value="Djibouti">Djibouti</option>
                      <option class="text-center" value="Dominica">Dominica</option>
                      <option class="text-center" value="Dominican Republic">Dominican Republic</option>
                      <option class="text-center" value="Ecuador">Ecuador</option>
                      <option class="text-center" value="Egypt">Egypt</option>
                      <option class="text-center" value="El Salvador">El Salvador</option>
                      <option class="text-center" value="Equatorial Guinea">Equatorial Guinea</option>
                      <option class="text-center" value="Eritrea">Eritrea</option>
                      <option class="text-center" value="Estonia">Estonia</option>
                      <option class="text-center" value="Ethiopia">Ethiopia</option>
                      <option class="text-center" value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                      <option class="text-center" value="Faroe Islands">Faroe Islands</option>
                      <option class="text-center" value="Fiji">Fiji</option>
                      <option class="text-center" value="Finland">Finland</option>
                      <option class="text-center" value="France">France</option>
                      <option class="text-center" value="French Guiana">French Guiana</option>
                      <option class="text-center" value="French Polynesia">French Polynesia</option>
                      <option class="text-center" value="French Southern Territories">French Southern Territories</option>
                      <option class="text-center" value="Gabon">Gabon</option>
                      <option class="text-center" value="Gambia">Gambia</option>
                      <option class="text-center" value="Georgia">Georgia</option>
                      <option class="text-center" value="Germany">Germany</option>
                      <option class="text-center" value="Ghana">Ghana</option>
                      <option class="text-center" value="Gibraltar">Gibraltar</option>
                      <option class="text-center" value="Greece">Greece</option>
                      <option class="text-center" value="Greenland">Greenland</option>
                      <option class="text-center" value="Grenada">Grenada</option>
                      <option class="text-center" value="Guadeloupe">Guadeloupe</option>
                      <option class="text-center" value="Guam">Guam</option>
                      <option class="text-center" value="Guatemala">Guatemala</option>
                      <option class="text-center" value="Guernsey">Guernsey</option>
                      <option class="text-center" value="Guinea">Guinea</option>
                      <option class="text-center" value="Guinea-bissau">Guinea-bissau</option>
                      <option class="text-center" value="Guyana">Guyana</option>
                      <option class="text-center" value="Haiti">Haiti</option>
                      <option class="text-center" value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                      <option class="text-center" value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                      <option class="text-center" value="Honduras">Honduras</option>
                      <option class="text-center" value="Hong Kong">Hong Kong</option>
                      <option class="text-center" value="Hungary">Hungary</option>
                      <option class="text-center" value="Iceland">Iceland</option>
                      <option class="text-center" value="India">India</option>
                      <option class="text-center" value="Indonesia">Indonesia</option>
                      <option class="text-center" value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                      <option class="text-center" value="Iraq">Iraq</option>
                      <option class="text-center" value="Ireland">Ireland</option>
                      <option class="text-center" value="Isle of Man">Isle of Man</option>
                      <option class="text-center" value="Israel">Israel</option>
                      <option class="text-center" value="Italy">Italy</option>
                      <option class="text-center" value="Jamaica">Jamaica</option>
                      <option class="text-center" value="Japan">Japan</option>
                      <option class="text-center" value="Jersey">Jersey</option>
                      <option class="text-center" value="Jordan">Jordan</option>
                      <option class="text-center" value="Kazakhstan">Kazakhstan</option>
                      <option class="text-center" value="Kenya">Kenya</option>
                      <option class="text-center" value="Kiribati">Kiribati</option>
                      <option class="text-center" value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                      <option class="text-center" value="Korea, Republic of">Korea, Republic of</option>
                      <option class="text-center" value="Kuwait">Kuwait</option>
                      <option class="text-center" value="Kyrgyzstan">Kyrgyzstan</option>
                      <option class="text-center" value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                      <option class="text-center" value="Latvia">Latvia</option>
                      <option class="text-center" value="Lebanon">Lebanon</option>
                      <option class="text-center" value="Lesotho">Lesotho</option>
                      <option class="text-center" value="Liberia">Liberia</option>
                      <option class="text-center" value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                      <option class="text-center" value="Liechtenstein">Liechtenstein</option>
                      <option class="text-center" value="Lithuania">Lithuania</option>
                      <option class="text-center" value="Luxembourg">Luxembourg</option>
                      <option class="text-center" value="Macao">Macao</option>
                      <option class="text-center" value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                      <option class="text-center" value="Madagascar">Madagascar</option>
                      <option class="text-center" value="Malawi">Malawi</option>
                      <option class="text-center" value="Malaysia">Malaysia</option>
                      <option class="text-center" value="Maldives">Maldives</option>
                      <option class="text-center" value="Mali">Mali</option>
                      <option class="text-center" value="Malta">Malta</option>
                      <option class="text-center" value="Marshall Islands">Marshall Islands</option>
                      <option class="text-center" value="Martinique">Martinique</option>
                      <option class="text-center" value="Mauritania">Mauritania</option>
                      <option class="text-center" value="Mauritius">Mauritius</option>
                      <option class="text-center" value="Mayotte">Mayotte</option>
                      <option class="text-center" value="Mexico">Mexico</option>
                      <option class="text-center" value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                      <option class="text-center" value="Moldova, Republic of">Moldova, Republic of</option>
                      <option class="text-center" value="Monaco">Monaco</option>
                      <option class="text-center" value="Mongolia">Mongolia</option>
                      <option class="text-center" value="Montenegro">Montenegro</option>
                      <option class="text-center" value="Montserrat">Montserrat</option>
                      <option class="text-center" value="Morocco">Morocco</option>
                      <option class="text-center" value="Mozambique">Mozambique</option>
                      <option class="text-center" value="Myanmar">Myanmar</option>
                      <option class="text-center" value="Namibia">Namibia</option>
                      <option class="text-center" value="Nauru">Nauru</option>
                      <option class="text-center" value="Nepal">Nepal</option>
                      <option class="text-center" value="Netherlands">Netherlands</option>
                      <option class="text-center" value="Netherlands Antilles">Netherlands Antilles</option>
                      <option class="text-center" value="New Caledonia">New Caledonia</option>
                      <option class="text-center" value="New Zealand">New Zealand</option>
                      <option class="text-center" value="Nicaragua">Nicaragua</option>
                      <option class="text-center" value="Niger">Niger</option>
                      <option class="text-center" value="Nigeria">Nigeria</option>
                      <option class="text-center" value="Niue">Niue</option>
                      <option class="text-center" value="Norfolk Island">Norfolk Island</option>
                      <option class="text-center" value="Northern Mariana Islands">Northern Mariana Islands</option>
                      <option class="text-center" value="Norway">Norway</option>
                      <option class="text-center" value="Oman">Oman</option>
                      <option class="text-center" value="Pakistan">Pakistan</option>
                      <option class="text-center" value="Palau">Palau</option>
                      <option class="text-center" value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                      <option class="text-center" value="Panama">Panama</option>
                      <option class="text-center" value="Papua New Guinea">Papua New Guinea</option>
                      <option class="text-center" value="Paraguay">Paraguay</option>
                      <option class="text-center" value="Peru">Peru</option>
                      <option class="text-center" value="Philippines">Philippines</option>
                      <option class="text-center" value="Pitcairn">Pitcairn</option>
                      <option class="text-center" value="Poland">Poland</option>
                      <option class="text-center" value="Portugal">Portugal</option>
                      <option class="text-center" value="Puerto Rico">Puerto Rico</option>
                      <option class="text-center" value="Qatar">Qatar</option>
                      <option class="text-center" value="Reunion">Reunion</option>
                      <option class="text-center" value="Romania">Romania</option>
                      <option class="text-center" value="Russian Federation">Russian Federation</option>
                      <option class="text-center" value="Rwanda">Rwanda</option>
                      <option class="text-center" value="Saint Helena">Saint Helena</option>
                      <option class="text-center" value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                      <option class="text-center" value="Saint Lucia">Saint Lucia</option>
                      <option class="text-center" value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                      <option class="text-center" value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                      <option class="text-center" value="Samoa">Samoa</option>
                      <option class="text-center" value="San Marino">San Marino</option>
                      <option class="text-center" value="Sao Tome and Principe">Sao Tome and Principe</option>
                      <option class="text-center" value="Saudi Arabia">Saudi Arabia</option>
                      <option class="text-center" value="Senegal">Senegal</option>
                      <option class="text-center" value="Serbia">Serbia</option>
                      <option class="text-center" value="Seychelles">Seychelles</option>
                      <option class="text-center" value="Sierra Leone">Sierra Leone</option>
                      <option class="text-center" value="Singapore">Singapore</option>
                      <option class="text-center" value="Slovakia">Slovakia</option>
                      <option class="text-center" value="Slovenia">Slovenia</option>
                      <option class="text-center" value="Solomon Islands">Solomon Islands</option>
                      <option class="text-center" value="Somalia">Somalia</option>
                      <option class="text-center" value="South Africa">South Africa</option>
                      <option class="text-center" value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                      <option class="text-center" value="Spain">Spain</option>
                      <option class="text-center" value="Sri Lanka">Sri Lanka</option>
                      <option class="text-center" value="Sudan">Sudan</option>
                      <option class="text-center" value="Suriname">Suriname</option>
                      <option class="text-center" value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                      <option class="text-center" value="Swaziland">Swaziland</option>
                      <option class="text-center" value="Sweden">Sweden</option>
                      <option class="text-center" value="Switzerland">Switzerland</option>
                      <option class="text-center" value="Syrian Arab Republic">Syrian Arab Republic</option>
                      <option class="text-center" value="Taiwan, Province of China">Taiwan, Province of China</option>
                      <option class="text-center" value="Tajikistan">Tajikistan</option>
                      <option class="text-center" value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                      <option class="text-center" value="Thailand">Thailand</option>
                      <option class="text-center" value="Timor-leste">Timor-leste</option>
                      <option class="text-center" value="Togo">Togo</option>
                      <option class="text-center" value="Tokelau">Tokelau</option>
                      <option class="text-center" value="Tonga">Tonga</option>
                      <option class="text-center" value="Trinidad and Tobago">Trinidad and Tobago</option>
                      <option class="text-center" value="Tunisia">Tunisia</option>
                      <option class="text-center" value="Turkey">Turkey</option>
                      <option class="text-center" value="Turkmenistan">Turkmenistan</option>
                      <option class="text-center" value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                      <option class="text-center" value="Tuvalu">Tuvalu</option>
                      <option class="text-center" value="Uganda">Uganda</option>
                      <option class="text-center" value="Ukraine">Ukraine</option>
                      <option class="text-center" value="United Arab Emirates">United Arab Emirates</option>
                      <option class="text-center" value="United Kingdom">United Kingdom</option>
                      <option class="text-center" value="United States">United States</option>
                      <option class="text-center" value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                      <option class="text-center" value="Uruguay">Uruguay</option>
                      <option class="text-center" value="Uzbekistan">Uzbekistan</option>
                      <option class="text-center" value="Vanuatu">Vanuatu</option>
                      <option class="text-center" value="Venezuela">Venezuela</option>
                      <option class="text-center" value="Viet Nam">Viet Nam</option>
                      <option class="text-center" value="Virgin Islands, British">Virgin Islands, British</option>
                      <option class="text-center" value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                      <option class="text-center" value="Wallis and Futuna">Wallis and Futuna</option>
                      <option class="text-center" value="Western Sahara">Western Sahara</option>
                      <option class="text-center" value="Yemen">Yemen</option>
                      <option class="text-center" value="Zambia">Zambia</option>
                      <option class="text-center" value="Zimbabwe">Zimbabwe</option>
                    </select>-->
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
                        <input class="form-control other" name="enjoy-other" type="text" value=""/>
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
                        <input class="form-control other" name="share-other" type="text" value=""/>
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
          <div class="text-center footer">
            <p>Gazelli House | 174 Walton Street | London | SW3 2JL<br/>
              to book please contact <a href="mailto:info@gazelli.co.uk">info@gazelli.co.uk</a>
            </p>
          </div>
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
