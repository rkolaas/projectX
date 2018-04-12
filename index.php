<!DOCTYPE html>
<html lang="en">
    <head>
        <title>robertkolaas</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" href="/assets/css/stylesheet.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Includes -->
        <script> 
            $(function(){
                $("#links").load("/assets/includes/nav.html");
                $("#copyright").load("/assets/includes/copyright.php");
                $("#socialLinks").load("/assets/includes/socialLinks.html");
                $("#contact").load("/assets/includes/contact.html");
            });
        </script> 
    </head>
    <body>
        <!-- Navigation bar -->
        <div class="col-sm-12 navbar-fixed-top" id="nav" role="navigation" >
                <div class="col-sm-3" id="title">
                    <h2>robertkolaas</h2>
                </div>
                <div class="col-sm-6" id="nav2">
                </div>
                <div class="col-sm-3" id="links">  
                    <!-- imported nav.html -->   
                </div>
        </div>
        <!-- sections -->
        <div class="container-fluid" id="section">
            <div class="row section" id="section1">
                <div class="col-sm col-md-2 col-lg-2">
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8" id="content">
                    <h1>Section 1</h1>
                </div>
                <div class="col-sm col-md-2 col-lg-2">
                </div>
            </div>
            <!-- Section 2 -->
            <div class="row section" id="section2">
                <div class="col-sm col-md-2 col-lg-2">
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8" id="content">
                    <h1>Section 2</h1>
                </div>
                <div class="col-sm col-md-2 col-lg-2">
                </div>
            </div>
            <!-- footer -->
            <div class="row footer" id="footer">
                <div class="col-sm-3" id="socialLinks">  
                    <!-- imported socialLinks.html -->   
                </div>
                <div class="col-sm-6" id="copyright">  
                    <!-- imported copyright.php -->             
                </div>
                <div class="col-sm-3" id="contact">
                </div>
            </div>
        </div>


        
    </body>
</html>