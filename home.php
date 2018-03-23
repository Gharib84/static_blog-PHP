<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
    <script src="js/main.js"></script>
    <!--[if lt IE 9]>
    <script
            src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js">
    </script>
    <script
            src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js">
    </script>
    <![endif]-->
</head>
<body>
<!---navbar-->
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <!--respomsive--->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#foo" aria-controls="foo" aria-expanded="false" aria-label="blogs">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!---brand-->
    <a href="#" class="navbar-brand"><i class="fa fa-cog fa-spin fa-2x fa-fw" id="logo"></i></a>
    <!--my liks-->
    <div class="collapse navbar-collapse" id="foo">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="home.html" class="nav-link active">home</a>
            </li>
            <li class="nav-item">
                <a href="about.php" class="nav-link">about</a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="nav-link">Contact</a>
            </li>
            <!--create menu-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="blogs">categories</a>
                <div class="dropdown-menu" aria-labelledby="blogs" id="lol">
                    <a class="dropdown-item link" href="ops.php">linux</a>
                    <a class="dropdown-item link" href="cock.php">algorithm</a>
                    <a class="dropdown-item link" href="video.php">videos</a>
                </div>
            </li>
        </ul>
        <div class="wrap">
            <button type="button" class="btn btn-success btn-sm mt-0" data-toggle="modal" data-target="#login"><i class="fa fa-user-circle" id="circle" aria-hidden="true"></i></button>
            <!--structure-->
            <div class="modal fade" role="dialog" aria-hidden="true" tabindex="-1" aria-labelledby="users" id="login">
                <!---structure -->
                <div class="modal-dialog" role="document">
                    <!--structure 3-->
                    <div class="modal-content">
                        <!--structur4 -->
                        <div class="modal-header">
                            <h4 class="modal-title display-4">Log in</h4>
                            <button class="close" type="button" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <!---strutur-->
                        <div class="modal-body">
                            <form>
                                <fieldset class="form-group">
                                    <label>Emial Address</label>
                                    <input type="email" class="form-control" placeholder="example@example.com">
                                    <small class="text-muted">We'll never share your email with anyone else</small>
                                </fieldset>
                                <fieldset class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                                </fieldset>
                            </form>
                        </div>
                        <!---end-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                            <button type="button" class="btn btn-success">log in</button>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary btn-sm mt-0" data-toggle="modal" data-target="#forms"><i class="fa fa-user-plus" aria-hidden="true"></i></button>
            <!---my structure-->
            <div class="modal fade" role="dialog" aria-hidden="true" tabindex="-1" aria-labelledby="myform" id="forms">
                <!--structure two-->
                <div class="modal-dialog" role="document">
                    <!--structure four-->
                    <div class="modal-content">
                        <!--structure five-->
                        <div class="modal-header">
                            <h4 class="modal-title display-4">Sign Up</h4>
                            <!--my cross button-->
                            <button class="close" type="button" data-dismiss="modal" aria-label="cross">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!--structure six-->
                        <div class="modal-body">
                            <!---my registration form-->

                            <form>
                                <fieldset class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" placeholder="First Name">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="last name">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Emial Address</label>
                                    <input type="email" class="form-control" placeholder="example@example.com">
                                    <small class="text-muted">We'll never share your email with anyone else</small>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Country</label>
                                    <select class="form-control">
                                        <option value="AFG">Afghanistan</option>
                                        <option value="ALA">Åland Islands</option>
                                        <option value="ALB">Albania</option>
                                        <option value="DZA">Algeria</option>
                                        <option value="ASM">American Samoa</option>
                                        <option value="AND">Andorra</option>
                                        <option value="AGO">Angola</option>
                                        <option value="AIA">Anguilla</option>
                                        <option value="ATA">Antarctica</option>
                                        <option value="ATG">Antigua and Barbuda</option>
                                        <option value="ARG">Argentina</option>
                                        <option value="ARM">Armenia</option>
                                        <option value="ABW">Aruba</option>
                                        <option value="AUS">Australia</option>
                                        <option value="AUT">Austria</option>
                                        <option value="AZE">Azerbaijan</option>
                                        <option value="BHS">Bahamas</option>
                                        <option value="BHR">Bahrain</option>
                                        <option value="BGD">Bangladesh</option>
                                        <option value="BRB">Barbados</option>
                                        <option value="BLR">Belarus</option>
                                        <option value="BEL">Belgium</option>
                                        <option value="BLZ">Belize</option>
                                        <option value="BEN">Benin</option>
                                        <option value="BMU">Bermuda</option>
                                        <option value="BTN">Bhutan</option>
                                        <option value="BOL">Bolivia, Plurinational State of</option>
                                        <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                                        <option value="BIH">Bosnia and Herzegovina</option>
                                        <option value="BWA">Botswana</option>
                                        <option value="BVT">Bouvet Island</option>
                                        <option value="BRA">Brazil</option>
                                        <option value="IOT">British Indian Ocean Territory</option>
                                        <option value="BRN">Brunei Darussalam</option>
                                        <option value="BGR">Bulgaria</option>
                                        <option value="BFA">Burkina Faso</option>
                                        <option value="BDI">Burundi</option>
                                        <option value="KHM">Cambodia</option>
                                        <option value="CMR">Cameroon</option>
                                        <option value="CAN">Canada</option>
                                        <option value="CPV">Cape Verde</option>
                                        <option value="CYM">Cayman Islands</option>
                                        <option value="CAF">Central African Republic</option>
                                        <option value="TCD">Chad</option>
                                        <option value="CHL">Chile</option>
                                        <option value="CHN">China</option>
                                        <option value="CXR">Christmas Island</option>
                                        <option value="CCK">Cocos (Keeling) Islands</option>
                                        <option value="COL">Colombia</option>
                                        <option value="COM">Comoros</option>
                                        <option value="COG">Congo</option>
                                        <option value="COD">Congo, the Democratic Republic of the</option>
                                        <option value="COK">Cook Islands</option>
                                        <option value="CRI">Costa Rica</option>
                                        <option value="CIV">Côte d'Ivoire</option>
                                        <option value="HRV">Croatia</option>
                                        <option value="CUB">Cuba</option>
                                        <option value="CUW">Curaçao</option>
                                        <option value="CYP">Cyprus</option>
                                        <option value="CZE">Czech Republic</option>
                                        <option value="DNK">Denmark</option>
                                        <option value="DJI">Djibouti</option>
                                        <option value="DMA">Dominica</option>
                                        <option value="DOM">Dominican Republic</option>
                                        <option value="ECU">Ecuador</option>
                                        <option value="EGY">Egypt</option>
                                        <option value="SLV">El Salvador</option>
                                        <option value="GNQ">Equatorial Guinea</option>
                                        <option value="ERI">Eritrea</option>
                                        <option value="EST">Estonia</option>
                                        <option value="ETH">Ethiopia</option>
                                        <option value="FLK">Falkland Islands (Malvinas)</option>
                                        <option value="FRO">Faroe Islands</option>
                                        <option value="FJI">Fiji</option>
                                        <option value="FIN">Finland</option>
                                        <option value="FRA">France</option>
                                        <option value="GUF">French Guiana</option>
                                        <option value="PYF">French Polynesia</option>
                                        <option value="ATF">French Southern Territories</option>
                                        <option value="GAB">Gabon</option>
                                        <option value="GMB">Gambia</option>
                                        <option value="GEO">Georgia</option>
                                        <option value="DEU">Germany</option>
                                        <option value="GHA">Ghana</option>
                                        <option value="GIB">Gibraltar</option>
                                        <option value="GRC">Greece</option>
                                        <option value="GRL">Greenland</option>
                                        <option value="GRD">Grenada</option>
                                        <option value="GLP">Guadeloupe</option>
                                        <option value="GUM">Guam</option>
                                        <option value="GTM">Guatemala</option>
                                        <option value="GGY">Guernsey</option>
                                        <option value="GIN">Guinea</option>
                                        <option value="GNB">Guinea-Bissau</option>
                                        <option value="GUY">Guyana</option>
                                        <option value="HTI">Haiti</option>
                                        <option value="HMD">Heard Island and McDonald Islands</option>
                                        <option value="VAT">Holy See (Vatican City State)</option>
                                        <option value="HND">Honduras</option>
                                        <option value="HKG">Hong Kong</option>
                                        <option value="HUN">Hungary</option>
                                        <option value="ISL">Iceland</option>
                                        <option value="IND">India</option>
                                        <option value="IDN">Indonesia</option>
                                        <option value="IRN">Iran, Islamic Republic of</option>
                                        <option value="IRQ">Iraq</option>
                                        <option value="IRL">Ireland</option>
                                        <option value="IMN">Isle of Man</option>
                                        <option value="ISR">Israel</option>
                                        <option value="ITA">Italy</option>
                                        <option value="JAM">Jamaica</option>
                                        <option value="JPN">Japan</option>
                                        <option value="JEY">Jersey</option>
                                        <option value="JOR">Jordan</option>
                                        <option value="KAZ">Kazakhstan</option>
                                        <option value="KEN">Kenya</option>
                                        <option value="KIR">Kiribati</option>
                                        <option value="PRK">Korea, Democratic People's Republic of</option>
                                        <option value="KOR">Korea, Republic of</option>
                                        <option value="KWT">Kuwait</option>
                                        <option value="KGZ">Kyrgyzstan</option>
                                        <option value="LAO">Lao People's Democratic Republic</option>
                                        <option value="LVA">Latvia</option>
                                        <option value="LBN">Lebanon</option>
                                        <option value="LSO">Lesotho</option>
                                        <option value="LBR">Liberia</option>
                                        <option value="LBY">Libya</option>
                                        <option value="LIE">Liechtenstein</option>
                                        <option value="LTU">Lithuania</option>
                                        <option value="LUX">Luxembourg</option>
                                        <option value="MAC">Macao</option>
                                        <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                                        <option value="MDG">Madagascar</option>
                                        <option value="MWI">Malawi</option>
                                        <option value="MYS">Malaysia</option>
                                        <option value="MDV">Maldives</option>
                                        <option value="MLI">Mali</option>
                                        <option value="MLT">Malta</option>
                                        <option value="MHL">Marshall Islands</option>
                                        <option value="MTQ">Martinique</option>
                                        <option value="MRT">Mauritania</option>
                                        <option value="MUS">Mauritius</option>
                                        <option value="MYT">Mayotte</option>
                                        <option value="MEX">Mexico</option>
                                        <option value="FSM">Micronesia, Federated States of</option>
                                        <option value="MDA">Moldova, Republic of</option>
                                        <option value="MCO">Monaco</option>
                                        <option value="MNG">Mongolia</option>
                                        <option value="MNE">Montenegro</option>
                                        <option value="MSR">Montserrat</option>
                                        <option value="MAR">Morocco</option>
                                        <option value="MOZ">Mozambique</option>
                                        <option value="MMR">Myanmar</option>
                                        <option value="NAM">Namibia</option>
                                        <option value="NRU">Nauru</option>
                                        <option value="NPL">Nepal</option>
                                        <option value="NLD">Netherlands</option>
                                        <option value="NCL">New Caledonia</option>
                                        <option value="NZL">New Zealand</option>
                                        <option value="NIC">Nicaragua</option>
                                        <option value="NER">Niger</option>
                                        <option value="NGA">Nigeria</option>
                                        <option value="NIU">Niue</option>
                                        <option value="NFK">Norfolk Island</option>
                                        <option value="MNP">Northern Mariana Islands</option>
                                        <option value="NOR">Norway</option>
                                        <option value="OMN">Oman</option>
                                        <option value="PAK">Pakistan</option>
                                        <option value="PLW">Palau</option>
                                        <option value="PSE">Palestinian Territory, Occupied</option>
                                        <option value="PAN">Panama</option>
                                        <option value="PNG">Papua New Guinea</option>
                                        <option value="PRY">Paraguay</option>
                                        <option value="PER">Peru</option>
                                        <option value="PHL">Philippines</option>
                                        <option value="PCN">Pitcairn</option>
                                        <option value="POL">Poland</option>
                                        <option value="PRT">Portugal</option>
                                        <option value="PRI">Puerto Rico</option>
                                        <option value="QAT">Qatar</option>
                                        <option value="REU">Réunion</option>
                                        <option value="ROU">Romania</option>
                                        <option value="RUS">Russian Federation</option>
                                        <option value="RWA">Rwanda</option>
                                        <option value="BLM">Saint Barthélemy</option>
                                        <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                                        <option value="KNA">Saint Kitts and Nevis</option>
                                        <option value="LCA">Saint Lucia</option>
                                        <option value="MAF">Saint Martin (French part)</option>
                                        <option value="SPM">Saint Pierre and Miquelon</option>
                                        <option value="VCT">Saint Vincent and the Grenadines</option>
                                        <option value="WSM">Samoa</option>
                                        <option value="SMR">San Marino</option>
                                        <option value="STP">Sao Tome and Principe</option>
                                        <option value="SAU">Saudi Arabia</option>
                                        <option value="SEN">Senegal</option>
                                        <option value="SRB">Serbia</option>
                                        <option value="SYC">Seychelles</option>
                                        <option value="SLE">Sierra Leone</option>
                                        <option value="SGP">Singapore</option>
                                        <option value="SXM">Sint Maarten (Dutch part)</option>
                                        <option value="SVK">Slovakia</option>
                                        <option value="SVN">Slovenia</option>
                                        <option value="SLB">Solomon Islands</option>
                                        <option value="SOM">Somalia</option>
                                        <option value="ZAF">South Africa</option>
                                        <option value="SGS">South Georgia and the South Sandwich Islands</option>
                                        <option value="SSD">South Sudan</option>
                                        <option value="ESP">Spain</option>
                                        <option value="LKA">Sri Lanka</option>
                                        <option value="SDN">Sudan</option>
                                        <option value="SUR">Suriname</option>
                                        <option value="SJM">Svalbard and Jan Mayen</option>
                                        <option value="SWZ">Swaziland</option>
                                        <option value="SWE">Sweden</option>
                                        <option value="CHE">Switzerland</option>
                                        <option value="SYR">Syrian Arab Republic</option>
                                        <option value="TWN">Taiwan, Province of China</option>
                                        <option value="TJK">Tajikistan</option>
                                        <option value="TZA">Tanzania, United Republic of</option>
                                        <option value="THA">Thailand</option>
                                        <option value="TLS">Timor-Leste</option>
                                        <option value="TGO">Togo</option>
                                        <option value="TKL">Tokelau</option>
                                        <option value="TON">Tonga</option>
                                        <option value="TTO">Trinidad and Tobago</option>
                                        <option value="TUN">Tunisia</option>
                                        <option value="TUR">Turkey</option>
                                        <option value="TKM">Turkmenistan</option>
                                        <option value="TCA">Turks and Caicos Islands</option>
                                        <option value="TUV">Tuvalu</option>
                                        <option value="UGA">Uganda</option>
                                        <option value="UKR">Ukraine</option>
                                        <option value="ARE">United Arab Emirates</option>
                                        <option value="GBR">United Kingdom</option>
                                        <option value="USA">United States</option>
                                        <option value="UMI">United States Minor Outlying Islands</option>
                                        <option value="URY">Uruguay</option>
                                        <option value="UZB">Uzbekistan</option>
                                        <option value="VUT">Vanuatu</option>
                                        <option value="VEN">Venezuela, Bolivarian Republic of</option>
                                        <option value="VNM">Viet Nam</option>
                                        <option value="VGB">Virgin Islands, British</option>
                                        <option value="VIR">Virgin Islands, U.S.</option>
                                        <option value="WLF">Wallis and Futuna</option>
                                        <option value="ESH">Western Sahara</option>
                                        <option value="YEM">Yemen</option>
                                        <option value="ZMB">Zambia</option>
                                        <option value="ZWE">Zimbabwe</option>
                                    </select>
                                </fieldset>
                            </form>
                            </div>
                        <!--my footer-->
                        <div class="modal-footer">
                        <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">close</button>
                        <button class="btn btn-primary btn-sm " type="button">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</nav>





