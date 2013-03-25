
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

<link rel="shortcut icon" href="http://www.corona13.com/favicon.ico"/> 
			<title>Corona 13 | Registration </title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="description" content="College life is one of the most exciting phases in anyone's life.It is in this period when you learn to handle the pleasure of  freedom with responsibility of a career simultaneously.Along with the studies, cultural activities go along a long way in shaping the personality of a student and here only we came across the idea of an event to accomplish that... OUR CORONA-The Annual Techno Cultural Fest.Corona has helped the students of our institution and various others to explore their and strengths and weaknesses up to a great extent.CORONA (earlier Radiance) started in a small room by a bunch of enthusiastic students in the very first year of the establishment of the institute and now it is one of the biggest festivals of IP university">
			<meta name="keywords" content="corona'13 website, official corona'13, Corona'13, Corona2k13, corona bpit,BPIT fest">
			<meta name="author" content="Shekhar Sharma( http://facebook.com/shekharsharma91 )">
			<meta property="og:image" content="http://www.corona13.com/open.jpg"/>

<!--meta tags end site-->

<!-- Meta tags facebook -->

			<meta property="og:title" content="Bpit Presents Corona'13 | The Annual techno-cultural fest"/>
			
			<meta property="og:site_name" content="Bpit Corona'13- The annual Techno Cultural Fest"/>
			<meta property="og:description" content="College life is one of the most exciting phases in anyone's life.It is in this period when you learn to handle the pleasure of  freedom with responsibility of a career simultaneously.Along with the studies, cultural activities go along a long way in shaping the personality of a student and here only we came across the idea of an event to accomplish that... OUR CORONA-The Annual Techno Cultural Fest.Corona has helped the students of our institution and various others to explore their and strengths and weaknesses up to a great extent.CORONA (earlier Radiance) started in a small room by a bunch of enthusiastic students in the very first year of the establishment of the institute and now it is one of the biggest festivals of IP university"/>
				
<!-- meta tags facebook off-->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
		<script type="text/javascript" src="jquery.min.js"></script>
        <script type="text/javascript" src="sliding.form.js"></script>
    </head>
    <style>
        span.reference{
            position:fixed;
            left:5px;
            top:5px;
            font-size:10px;
            text-shadow:1px 1px 1px #fff;
        }
        span.reference a{
            color:#555;
            text-decoration:none;
			text-transform:uppercase;
        }
        span.reference a:hover{
            color:#000;
            
        }
        h1{
            color:#ccc;
            font-size:36px;
            text-shadow:1px 1px 1px #fff;
            padding:20px;
        }
    </style>
    <body>
        <div>
            <span class="reference">
                <a href="javascript:history.back()">Go Back </a>
            </span>
        </div>
        <div id="content">
            <h1>Registration Response</h1>
            <div id="wrapper">
			<?php
  require_once("config.php");
  $result = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
$database = DB_NAME;
@mysql_select_db($database) or die( "Unable to select database. Please see if the database exists");

  $reg = $_POST['event'];

    $N = count($reg);
 $events="Selected events are:- ";
    echo("You selected $N Event(s): ");
    for($i=0; $i < $N; $i++)
    {
     $events=$events.$reg[$i] . " , ";
    }

  
  
  function rand_string( $length ) {
    $length += 3;
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";  
    $str= "";
    $size = strlen( $chars );
    for( $i = 0; $i <6; $i++ ) {
                            $str .= $chars[ rand( 0, $size - 1 ) ];
    }

    return $str;
}

$getstring = rand_string(20,5);
echo "Your registration ID is : ".$getstring." ";
$sql="INSERT INTO register (name, email, phone, college, event, regid) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['c']."','".$events."','".$getstring."')";
	 $ref=mysql_query($sql);

?>
          </div>
        </div>
    </body>
</html>