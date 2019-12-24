<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TrashApp - Locate Nearby Trashcans</title>

        <meta name="keywords" content="trash,app,trashapp,android,mobile,nature,waste,rubbish">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">

        <!-- COMMON TAGS -->
        <meta charset="utf-8">
        <!-- Search Engine -->
        <meta name="description" content="TrashApp locates nearby public trashcans, so you can use them instead of getting rid of waste in nature!">
        <meta name="image" content="https://trashapp.cc/img/feature-en.png">
        <!-- Schema.org for Google -->
        <meta itemprop="name" content="TrashApp - Locate Nearby Trashcans">
        <meta itemprop="description" content="TrashApp locates nearby public trashcans, so you can use them instead of getting rid of waste in nature!">
        <meta itemprop="image" content="https://trashapp.cc/img/feature-en.png">
        <!-- Mobile App for iOS & Android -->
        <meta name="google-play-app" content="app-id=org.inventivetalent.trashapp">
        <!-- Twitter -->
        <meta name="twitter:card" content="app">
        <meta name="twitter:title" content="TrashApp - Locate Nearby Trashcans">
        <meta name="twitter:description" content="TrashApp locates nearby public trashcans, so you can use them instead of getting rid of waste in nature!">
        <meta name="twitter:site" content="@Inventivtalent">
        <meta name="twitter:creator" content="@Inventivtalent">
        <meta name="twitter:image:src" content="https://trashapp.cc/img/feature-en.png">
        <!-- Twitter - Mobile App (iOS & Android) -->
        <meta name="twitter:app:id:googleplay" content="org.inventivetalent.trashapp">
        <meta name="twitter:app:name:googleplay" content="TrashApp">
        <meta name="twitter:app:url:googleplay" content="https://trashapp.cc">
        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta name="og:title" content="TrashApp - Locate Nearby Trashcans">
        <meta name="og:description" content="TrashApp locates nearby public trashcans, so you can use them instead of getting rid of waste in nature!">
        <meta name="og:url" content="https://trashapp.cc/img/feature-en.png">
        <meta name="og:site_name" content="TrashApp">
        <meta name="og:locale" content="en">
        <meta name="og:type" content="website">
        <!-- Open Graph - Mobile App (iOS & Android) -->
        <meta name="al:android:package" content="org.inventivetalent.trashapp">
        <meta name="al:android:app_name" content="TrashApp">
        <meta name="al:android:url" content="https://trashapp.cc">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" integrity="sha256-2YQRJMXD7pIAPHiXr0s+vlRWA7GYJEK0ARns7k2sbHY=" crossorigin="anonymous"/>
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:600,700&display=swap" rel="stylesheet">
        <style>
            html, body {
                font-family: 'Work Sans', sans-serif;

                color: white;
                text-align: center;

                overflow: hidden;
                overflow-y: auto;
            }

            .drop-shadow{
                text-shadow: 0px 0px 8px black;
            }

            .disclaimer{
                font-size: 1.5rem;
            }

            .store-button{
                width: 50vh;
            }

            footer{
                font-size: 2rem;
                position: absolute;
                /*left: 10px;*/
                bottom: 10px;
                width:100%;
            }
            footer a{
                text-decoration: none;
                color: #1a1fbb;
            }

            h1 {
                font-size: 12rem;
            }

            h2 {
                font-size: 6rem;
            }

            body {
                /* fallback color */
                background-color: rgb(26, 116, 1);

                background-size: 150%;
            }
        </style>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
<br/>
        <br/>
     <main>
         <div class="container">
             <h1 class="drop-shadow">TrashApp</h1>

             <br/>

             <h2 class="drop-shadow">Find Nearby Trashcans<br/>
                 Stop Polluting Nature</h2>

             <br/>
             <br/>

             <!-- TODO -->

             <div>
                 <?php
                 $referrer = "utm_source=TrashAppWebsite";
                 if(isset($_GET["utm_medium"])){
                     $referrer.="&utm_medium=".$_GET["utm_medium"];
                 }
                 if (isset($_GET["utm_campaign"])) {
                     $referrer.="&utm_campaign=".$_GET["utm_campaign"];
                 }
                 $referrer = urlencode($referrer);
                 ?>
                 <a href='https://play.google.com/store/apps/details?id=org.inventivetalent.trashapp&utm_source=TrashAppWebsite&referrer=<?php echo $referrer; ?>'>
                     <img class="store-button" alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png'/>
                 </a>
                 <br/>
                 <span class="drop-shadow disclaimer">Google Play and the Google Play logo are trademarks of Google LLC.</span>
             </div>


         </div>
     </main>

        <footer>
            <span class="drop-shadow">Made by <a href="https://inventivetalent.dev?utm_source=TrashAppWeb">inventivetalent</a></span>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function () {

                function setBackgroundImage() {
                    let imgRotationSuffix = "";
                    if (window.innerHeight > window.innerWidth) {// portrait
                        imgRotationSuffix = "_90";
                        $("body").css("background-position", "auto");
                    } else {
                        // landscape
                        //TODO: make sure this doesn't mess up anything
                        $("body").css("background-position", "center");
                    }

                    let imgSize = "1";
                    try{
                        let connection = navigator.connection || navigator.mozConnection || navigator.webkitConnection;
                        let networkType = connection.type||connection.effectiveType;
                        let networkDownlink = connection.downlink;
                        console.log("Network type: " + networkType);
                        console.log("Network downlink: "+networkDownlink);

                        if (networkDownlink < 5) {
                            imgSize = "0,5";
                        }
                        if (networkDownlink < 1.2) {
                            imgSize = "0,25";
                        }
                        if (networkDownlink < .6) {
                            imgSize = "0,1";
                        }
                    }catch (e) {
                        console.warn("Failed to get network info", e);
                    }

                    let img = "bg_lowres" + imgRotationSuffix +"@"+imgSize + "x.jpg";
                    console.log(img);
                    $("body").css("background-image", "url(img/" + img + ")");
                }

                setBackgroundImage();
                $(window).on("orientationchange", function () {
                    setBackgroundImage();
                })
                $(window).on("resize", function () {
                    setBackgroundImage();
                })
            })
        </script>
    </body>
</html>
