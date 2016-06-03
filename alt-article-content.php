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

        <!-- FONTS
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link href='https://fonts.googleapis.com/css?family=Halant:400,500,600,700|Roboto:100,300,400,500,700,900' rel='stylesheet' type='text/css'>

        <!-- CSS
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.2/foundation.min.css" />
        <link rel="stylesheet" href="css/article.css" />

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
        elem.innerHTML = '<h3>The Wide-Ranging Benefits of Laughter</h3>';

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

    <!--- container --->
    <div id="landingForm" class="container">

        <!---greenbar--->

        <div class="contain-to-grid" id="greenDiv">
            <div class="row">
                <div class="small-12 columns text-center"><h3>Please complete this form to view content.</h3></div>
                <div class="small-12 columns text-center"><p>You'll also be the first to receive updates and special offers and events.</p></div>

            </div>
        </div>

        <!--/greenbar-->

        <!--- Beginning of Form --->

        <div class="row">
            <div class="landing-form-article small-12 medium-8 large-6 columns small-centered">
                <div id="orangeDiv" class="orange-bg">
                    <div class="row">
                        <div class ="small-10 columns small-offset-1">
                            <div id="SignUp" class="row">
                                <div class="small-8 columns text-center"><h2>Learn More</h2></div>
                                <div class="small-4 columns text-left"><img id="arrow" src="images/arrowPhone.png"></div>
                            </div>
                            <div class="row">
                                <div class="small-12 columns small-centered">
                                    <script type="text/javascript" src="https://marketingincolor.formstack.com/forms/js.php/untitled_form_14_copy"></script><noscript><a href="https://marketingincolor.formstack.com/forms/untitled_form_14_copy" title="Online Form">Online Form - EGW Video Content</a></noscript>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!--endOrangeDiv-->

            </div> <!---/landing-form-article--->
        </div> <!--- End of Form --->
    </div> <!--- End of Container --->

    <!--- Hidden Content --->
    <div  id="hiddenContent"  class="container">

        <!--- greenbar --->
        <div class="contain-to-grid" id="greenDiv">
            <div class="row">
                <div class="small-12 columns text-center" id="dynamicContentID"></div>
            </div>
        </div>
        <!--- /greenbar --->

        <div class="row">

            <!--hiddenContent-->
            <div class="columns hidden-content-article">

                <!--whiteDiv Article -->
                <div id="whiteDiv" class="row whiteDivArticleSuccess">
                    <div class="small-12 medium-8 columns small-centered">
                        <div class="article-container">

                            <!--- Article Starts Here --->
                            <img src = "images/laughing-cover.png"/>
                                <div>&nbsp;</div>

                            <!--- Introduction --->
                            <p>Laughter, the expression goes, is the best medicine. That may not literally be true (penicillin may have something to say about this, for example), but the health benefits of chuckling are very real, and <a href ="http://www.mayoclinic.org/healthy-lifestyle/stress-management/in-depth/stress-relief/art-20044456" alt="Mayo Clinic Stress Management">very well-documented</a>. Here are three reasons a good laugh can help you live a healthier life. Pleasure and wellness don’t have to be mutually exclusive!</p>

                            <!--- Section one --->
                            <img src = "images/mind.png" class="hide-for-medium blog-imagry small-centered"/>
                            <h3>1. Laughter counteracts the effect of memory-killing stress.</h3>
                            <img src = "images/mind.png" align="left" class="hide-for-small-only blog-imagry"/>
                            <p>
                            According to a 2014 <a href="http://www.ncbi.nlm.nih.gov/pubmed/24682001" alt="The effect of humor on short-term memory in older adults: a new component for whole-person wellness.">study</a> published by the National Center for Biotechnology Information, laughter has the power to combat the negative cognitive effects of stress. Subjects were split into two groups, one given a humorous video to watch, and one merely told to sit still for 20 minutes. The subjects in the humor group performed twice as well as the control group in some circumstances, with the study proclaiming, “humor can have clinical benefits and rehabilitative implications and can be implemented in programs that support whole-person wellness for older adults.”
                            </p>


                            <!--- Section two --->
                            <img src="images/physical.png" class ="hide-for-medium blog-imagry"/>
                            <h3>2. It improves your physical condition.</h3>
                            <img src = "images/physical.png" align="left" class="hide-for-small-only blog-imagry"/>

                            <p>
                            I’m not suggesting, as some have, that <a href="http://well.blogs.nytimes.com/2012/10/24/laughter-as-a-form-of-exercise/?_r=0" alt="Laughter as a form of exercise">laughter is akin to workout</a>. There actually are exercises tailored specifically to yucks (<a href="https://en.wikipedia.org/wiki/Laughter_yoga" alt="Laughter Yoga Wikipedia Page">Laughter Yoga</a>, anyone?), but the physical benefits of laughing are far more basic than any training session. The <a href="http://www.mayoclinic.org/healthy-lifestyle/stress-management/in-depth/stress-relief/art-20044456" alt="Mayo Clinic - Stress management">Mayo Clinic writes</a> that laughter activates certain organs, “enhances your intake of oxygen-rich air, stimulates your heart, lungs and muscles, and increases the endorphins that are released by your brain.” <a href="http://rspb.royalsocietypublishing.org/content/279/1731/1161" alt="Social Laughter is correlated with  an  elevated pain threshold">Studies have even shown</a> that laughter, via those endorphins, helps to increase your pain tolerance.
                            </p>

                            <!--- Section three --->
                            <img src="images/fight-sickness.png" class="hide-for-medium blog-imagry"/>
                            <h3>3. Laughter literally helps your body fight sickness.</h3>
                            <img src = "images/fight-sickness.png" align="left" class="hide-for-small-only blog-imagry"/>
                            <p>
                            Everyone loves a good joke—including, as it turns out, your white blood cells! That’s right, laughter has been proven to strengthen the immune system. <a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC2686627/" alt="Humor and Laughter May influence health 4. Humor and Immune Function">This article</a> is full of technical talk, but the gist is that several studies have shown that laughter and other positive emotions strengthen the body’s fight against disease. In one study, breast cancer patients were made to watch a funny video and then a distressing one, with blood tests after each viewing. After watching the pleasurable video, the blood of patients was found to contain higher levels of lymphocytes, or “Natural Killer” cells, which fight disease.

                            These reasons are impressive, but we don’t need science to tell us that laughing is good for us. How could any study capture the warmth of a sincere chuckle shared between friends? This list, more than anything, serves as icing on an already delicious cake. So remember, if you're feeling bad, find something that amuses you. It may help in pleasantly unexpected ways.
                            </p>

                        </div> <!---/article-container--->

                    </div> <!---/small-12 medium-8 columns small-centered--->

                </div> <!---/whiteDiv--->

            </div> <!---/hidden-content-article--->

        </div> <!---/row--->

    </div> <!---/hiddenContent--->

    <!---footer--->
    <div class="contain-to-grid gray-bg">
        <div class="row">
            <div id="footer" class="small-12 columns">
                <?php include ('content-footer.php');?>
            </div>
        </div>
    </div>
    <!---/footer--->

    <!-- SharpSpring Form Push
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

    <!-- End
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    </body>
</html>
