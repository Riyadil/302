<?php session_start(); 

?>
<<<<<<< HEAD

=======
>>>>>>> Riyadil-master
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Movies</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">    
  
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pattaya&disp">
    
    <style>
        .myButton {
	box-shadow:inset 3px 2px 3px 0px #bd2121;
	background:linear-gradient(to bottom, #c12700 5%, #a72100 100%);
	background-color:#c1001a;
	border-radius:11px;
	border:1px solid #771212;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:16px;
	padding:15px 24px;
	text-decoration:none;
	text-shadow:0px -1px 0px #154682;
}
.myButton:hover {
	background:linear-gradient(to bottom, #a71300 5%, #c12700f1 100%);
	background-color:#a72700;
}
.myButton:active {
	position:relative;
	top:1px;
}




    *
       {
           padding: 0;
           margin: 0;
           box-sizing: border-box;
       }
       body
       {
           background-image: url("images/back.jpg");
           background-size: cover;
           background-position: center;
           font-family: 'Oswald', sans-serif;
           background-repeat: no-repeat;
           background-attachment: fixed;
           background-size: 100% 100%;
       }

       .ownn
        {
            
            
          
            font-size:small;
            color: whitesmoke;
        }
       
       .menu-bar
       {
           background:darkred;
           text-align: center;
           font-size: 15px;
       }
       .menu-bar ul
       {
           display: inline-flex;
           list-style: none;
           color: #fff;
       }
       .menu-bar ul li
       {
           width:120px;
           margin:15px;
           padding: 15px;
       }
       .menu-bar ul li a
       {
           text-decoration: none;
           color: #fff;
       }
       .active , .menu-ar ul li:hover
       {
           background: #000;
           border-radius: 2px;

       }
       .menu-bar fa
       {
           margin-left: 20px;
           float: left;
           padding-right: 5px;
       }
       .sub-menu-1
       {
           display:none;

       }
       .menu-bar ul li:hover  .sub-menu-1
       {
           display: block;
           position: absolute;
           background-color:darkred;
           margin-top: 15px;
           margin-left:-15px;
           z-index: 1000;
           
       }
       .menu-bar ul li:hover  .sub-menu-1 ul
       {
           display: block;
           margin:10px;
           
       }
       .menu-bar ul li:hover  .sub-menu-1 ul li
       {
           width:150px;
           padding:10px;
           border-bottom: 1px dotted #fff;
           background:transparent;
           border-radius: 0;
           text-align: left;
           color: white;
       }
       
       .menu-bar ul li:hover  .sub-menu-1 ul li:last-child
       {
           border-bottom: none;
       }
       .menu-bar ul li:hover  .sub-menu-1 ul a:hover
       {
           color: white;
       }
       .sub-menu-2
       {
           display: none;
       }
       .hover-me:hover .sub-menu-2
       {
           position: absolute;
           display: block;
           margin-top: -40px;
           margin-left:140px;
           background: darkred;
       }
       .header
       {
           padding-top: 0%;
       }
       .headings
       {
           font-size: xx-large;
           color: #fff;
       }
       .description
       {
           font-size: large;
           color: #fff;
       }
    </style>
    

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

   <header id="header">      
        

               
        <div class="menu-bar">
            <ul>
                <li class="active"><a href='http://localhost/302/homee.php'><i class="fa fa-home"></i> Home</a></li>
                <li><a href='https://localhost/302/login_admin.php'><i class="fa fa-check" ></i> Admin</a></li>
                <li><a href='#'><i class="fa fa-play-circle" ></i> Showtime</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="http://localhost/302/movies2D.php"><i class="fa fa-check"></i> 2D</a></li>
                            <li><a href="http://localhost/302/movies3D.php"><i class="fa fa-check"></i> 3D</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href='#'><i class="fa fa-shopping-cart"></i> Concession</a>
                    <div class="sub-menu-1">
                        <ul>
                           
                            <li><a href="http://localhost/302/portfolio.php"><i class="fa fa-cutlery"></i> Refreshments</a></li>
                            <li><a href="http://localhost/302/merch.php"><i class="fa fa-coffee"></i> Merchandise</a></li>
                        </ul>
                    </div>

                </li>
                <li><a href='http://localhost/302/registration.php'><i class="fa fa-user-plus"></i> Sign Up</a></li>
                <li><a href='http://localhost/302/contact%20us.php'><i class="fa fa-phone"></i> Contact Us</a></li>
                <li>
                <?php
                $count=0;
                if(isset($_SESSION['cart']))
                {
                    $count=count($_SESSION['cart']);

                } 
                ?>
                <a href="myCart.php"><i class="fa fa-shopping-cart"></i> My Cart (<?php echo $count; ?>)</a>
                
                </li>
            </ul>
        </div >
         
           
    </header>
    <!-----------hhhhhhhhhhhhhhhhhhhhhhhhhhhhhh------------------->



    <div style="text-align:center; "><h1 style="font-size: 50px;font-weight:bold; font-family: 'Oswald', sans-serif;">2D Movies</h1></div>
   <section id="company-information" class="padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                
                <img src="images/movies/armyofthedead.jpg" class="img-responsive" alt="" width="300" height="100"  >
                
            </div>
            <div class="person-info col-sm-6">
                <?php
                 
                 //Oracle DB user name
    $username = 'dbms';

    // Oracle DB user password
    $password = 'dbms';

    // Oracle DB connection string
    $connection_string = 'localhost/xe';
 $connection = oci_connect(
        $username,
        $password,
        $connection_string
    );

    if (!$connection)
        echo 'Oops 🙁 connection failed';
    else
    $query = "SELECT movie_name from movie_info where movie_id='1'";
    $result = oci_parse($connection, $query);
    oci_execute($result);
    while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) { 
                            foreach ($row as $item) {
                        print "<h1 class=\"headings\">". ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</h1>" ;
                              }
                            }

                           
               ?>
                
                
                
                <div class="description">
                <p>2021 ‧ Horror/Action ‧ 2h 28m</p>
            
                <p>Following a zombie outbreak in Las Vegas, a group of mercenaries take the ultimate gamble, venturing into the quarantine zone to pull off the greatest heist ever attempted.
                    <br>
                    <br>
                    <br>
                    <b>Director:</b>
                    Zack Snyder
                    <br>
                   <b>
                    Writers:
                   </b>
                    Zack Snyder(story by)Shay Hatten(screenplay by)Joby Harold(screenplay by)
                    <br>
                    <b>Stars:</b>
                    Dave Bautista . Ella Purnell . Ana de la Reguera</p>
                </div>
                    <br>
                    <br>
                    <a href="movie-1.php" class="myButton">Buy Ticket</a>
                    <a href="https://www.youtube.com/watch?v=tI1JGPhYBS8" class="myButton">Trailer</a>
            </div>
        </div>
             <br>
        <div class="row">
            <div class="col-sm-5">
                <img src="images/movies/thebox.jpg" class="img-responsive" alt="" width="300" height="100">
            </div>
            <div class="person-info col-sm-6">
            <?php
                 
                 //Oracle DB user name
    $username = 'dbms';

    // Oracle DB user password
    $password = 'dbms';

    // Oracle DB connection string
    $connection_string = 'localhost/xe';
 $connection = oci_connect(
        $username,
        $password,
        $connection_string
    );

    if (!$connection)
        echo 'Oops 🙁 connection failed';
    else
    $query = "SELECT movie_name from movie_info where movie_id='2'";
    $result = oci_parse($connection, $query);
    oci_execute($result);
    while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) { 
                            foreach ($row as $item) {
                        print "<h1 class=\"headings\">". ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</h1>" ;
                              }
                            }

                           
               ?>
                <div class="description">
                <p>2021 ‧ Musical/Music ‧ 1h 34m</p>
            
                <p>A music producer fallen from grace finds an artist - Ji Hoon who has everything needed to make it big and discovers the one thing holding him back, paralyzing stage fright.

                    
                    
                    <br>
                    <br>
                    <br>
                    <b>Director:</b>
                    Yang Jeong-Woong
                    <br>
                   
                    
                    <b>Stars:</b>
                    Dal Hwan Cho . Chan-Yeol Park</p>
                </div>
                    <br>
                    <br>
                    <a href="movie-2.php" class="myButton">Buy Ticket</a>
                    <a href="https://www.youtube.com/watch?v=gjSXRO1AcnQ" class="myButton">Trailer</a>
            </div>
        </div>

