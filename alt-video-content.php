<!DOCTYPE html>
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
                  elem.innerHTML = '<h3>Name of the Video Goes here (' + name + ')</h3>';

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

        <!---logo--->
        <div class="row">
            <div id="logo" class="town-hall-logo small-12 columns">
                <img id="townHallLogo" src="images/EvergreenWellnessLogoPhone.png">
            </div>
        </div>
        <!---/logo--->

        <!---container--->
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

                                <!---LearnMore&Arrow--->
                                <div id="SignUp" class="row">
                                    <div class="small-8 columns text-center"><h2>Learn More</h2></div>
                                    <div class="small-4 columns text-left"><img id="arrow" src="images/arrowPhone.png"></div>
                                </div>
                                <!---/LearnMore&Arrow--->

                                <div class="row">
                                    <div class="small-12 columns small-centered">
                                        <script type="text/javascript" src="https://marketingincolor.formstack.com/forms/js.php/untitled_form_14_copy"></script><noscript><a href="https://marketingincolor.formstack.com/forms/untitled_form_14_copy" title="Online Form">Online Form - EGW Video Content</a></noscript>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--endOrangeDiv-->

                </div>
            </div> <!--/landingForm-->
        </div> <!---/container--->

        <!--- hiddenContent--->
        <div  id="hiddenContent"  class="container">

            <!--greenbar-->
            <div class="contain-to-grid" id="greenDiv">
                <div class="row">
                    <div class="small-12 columns text-center" id="dynamicContentID">text</div>
                </div>
            </div>
            <!--/greenbar-->

            <div class="row">

                <!---columns-hidden-content--->
                <div class="columns hidden-content">

                    <!--whiteDiv Video -->
                    <div id="whiteDiv" class="row whiteDivVideoSuccess">
                        <div class="small-12 medium-8 large-6 columns small-centered">
                            <div class="video-container">
                                <iframe width="560" height="315"  src="https://www.youtube.com/embed/ihiSa0NOa_U" frameborder="0" allowfullscreen></iframe>

                            </div>
                        </div>
                    </div>
                    <!--/whiteDiv Video-->

                    <div>&nbsp;</div>

                    <!---whiteDiv Social Media --->
                    <div id="whiteDiv" class="row whiteDivVideoSuccess">
                        <div class="small-12 medium-8 large-6 columns small-centered">
                            <img src="images/ShareButton.png" alt="Social Media Share Buttons"/>
                        </div>
                    </div>
                    <!---/whiteDiv Social Media --->

                </div> <!---/columns-hidden-content--->
            </div> <!--/row--->
        </div><!--/hiddenContent-->

        <!--footer-->
        <div class="contain-to-grid gray-bg">
            <div class="row">
                <div id="footer" class="small-12 columns">
                    <?php include ('content-footer.php');?>
                </div>
            </div>
        </div>

        <!-- End Document
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->

        <script type="text/javascript">
            var __ss_noform = __ss_noform || [];
            __ss_noform.push(['baseURI', 'https://app-3QMYANU21K.marketingautomation.services/webforms/receivePostback/MzawMDG2NDQxAwA/']);
            __ss_noform.push(['endpoint', '9832d7ab-cf84-478d-9cd7-08abf902fd67']);
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
