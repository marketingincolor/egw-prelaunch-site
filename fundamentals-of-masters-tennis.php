F<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Basic Page Needs
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta charset="utf-8">
        <title>Evergreen Wellness | A Lifestyle Program</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Mobile Specific Metas
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Open Graph Metas
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Evergreen Wellness | A Lifestyle Program" />
        <meta property="og:description" content="Evergreen Wellness is a lifestyle program that gives people 55 and over information and resources to help them enjoy healthier, happier lives." />
        <meta property="og:url" content="http://myevergreenwellness.com" />
        <meta property="og:image" content="http://myevergreenwellness.com/assets/egw-fb-img.jpg" />

        <!-- FONT
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link href='https://fonts.googleapis.com/css?family=Halant:400,500,600,700|Roboto:100,300,400,500,700,900' rel='stylesheet' type='text/css'>

        <!-- CSS
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.2/foundation.min.css" />
        <link rel="stylesheet" href="css/video.css" />

        <!-- Favicon
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="icon" type="image/png" href="images/favicon.ico">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <!-- Sharpspring Callback
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script type="text/javascript">
          var callThisOnReturn = function(resp) {
              if(resp && resp.contact) {
                  var contact = resp.contact;
                  //exposed values incude SharpSpring ID, First Name, Last Name, Email, Website, Lead Status
                  var name = contact['First Name'];
                  var elem = document.getElementById('dynamicContentID');
                  elem.innerHTML = '<h3>Fundamentals of Masters Tennis</h3>';

                  document.getElementById('hiddenContent').className += " visible";
                  document.getElementById('landingForm').className += " hidden";
              } else {
                  document.getElementById('hiddenContent').className += " hidden";
                  document.getElementById('landingForm').className += " visible";
              }
          };

          $(document).ready(function(){
              console.debug($.cookie("__ss_referrer"));
          });
        </script>

        <!-- End Sharpspring Callback
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->

        <!-- Sharpspring
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script type="text/javascript">
        var _ss = _ss || [];
        _ss.push(['_setDomain', 'https://koi-3QMYANU21K.marketingautomation.services/net']);
        _ss.push(['_setAccount', 'KOI-3R4GIH0NK8']);
        _ss.push(['_setResponseCallback', callThisOnReturn]);
        _ss.push(['_trackPageView']);
        (function() {
          var ss = document.createElement('script');
          ss.type = 'text/javascript'; ss.async = true;

          ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-3QMYANU21K.marketingautomation.services/client/ss.js?ver=1.1.1';
          var scr = document.getElementsByTagName('script')[0];
          scr.parentNode.insertBefore(ss, scr);
        })();
        </script>

        <!-- End Sharpspring
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    </head>
    <body>

        <!-- Primary Page Layout
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->

        <!--logo-->
        <div class="row">
            <div id="logo" class="town-hall-logo small-12 columns">
                <img id="townHallLogo" src="images/EvergreenWellnessLogoPhone.png">
            </div>
        </div>
        <!--/logo-->

        <!--container-->
        <div id="landingForm" class="container">

            <!--greenbar-->

            <div class="contain-to-grid" id="greenDiv">
                <div class="row">
                    <div class="small-12 columns text-center"><h3>Please complete this form to view content.</h3></div>
                    <div class="small-12 columns text-center"><p>You'll also be the first to receive updates and special offers and events. </p></div>
                </div>
            </div>

            <!--/greenbar-->

            <!--landingForm-->

            <div class="row">
                <div class="landing-form small-12 medium-8 large-6 columns small-centered">

                    <!--orangeDiv-->
                    <div id="orangeDiv" class="orange-bg">
                        <div class="row">
                            <div class ="small-10 columns small-offset-1">

                                <!--LearnMore&Arrow-->
                                <div id="SignUp" class="row">
                                    <div class="small-8 columns text-center"><h2>Learn More</h2></div>
                                    <div class="small-4 columns text-left"><img id="arrow" src="images/arrowPhone.png"></div>
                                </div>
                                <!--/LearnMore&Arrow-->

                                <div class="row">
                                    <div class="small-12 columns small-centered">
                                        <script type="text/javascript" src="https://marketingincolor.formstack.com/forms/js.php/video_content_one_copy"></script><noscript><a href="https://marketingincolor.formstack.com/forms/video_content_one_copy" title="Online Form">Online Form - EGW Video Content- Tennis</a></noscript>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--endOrangeDiv-->

                </div>
            </div> <!--/landingForm-->
        </div> <!--/container-->

        <!-- hiddenContent-->
        <div  id="hiddenContent"  class="container">

            <!--greenbar-->
            <div class="contain-to-grid" id="greenDiv">
                <div class="row">
                    <div class="small-12 columns text-center" id="dynamicContentID">Fundamentals of Masters Tennis</div>
                </div>
            </div>
            <!--/greenbar-->

            <div class="row">

                <!--columns-hidden-content-->
                <div class="columns hidden-content">

                    <!--whiteDiv Video -->
                    <div id="whiteDiv" class="row whiteDivVideoSuccess">
                        <div class="small-12 medium-8 large-6 columns small-centered">
                            <div class="video-container">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/rsWGnogqsA4" frameborder="0" allowfullscreen></iframe>

                            </div>
                        </div>
                    </div>
                    <!--/whiteDiv Video-->

                    <div>&nbsp;</div>

                    <!-- shareBox -->
                    <div id="share" class="small-12 medium-6 large-4 columns small-centered">

                        <div id="speaker" class="row">
                            <img src="images/megaphone.png"/>
                                <h1>Please share with your family and friends!</h1>
                        </div>

                        <div id="social-icons" class="row small-centered">
                            <div id="mail" class="small-4 columns">
                                <a href="mailto: ?subject=Thought you'd like this&body=Enjoy this article from Evergreen Wellness - www.myevergreenwellness.com/fundamentals-of-masters-tennis">
                                    <img src="images/mail.png"/>
                                </a>
                            </div>

                            <div id="facebook" class="small-4 columns">
                            <?php
                                            function getUrl() {
                                                $url  = isset( $_SERVER['HTTPS'] ) && 'on' === $_SERVER['HTTPS'] ? 'https' : 'http';
                                                $url .= '://' . $_SERVER['SERVER_NAME'];
                                                $url .= in_array( $_SERVER['SERVER_PORT'], array('80', '443') ) ? '' : ':' . $_SERVER['SERVER_PORT'];
                                                $url .= $_SERVER['REQUEST_URI'];
                                                return $url;
                                            }
                                            // Print Share link on Page
                                            $encoded_url = urlencode( getUrl() );
                                            if ( !empty($encoded_url) ){ ?>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $encoded_url; ?>" target="_blank" id="facebook-share" onclick="javascript:window.open(this.href,
                      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                <img src="images/facebook.png"/>
                                <?php } ?>
                            </div>

                            <div id="twitter" class="small-4 columns">
                                <a href="http://twitter.com/home?status=Fundamentals%20of%20Masters%20Tennis%20-%20http://myevergreenwellness.com/fundamentals-of-masters-tennis" target="_blank" onclick="javascript:window.open(this.href,
      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                <img src="images/twitter.png"/>
                                </a>
                            </div>
                        </div>
                    </div> <!--/sharebox-->

                </div> <!--/columns-hidden-content-->
            </div> <!--/row-->
        </div><!--/hiddenContent-->

        <!--footer-->
        <div class="contain-to-grid gray-bg">
            <div class="row">
                <div id="footer" class="small-12 columns">
                    <?php include ('content-footer.php');?>
                </div>
            </div>
        </div>

        <!-- SharpSpring 
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->

        <script type="text/javascript">
            var __ss_noform = __ss_noform || [];
            __ss_noform.push(['baseURI', 'https://app-3QMYANU21K.marketingautomation.services/webforms/receivePostback/MzawMDG2NDQxAwA/']);
            __ss_noform.push(['endpoint', 'a987824f-ec09-4540-9f4b-349a19eba8fe']);
        </script>
        <script type="text/javascript" src="https://koi-3QMYANU21K.marketingautomation.services/client/noform.js?ver=1.24" ></script>







        <!-- Foundation
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->

        <script src="https://cdn.jsdelivr.net/foundation/6.2.2/foundation.min.js"></script>
        <script>
            $(document).foundation();
        </script>

    </body>
</html>
