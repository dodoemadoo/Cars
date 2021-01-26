<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="../css/car.css" rel="stylesheet">
    </head>
    <body>
        <!--start header-->
        <div class="nav-bar">
            <div class="container">
                <div class="logo">
                    <a >AZ <span>car</span></a>
                </div>

                <div class="max-weight">
                    <div class="wrapper1">
                        <div class="toggle-btn1" onclick="toggleSidebar1(this)">
                            <div class="span">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="sidebar1" id="sidebar1">
                            <div class="toggle-btn1" onclick="toggleSidebar1(this)">
                                <div class="span">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#popular-makers">Car Makers</a></li>
                                <li><a href="#about-us">About us</a></li>
                                <li><a href="#contact-us">Contact</a></li>
                            </ul>  
                        </div>
                    </div>
                </div>
                <script src="../js/nav-ym3n.js"></script>
                



                <nav class="bar">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#popular-makers">Car Makers</a></li>
                        <li><a href="#about-us">About us</a></li>
                        <li><a href="#contact-us">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--end header-->

        <!--start header-title-->
        <div class="text">
            <div class="container">
                <div class="title">
                    <p>Find Your Good Car</p>
                    <a>Existing car <span>1000</span></a>
                </div>
                <div class="ul">
                    <div class="nav-info">
                        <input class="we"  placeholder="SELECT CATEGORY" type="text">
                        <input class="we" placeholder="ENTER ADDRESS" type="text">
                        <input class="we" placeholder="SELECT MODEL YEAR" type="text">
                        <button class="we">SEARCH</button>
                    </div>
                </div>
            </div>
        </div>
        <!--end header-title-->
        <!--start makers-->
        <div class="popular-makers">
            <div class="container">
                <div class="text2">
                    <p>Popular Makers</p>
                    <a>Choose</a>
                </div>
                <div class="makers">
                    <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cardatabase";
$port = "3307";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,$port);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM prand";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div>
            <img src = ". $row["prand_image"]. " alt = " . $row["prand_name"]. "> 
            <br>
            <a href='#' >" . $row["prand_name"]. "</a>
        </div>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>  
                    
                        <div class="more">
                            <a href="#" >more</a>
                        </div>
                </div>
            </div>    
        </div>    
        <!--end makers-->

        <!--start Advertising-->
        <div class="Advertising">
            <div class="container">
                <a></a>
            </div>
        </div>
        <!--end Advertising-->

        <!--start rating-->
        <div class="car5">
            <div class="container">
                <div class="rating">
                    <div class="rating-text">
                        <a>Cars got 5 stars in the rating from people</a>
                    </div>
                    <div class="rating-car1">
                        <div class="rating-car">
                            <div class="car1">
                                <img src="../photo/2018-Nissan-370Z-Nismo.jpg">
                                <a class="combany">
                                    nisaan
                                </a>
                                <a class="name">
                                    nissan 370z
                                </a>
                                <div class="info">
                                    <a class="gear">manual</a>
                                    <a class="chear">2</a>
                                </div>
                            </div>
                        </div>

                        <div class="rating-car1">
                            <div class="rating-car">
                                <div class="car1">
                                    <img src="../photo/2018-Nissan-370Z-Nismo.jpg">
                                    <a class="combany">
                                        nisaan
                                    </a>
                                    <a class="name">
                                        nissan 370z
                                    </a>
                                    <div class="info">
                                        <a class="gear">manual</a>
                                        <a class="chear">2</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="rating-car1">
                            <div class="rating-car">
                                <div class="car1">
                                    <img src="../photo/2018-Nissan-370Z-Nismo.jpg">
                                    <a class="combany">
                                        nisaan
                                    </a>
                                    <a class="name">
                                        nissan 370z
                                    </a>
                                    <div class="info">
                                        <a class="gear">manual</a>
                                        <a class="chear">2</a>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="rating-car1">
                            <div class="rating-car">
                                <div class="car1">
                                    <img src="../photo/2018-Nissan-370Z-Nismo.jpg">
                                    <a class="combany">
                                        nisaan
                                    </a>
                                    <a class="name">
                                        nissan 370z
                                    </a>
                                    <div class="info">
                                        <a class="gear">manual</a>
                                        <a class="chear">2</a>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="rating-car1">
                            <div class="rating-car">
                                <div class="car1">
                                    <img src="../photo/2018-Nissan-370Z-Nismo.jpg">
                                    <a class="combany">
                                        nisaan
                                    </a>
                                    <a class="name">
                                        nissan 370z
                                    </a>
                                    <div class="info">
                                        <a class="gear">manual</a>
                                        <a class="chear">2</a>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="rating-car1">
                            <div class="rating-car">
                                <div class="car1">
                                    <img src="../photo/2018-Nissan-370Z-Nismo.jpg">
                                    <a class="combany">
                                        nisaan
                                    </a>
                                    <a class="name">
                                        nissan 370z
                                    </a>
                                    <div class="info">
                                        <a class="gear">manual</a>
                                        <a class="chear">2</a>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="rating-car1">
                            <div class="rating-car">
                                <div class="car1">
                                    <img src="../photo/2018-Nissan-370Z-Nismo.jpg">
                                    <a class="combany">
                                        nisaan
                                    </a>
                                    <a class="name">
                                        nissan 370z
                                    </a>
                                    <div class="info">
                                        <a class="gear">manual</a>
                                        <a class="chear">2</a>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="rating-car1">
                            <div class="rating-car">
                                <div class="more">
                                    <a>More</a>
                                </div>  
                            </div>
                        </div> 
                    </div>
                </div>
            </div>    
        </div>    
        <!--end rating-->

        <!--start footer-->
        <div class="footer">
            <div class="container">
                <div class="about-us">
                    <h2>ABOUT US</h2>
                    <a>
                        Motoro is the largest online marketplace for car shoppers and sellers.
                        It aggregates thousands of new, used, and certified second-hand cars from 
                        thousands of dealers and private sellers with affordable pricing plans.
                    </a>
                </div>
                <div class="contact-us" >
                    <h2>CONTACT-US</h2>
                    <input type="text">
                    <br>
                    <button>send</button>
                </div> 
            </div>    
        </div>
        <!--end footer-->
    </body>
</html>
