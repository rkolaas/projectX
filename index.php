<!doctype html>
<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	    <title>robertkolaas.no</title>
	    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script> 
            $(function(){
                $("#cvContent").load("/includes/cv.html");
                $("#portfolioContent").load("/includes/portfolio.html");
                $("#contactContent").load("/includes/contact.html"); 
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
                <div class="some">
                    <a></a>
                    <a></a>
                    <a></a>
                </div>
                <div class="menu">
                    <a href="#"><img class="img" src="/assets/gfx/home.png" title="Hjem"></a>
                    <a href="#cv"><img class="img" src="/assets/gfx/about.png" title="CV"></a>
                    <a href="#portfolio"><img class="img" src="/assets/gfx/portfolio.png" title="Portfolio"></a>
                    <a href="#contact"><img class="img" src="/assets/gfx/contact.png" title="kontakt"></a>
                </div>
            </div>
        </div>
    </body>
</html>