<!---section two background all smart devices size-->
<section class="hidden-lg-up">
    <div class="container">
        <!--row-->
        <div class="row">
            <div class="carousel slide" data-ride="carousel" id="mobile">
                <ol class="carousel-indicators">
                    <li data-target="mobile" data-slide-to="0" class="active"></li>
                    <li data-target="mobile" data-slide-to="1"></li>
                    <li data-target="mobile" data-slide-to="2"></li>
                    <li data-target="mobile" data-slide-to="3"></li>
                    <li data-target="mobile" data-slide-to="4"></li>
                    <li data-target="mobile" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid ml-auto mr-auto" src="https://images.pexels.com/photos/356056/pexels-photo-356056.jpeg?w=940&h=650&auto=compress&cs=tinysrgb">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid ml-auto mr-auto" src="https://images.pexels.com/photos/38604/office-freelancer-computer-business-38604.jpeg?w=940&h=650&auto=compress&cs=tinysrgb">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid ml-auto mr-auto" src="https://images.pexels.com/photos/7107/notebook-hero-workspace-minimal.jpg?w=940&h=650&auto=compress&cs=tinysrgb">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid ml-auto mr-auto" src="https://images.pexels.com/photos/166/coffee-apple-iphone-laptop.jpg?w=940&h=650&auto=compress&cs=tinysrgb">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid ml-auto mr-auto" src="https://images.pexels.com/photos/162/man-person-apple-iphone.jpg?w=940&h=650&auto=compress&cs=tinysrgb">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!---create background-->
