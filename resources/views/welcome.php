<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stichting Buitenbeesten</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    <script src="../resources/vendor/jquery/dist/jquery.min.js"></script>
    <script src="homepagejs.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
    <script src="http://malsup.github.com/jquery.cycle2.js"></script>
</head>
<body>
    <div id="container">
        <nav id ="nav">
            <ul id="sectionlist">
              <li class='navlistobj'><a href='#'>Doelstelling</a></li>
              <li class='navlistobj'><a href='#'>Bestuur</a></li>
              <li class='navlistobj'><a href='#'>Financieel</a></li>
              <li class='navlistobj'><a href='#'>Contact</a></li>
            </ul>
        </nav>
            
        <div id = "header">
<!-- slideshow with one image -->
<div class="cycle-slideshow" 
        data-cycle-fx="scrollHorz" 
        data-cycle-timeout="2000"
    >
    <div class="cycle-caption"></div>
    <img src="http://malsup.github.io/images/p1.jpg">
</div>

<div class=center>
    <button>Add More Images</button>
</div>

<!-- script to add more images at a later time -->
<script>
var images = [
    '<img src="http://malsup.github.io/images/p2.jpg">',
    '<img src="http://malsup.github.io/images/p3.jpg">',
    '<img src="http://malsup.github.io/images/p4.jpg">'
];

$('button').one('click', function() {
    for (var i=0; i < images.length; i++) {
        $('.cycle-slideshow').cycle('add', images[i]);
    }
    $(this).prop('disabled', true)
})
</script>
        </div>
        <div id = "doelstelling"></div>
        <div id = "bestuur"></div>
        <div id = "financieel"></div>
        <div id = "contact"></div>
        <div id="footer"></div>
    </div>
</body>
</html>