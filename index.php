<?php
$SNIEPs1 = $SNIEPs2 = $SNIEPs3 = $RPLs1 = $RPLs2 = $RENFECs1 = $RENFECs1 = $EPASs1 = $EPASs2 = $EPASs3 = $SCOM1 = $SCOM2 = "";
$Clima1 = $Clima2 = $Clima3 = "";
$Bandoteca = $Magazie = $CCentrala = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $SNIEPs1 = test_input($_POST['temp']);
    echo $SNIEPs1;
    // $SNIEPs2 = test_input($_POST['']);
    // $SNIEPs3 = test_input($_POST['']);

    // $RPLs1 = test_input($_POST['']);
    // $RPLs2 = test_input($_POST['']);
    // $RPLs3 = test_input($_POST['']);

    // $RENFECs1 = test_input($_POST(['']));
    // $RENFECs2 = test_input($_POST(['']));

    // $EPASs1 = test_input($_POST['']);
    // $EPASs2 = test_input($_POST['']);
    // $EPASs3 = test_input($_POST['']);

    // $SCOM1 = test_input($_POST['']);
    // $SCOM2 = test_input($_POST['']);

    // $Clima1 = test_input($_POST['']);
    // $Clima2 = test_input($_POST['']);
    // $Clima3 = test_input($_POST['']);

    // $Bandoteca = test_input($_POST['']);
    // $Magazie = test_input($_POST['']);
    // $CCentrala = test_input($_POST['']);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>DEPABD-Live monitoring</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shorcut icon" type="image/png" href="img/favicon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/templatemo-main.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="js/icons.js"></script>
        
    </head>


<body>

    <div class="fixed-side-navbar">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#home"><span>Home</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#datacenter"><span>Data Center</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#rooms"><span>Rooms</span></a></li>
        </ul>
    </div>

    <div class="parallax-content baner-content" id="home">
        <div class="container">
            <div class="first-content">
                <h1>DEPABD</h1>
                <span>LIVE MONITORING</span>
                <div class="primary-button">
                    <a href="#datacenter">Data center</a>
                </div>
                <div class="primary-button">
                    <a href="#rooms">Rooms</a>
                </div>

            </div>
        </div>
    </div>


    <div class="service-content" id="datacenter">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col" style="transform: translateY(60px);">
                    <div class="col-sm-6">
                        <div class="service-item">
                            <h4>Clima 1</h4>
                            <i class="fad fa-fan-table" style="font-size:25px;"></i>
                            <div class="line-dec"></div>
                            <p>Humidity</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="service-item">
                            <h4>Clima 2</h4>
                            <i class="fad fa-fan-table" style="font-size:25px;"></i>
                            <div class="line-dec"></div>
                            <p>Humidity</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="service-item">
                            <h4>Clima 3</h4>                            
                            <i class="fad fa-fan-table" style="font-size:25px;"></i>
                            <div class="line-dec"></div>
                            <p>Humidity</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    
                        <div class="col-sm">
                            <div class="service-item">
                                
                                <h4> SNIEP</h4>
                                <i class="fad fa-server" style="font-size:25px;"></i>
                                <div class="line-dec"></div>
                                <p>S1 temperature: <?php echo $SNIEPs1 ?> °C</p>
                                <p>S2 temperature: °C</p>
                                <p>S3 temperature: °C</p>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="service-item">
                                <h4>RENFEC</h4>
                                <i class="fad fa-server" style="font-size:25px;"></i>
                                <div class="line-dec"></div>
                                <p>S1 temperature: °C</p>
                                <p>S2 temperature: °C</p>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="service-item">
                                <h4>SERVER COM 1</h4>
                                <i class="fad fa-server" style="font-size:25px;"></i>
                                <div class="line-dec"></div>
                                <p>S1 temperature: °C</p>
                            </div>
                        </div>
                </div>
                <div class="col">
                        <div class="col-sm">
                            <div class="service-item">
                                <h4>RPL</h4>
                                <i class="fad fa-server" style="font-size:25px;"></i>
                                <div class="line-dec"></div>
                                <p>S1 temperature: °C</p>
                                <p>S2 temperature: °C</p>
                                
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="service-item">
                                <h4>EPAS</h4>
                                <i class="fad fa-server" style="font-size:25px;"></i>
                                <div class="line-dec"></div>
                                <p>S1 temperature: °C</p>
                                <p>S2 temperature: °C</p>
                                <p>S3 temperature: °C</p>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="service-item">
                                <h4>SERVER COM 2</h4>
                                <i class="fad fa-server" style="font-size:25px;"></i>
                                <div class="line-dec"></div>
                                <p>S1 temperature: °C</p>
                            </div>
                        </div>
                    
                </div>                
            </div>
        </div>
    </div>

    
    <div class="service-content2" id="rooms">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-5">
                    <div class="service-item">
                        <h4>BANDOTECA</h4>
                        <div class="line-dec"></div>
                        <p>S1 temperature:  °C</p>
                    </div>

                    <div class="service-item">
                        <h4>MAGAZIE</h4>
                        <div class="line-dec"></div>
                        <p>S1 temperature: °C</p>
                    </div>

                    <div class="service-item">
                        <h4>CAMERA CENTRALA</h4>
                        <div class="line-dec"></div>
                        <p>S1 temperature:  °C</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="primary-button">
                        <a href="#home">Back To Top</a>
                    </div>
                    <p>All rights reserved &copy; Pascu Augustin & Radu Munteanu</p> 
                    <p><a rel="nofollow noopener" href="http://depabd.mai.gov.ro"><em>DEPABD</em></a></p>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script>
        function openCity(cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
               x[i].style.display = "none";  
            }
            document.getElementById(cityName).style.display = "block";  
        }
    </script>

    <script>
        $(document).ready(function(){
          // Add smooth scrolling to all links
          $(".fixed-side-navbar a, .primary-button a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;

              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){
           
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
        });
    </script>

</body>
</html>