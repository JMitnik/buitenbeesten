<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stichting Buitenbeesten</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <script src="../resources/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../resources/assets/homepagejs.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.cycle2.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMTos_Syecrp2rzHPt1qMB6DmHXkqUGOE&callback=initMap"
    async defer></script>
</head>
<body>
<div id="container">
    <nav id="nav">
        <ul id="sectionlist">
            <li class='navlistobj'><a href='#doelstelling'>Doelstelling</a></li>
            <li class='navlistobj'><a href='#bestuur'>Bestuur</a></li>
            <li class='navlistobj'><a href='#'>Financieel</a></li>
            <li class='navlistobj'><a href='#'>Contact</a></li>
        </ul>
    </nav>

    <div id="header">
        <img id="logo" src="../resources/assets/images/logo_buitenbeesten.png" alt="stiching buitenbeesten logo"/>
        <!-- slideshow with one image -->
        <div class="cycle-slideshow"
             data-cycle-fx="scrollHorz"
             data-cycle-timeout="2000"
             data-cycle-auto-height=false
        >
            <div class="cycle-caption"></div>
            <img src="../resources/assets/images/IMG_1180.jpeg">
        </div>
        <!--end slidehow-->
    </div>
    <div id="doelstelling" class="clearfix section">
        <div class="subsection">
            <h1>Waar staat de naam stichting BuitenBeesten voor?</h1>
            <p>Kinderen die om welke reden dan ook niet passen binnen de setting van een regulier
                manege/kinderboerderij, een plek te bieden om te leren omgaan met met allerlei boerderijdieren en de
                daarbij horende verzoring. De kernactiviteit is het zoveel als mogelijk zelfstandig maken van deze
                kinderen door een leeromgeving aan te bieden met dieren in het algemeen en in het bijzonder met paarden,
                olv. gekwalificeerd personeel.</p>
        </div>
        <div class="subsection">
            <h2>Doelstellingen Stichting Buitenbeesten</h2>
            <p id='doelp'>Kinderen die om welke reden dan ook niet passen binnen de setting van een regulier
                manege/kinderboerderij, een plek te bieden om te leren omgaan met met allerlei boerderijdieren en de
                daarbij horende verzoring.
                De kernactiviteit is het zoveel als mogelijk zelfstandig maken van deze kinderen door een leeromgeving
                aan te bieden met dieren in het algemeen en in het bijzonder met paarden, olv. gekwalificeerd personeel.
            </p>
        </div>
        <div class="subsection">
            <h2>Beleidsplan Stichting Buitenbeesten</h2>
            <div class="mid-col clearfix">
                <a href="./beleidsplan" class="box float-left"><i class="fa fa-file-text" aria-hidden="true"></i>
                <span class="icon-caption">Beleidsplan</span></a>
                <a href="./begroting" class="box float-right"><i style='font-size: 120px' class="fa fa-table" aria-hidden="true"></i>
                <span class="icon-caption">Begroten</span></a>


            </div>

        </div>
    </div>

<div id="contact" class="section"><div id="map">
    </div></div>

<div id="footer" class="section"></div>
</div>
</div>
</body>
</html>