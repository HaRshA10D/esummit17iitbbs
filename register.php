<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Profiles | ESummit'17</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" media="all" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">     
    <link rel="shortcut icon" href="images/favicon.png">
</head>

<body>
	<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href="https://www.facebook.com/centrepreneurship" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/esummit.iitbbs/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a ><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.php">
                    	<h1><img src="images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class=""><a href="index.php">Home</a></li>
                        <li class="dropdown"><a href="#">Featured  <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="featured.php#panel">Panel discussions</a></li>
                                <li><a href="featured.php#ted">Ted Talks</a></li>
                                <li><a href="featured.php#drive">Investors drive</a></li>
                                <li><a href="featured.php#start">Start-up expo</a></li>
                                <li><a href="featured.php#star">Star-Nite</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Events  <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="competitions.php">Competitions</a></li>
                                <li><a href="workshops.php">Workshops</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="schedule.php">Schedule</a></li>
                        <li class=""><a href="profiles.php">Profiles</a></li>
                        <li class=""><a href="sponsors.php">Sponsors</a></li>
                        <li class=""><a href="team.php">Team</a></li>
                                           
                    </ul>
                </div>
                <!--<div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div>-->
            </div>
        </div>
    </header>
    <!--/#header-->
    <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">REGISTRATIONS</h1>
    <p class="text-center wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">Events and Workshops.</p>
    <br/><br/>
    <div class="row container" style="width: 100%" id="cp">
        <div class="col-sm-offset-3 col-sm-6 col-xs-12">
            <div class="contact-form bottom">
                <h3 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">COMPETITIONS APPLICATION</h3>
                <form id="main-contact-form" name="contact-form" method="post" action="workandcomp.php">
                    <div class="form-group">
                        <input class="form-control" name="fname" placeholder="First name" required="required" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="lname" placeholder="Last name" required="required" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="collegename" placeholder="Institution name" required="required" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email" placeholder="Email" required="required" type="text">
                    </div>
                    <div class="form-group">
                      <label>Gender :</label>
                      <select class="form-control" name="gender">
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Competition :</label>
                      <select class="form-control" name="gender">
                        <option value="">--Competition--</option>
                        <option value="bizquiz"> Biz-quiz</option>
                        <option value="productdesign"> Product design</option>
			<option value="merger&aquisition"> Stock Wars</option>
			<option value="iplauction"> IPL Auction</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="phone" placeholder="Mobile contact" required="required" type="text">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>        
    </div>
    <br/><br/>
    <div class="row container" style="width: 100%" id="ws">
        <div class="col-sm-offset-3 col-sm-6 col-xs-12">
            <div class="contact-form bottom">
                <h3 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">WORKSHOPS APPLICATION</h3>
                <form id="main-contact-form" name="contact-form" method="post" action="workandcomp.php">
                    <div class="form-group">
                        <input class="form-control" name="fname" placeholder="First name" required="required" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="lname" placeholder="Last name" required="required" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="collegename" placeholder="Institution name" required="required" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email" placeholder="Email" required="required" type="text">
                    </div>
                    <div class="form-group">
                      <label>Gender :</label>
                      <select class="form-control" name="gender">
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Workshop :</label>
                      <select class="form-control" name="gender">
                        <option value="">--Competition--</option>
                        <option value="digital marketing">Digital marketing</option>
                        <option value="leanStartup">Lean startup worksop</option>
                        <option value="Share market investment">Share Market & Investment</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="phone" placeholder="Mobile contact" required="required" type="text">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>        
    </div>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Professors in charge</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/pr.jpg" alt=""></a>
                            </div>
                            <div class="media-body">
                                <h3>Dr. V. Pandu ranga</h3>
                                <h3>Chairman, ESummit'17</h3>
                                <h3><a href="mailto:pandu@iitbbs.ac.in">pandu@iitbbs.ac.in</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/ag.jpg" alt=""></a>
                            </div>
                            <div class="media-body">
                                <h3>Dr. Ankur gupta</h3>
                                <h3>Vice-chairman, ESummit'17</h3>
                                <h3><a href="mailto:ankurgupta@iitbbs.ac.in">ankurgupta@iitbbs.ac.in</a></h3>
                            </div>
                        </div>   
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        C Likhit kumar <br/>
                        Chief Coordinator, ESummit'17 <br/>
                        E-mail: <a href="mailto:coord.esummit@iitbbs.ac.in">coord.esummit@iitbbs.ac.in</a> <br> 
                        Phone: +91 7077102035 <br>
                        </address>

                        <h2>Address</h2>
                        <address>
                        IIT BHUBANESWAR <br/>
                        Arugul campus <br/>
                        Khurda, Odisha-751013 
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Message team ESummit</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="institution" class="form-control" required="required" placeholder="institution">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; ESummit 2017. All Rights Reserved.</p>
                        <p>Designed and developed by web & design team, ESummit</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>