<div id="banner">

    <img src="images/rocket2.png"  class="hidden-sm-down" alt="hero" style="margin: 200px 0px 0px 45%;">

</div>

<!--section features-->
<section id="features">
    <div class="container">
        <!--row 5-->
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center">Features</h3>
                <p class="text-center">Features headline message</p>
            </div>
        </div>
        <!--row 6-->
        <div class="row">
            <div class="col-md-4"><div class="feature">
                <a href="about.php"><i class="fa fa-book" aria-hidden="true"></i>About</a>
            </div>
            </div>
            <div class="col-md-4">
                <div class="feature"><a href="http://thehackernews.com/"><i class="fa fa-hacker-news" aria-hidden="true"></i>News</a></div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <a href="https://www.linux.com/"><i class="fa fa-linux" aria-hidden="true"></i>Operating Systems</a>
            </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                <a href="http://www.geeksforgeeks.org/data-structures/"><i class="fa fa-database" aria-hidden="true"></i>Data Structure</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <a href="video.php"><i class="fa fa-video-camera" aria-hidden="true"></i>Videos</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                <a href="https://en.wikipedia.org/wiki/Application_programming_interface"><i class="fa fa-television" aria-hidden="true"></i>Application Programming Interface</a>
                </div>
            </div>
        </div>
    </div>
