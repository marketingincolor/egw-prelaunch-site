![EGW Logo](http://myevergreenwellness.com/images/EvergreenWellnessLogoPhone.png)
# egw-prelaunch-site
======
Contributors: adamdoe@github, eddt@github

Tags: evergreen,wellness, prelaunch, landers

License: MIT

Description
------
This project includes a variety of landing pages for Evergreen Wellness, a lifestyle program that gives people 55 and over information and resources to help the enjoy healthier, happier lifes. Evergreen Wellness hosts local events like health expos and seminars where people have fun learning about making healthy lifestyle choices, and we support those efforts with a website where people can go to learn even more. 

This project contains a main landing/success page, an iPad landing/success page for events, and gated content landing/success pages. These pages are responsive and include Google Tag Manager, Open Graph, and Sharpspring components. 



#### Architecture

```
|*************************************************************************************
Pages/
|*************************************************************************************
|
` -- index.php                              # Main Landing Page
` -- footer.php                             # Main Landing Page Footer
` -- success.php                            # Main Success Page
` -- footer-success.php                     # Main Success Page Footer
|
|    ...
|
` -- alt-article-content.php                # Article content landing page
` -- alt-video-content.php                  # Video content landing page
` -- content-footer.php                     # Footer for content pages
|
|    ...
|
` -- benefits-of-laughter.php               # Specific Article Page
` -- townhall.php                           # Townhall pages
` -- townhall-success.php                   # Townhall success page (brings user back to form)
` -- townhall-footer.php                    # Footer for townhall pages

|*************************************************************************************
CSS/
|*************************************************************************************
`-- style.css                               # primary CSS file
`-- style.css.map                           # CSS Map
`-- normalize.css                           # Normalize CSS
`-- skelaton.css                            # Skelaton Boilerplate
`-- article.css                             # Article content css file
`-- video.css                               # Video content css file
`-- home.css                                # Home page CSS
`-- home-success.css                        # Main Landing Page Success CSS

|*************************************************************************************
images/
|*************************************************************************************
`-- arrowPhone.png                          # Arrow used on orangeDiv
`-- BigSwing.png                            # Woman on Swing for Desktop Success Pages
`-- dropdown.png                            # dropdown arrow on form
`-- favicon.ico                             # Favicon
`-- EvergreenWellnessIconPhone.png          # Privacy Policy Icon Phone
`-- EvergreenWellnessLogoPhone.png          # Logo Icon Phone
`-- EvergreenWellnessLogoTablet.png         # Logo Icon Phone
`-- FacebookButtonPhone.png                 # Facebook Like Button
`-- like-us-on-facebook.png                 # Facebook Like Button (Footer)
`-- orangeDiv.png                           # Orange Form Background (Bevel)
`-- ShareButton.png                         # Share Button (Gated Content)
`-- ShineOn.png                             # Shine On Image (Footer of Gated Content)
`-- SubmitButton.png                        # Form Submit Button
|   ... Blog Imagry (Laughter)
`-- laughing-cover.png                      # Blog Content Imagry
`-- fight-sickness.png                      # Blog Content Imagry
`-- physical.png                            # Blog Content Imagry
`-- mind.png                                # Blog Content Imagry
```


####Changelog


