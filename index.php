<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stichting Buitenbeesten</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="./assets/homepagejs.js"></script>

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
            <li class='navlistobj'><a href='#beleidsplan'>Beleidsplan</a></li>
            <li class='navlistobj'><a href='#bestuur'>Bestuur</a></li>
            <li class='navlistobj'><a href='#activiteiten'>Actueel</a></li>
            <li class='navlistobj'><a href='#financieel'>Financieel</a></li>
            <li class='navlistobj'><a href='#contact'>Contact</a></li>
        </ul>
    </nav>
    <?php @include 'header.php' ?>
    <?php @include 'doelstellingen.php' ?>
    <?php @include 'beleidsplan.php' ?>
    <?php @include 'bestuur.php' ?>
    <?php @include 'activiteiten.php' ?>
    <?php @include 'financieel.php' ?>

<div id="contact" class="section">
     <div id="infodiv">
     <div id='imgscaler'>
     <img src="./assets/images/logo_stichting_bb.png" alt="stiching buitenbeesten logo";></img>
    </div>
    <ul id="kaartje">
        <li>Middenweg 1, 1191  LG</li>
        <li>Ouderkerk aan de Amstel</li>
        <li>&nbsp;</li>
        <li>Heeft u interesse? Dan bent u altijd welkom voor het maken van een afspraak via:</li>
        <li>&nbsp;</li>
        <li><a class="mailto" href="Bernadette@buitenbeesten.nl">Mail:Bernadette@buitenbeesten.nl</a></li>
        <li>&nbsp;</li>
        <li>Telefoon:06-21838346</li>
        <li>&nbsp;</li>
        <li>RSIN:855765185</li>
    </ul>
    </div>
   <div id="map">
    </div>
</div>

<div id="footer" class="section">
    <p id='footerp'>Stichting Buitenbeesten 2016</p>
</div>
</div>
</div>
</body>
</html>