<br>
        <div class="row">
            <div class="col-sm-5">
                <img src="images/movies/conjuring3.png" class="img-responsive" alt="" width="300" height="100">
            </div>
            <div class="person-info col-sm-6">
            <?php
                 
                 //Oracle DB user name
    $username = 'dbms';

    // Oracle DB user password
    $password = 'dbms';

    // Oracle DB connection string
    $connection_string = 'localhost/xe';
 $connection = oci_connect(
        $username,
        $password,
        $connection_string
    );

    if (!$connection)
        echo 'Oops 🙁 connection failed';
    else
    $query = "SELECT movie_name from movie_info where movie_id='3'";
    $result = oci_parse($connection, $query);
    oci_execute($result);
    while ($row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS)) { 
                            foreach ($row as $item) {
                        print "<h1 class=\"headings\">". ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</h1>" ;
                              }
                            }

                           
               ?>
                <div class="description">
                <p>2021 ‧ Horror/Thriller ‧ 1h 52m</p>
            
                <p>Paranormal investigators Ed and Lorraine Warren try to uncover the truth behind a murderer's claim of demonic possession.

                    
                    
                   <br>
                   <br>
                   <br>
                    <b>Director:</b>
                    Michael Chaves

                    <br>
                    <b>Writers:</b>
                    James Wan . David Leslie . Johnson-McGoldrick
                    <br>
                  
                    
                    <b>Stars:</b>
                    Patrick Wilson . Vera Farmiga . Ruairi O'Connor

                    </p>
                </div>
                    <br>
                    <br>
                    <a href="movie-3.php" class="myButton">Buy Ticket</a>
                    <a href="https://www.youtube.com/watch?v=h9Q4zZS2v1k" class="myButton">Trailer</a>
                
            </div>
        </div>

