<!doctype html>
<html>
    <head>
        <title>robertkolaas.no</title>
        <!-- CSS imports -->
	    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/portfolio.css">
        <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
        <link rel="stylesheet" href="assets/css/thumbnail-gallery.css">
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Includes -->
        <script> 
            $(function(){
                $("#cvContent").load("/includes/cv.html");
                $("#portfolioContent").load("/includes/portfolio.html");
                $("#contactContent").load("/includes/contact.html"); 
                $("#navIcons").load("/includes/nav.html"); 
                $("#some").load("/includes/some.html"); 
            });
        </script> 
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
            </div>
            <div class="about" id="cv">
                <div class="content-wrapper">
                <div class="content" id="cvContent">
                </div>
            </div>
            </div>
            <div class="portfolio" id="portfolio">
                <div class="content-wrapper">
                    <div class="content" id="portfolioContent">
                        <h1>Portfolio</h2>
                    </div>
                </div>
            </div>
            
            <div class="contact" id="contact">
                <div class="content-wrapper">   
                    <div class="content" id="contactContent">
                        <h1 id="cv">Kontakt</h2>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="some" id="some">
                </div>
                <div class="menu" id="navIcons">
                </div>
            </div>
        </div>
    </body>
</html>