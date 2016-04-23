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

    <?php include 'doelstellingen.php' ?>
</div>

<div id="contact" class="section"></div>
<div id="footer" class="section"></div>
</div>
</body>
</html>