</section>



<!--footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <i class="fa fa-cog fa-spin fa-2x fa-fw" id="memo"></i>
            </div>
            <div class="col-sm-2">
                <h5>The Blog</h5>
                <ul class="list-unstyled">
                    <li><a href="about.php"><i class="fa fa-book" aria-hidden="true"></i>about</a></li>
                    <li><a href="#"><i class="fa fa-database"  aria-hidden="true"></i>Data Structure</a></li>
                    <li><a href="#"><i class="fa fa-video-camera" aria-hidden="true"></i>Videos</a></li>
                    <li><a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i>Contact</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>Social</h5>
                <ul class="list-unstyled">
                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-official" aria-hidden="true"></i>Facebook</a></li>
                    <li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a></li>
                    <li><a href=""><i class="fa fa-rss" aria-hidden="true"></i>Blog</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>Support</h5>
                <ul class="list-unstyled">
                    <li><a href="contact.php"><i class="fa fa-phone-square" aria-hidden="true"></i>Contact</a></li>
                    <li><a href="#"><i class="fa fa-user-secret" aria-hidden="true"></i>Privacy police</a></li>
                    <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Terms & conditions</a></li>
                    <li><a href="#"><i class="fa fa-question" aria-hidden="true"></i>Help</a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <address>
                    <strong>Gharib, Said.</strong>
                    Address line 1<br>
                    Address line 2<br>
                    <abbr title="Phone"><i class="fa fa-mobile" aria-hidden="true"></i>:</abbr> (+48) 667-839524
                </address>
            </div>
        </div>
    </div>
</footer>



<!-- jQuery first, then Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<!--taher--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>