<br>




    </div>
</section>
  
<footer id="footer" >
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Quotes</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/kung-fu-panda.jpg" alt="" ></a>
                            </div>
                            <div class="media-body">
                                <div class="ownn"><blockquote>Your story may not have such a happy beginning but that does not make you who you are, it is the rest of it- who you choose to be</blockquote></div>
                                <h3><a href="#">- Master Oogway</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/pursuit_of_happiness.jpg" alt=""></a>
                            </div>
                            <div class="media-body">
                            <div class="ownn">   <blockquote>You got a dream... You gotta protect it. People can't do somethin' themselves, they wanna tell you you can't do it. If you want somethin', go get it. Period.</blockquote></div>
                                <h3><a href="">- Christopher Gardner</a></h3>
                            </div>
                        </div>   
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <div class="ownn">
                        <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
                        Phone: +1 (123) 456 7890 <br> 
                        Fax: +1 (123) 456 7891 <br> 
                        </address>
                        </div>
                        <h2>Address</h2>
                        <div class="ownn">
                        <address>
                        Army Officer's Club,Nirjhor Residential area, <br> 
                        Dhaka Cantonment, <br> 
                        Dhaka-1216, <br> 
                        Bangladesh <br> 
                        </address>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Our Location</h2>
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="413" height="372" id="gmap_canvas" src="https://maps.google.com/maps?q=Officer's%20Club,Nirjhar,Dhaka%20Cantonment%20,Dhaka,Bangladesh&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies se</a><br><style>.mapouter{position:relative;text-align:right;height:372px;width:413px;}</style><a href="https://www.embedgooglemap.net">google map embed generator</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:372px;width:413px;}</style></div></div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Your Company 2014. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>

