<?php

require('global.php');

//Get URL parameters.
$type = htmlspecialchars($_GET["type"]);
$action = htmlspecialchars($_GET["action"]);

//Build page based on URL parameters.
$body_html = "";
switch ($type) {

    case "film":

    	if ( $action == "create" ) {

    		$body_html = "

    		<form action=\"admin.php\" id=\"edit_db_item\">
    		Film: <input type=\"text\" name=\"film\" size=\"40\"><br><br>
    		IMDB URL: <input type=\"text\" name=\"url\" size=\"40\"><br><br>
    		Director(s): <input type=\"text\" name=\"directors\" size=\"40\"><br><br>
    		Release Year: <input type=\"text\" name=\"release_year\" size=\"40\"><br><br>
    		Running Time: <input type=\"text\" name=\"running_time\" size=\"40\"><br><br>
    		Rating: <select name=\"rating\"><option value=\"5\">5</option><option value=\"4\">4</option><option value=\"3\">3</option><option value=\"2\">2</option><option value=\"1\">1</option></select><br><br>
    		Backdated: <select name=\"backdated\"><option value=\"No\">No</option><option value=\"Yes\">Yes</option></select><br><br>
    		<input type=\"hidden\" name=\"event\" value=\"new_film_submission\">
    		<input type=\"submit\" value=\"Submit\">
    		</form>

    		";

    	} elseif ( $action == "edit" ) {

    		$body_html = "film - edit";

    	}

        break;

    case "show":
        
    	if ( $action == "create" ) {

    		$body_html = "show - create";

    	} elseif ( $action == "edit" ) {

    		$body_html = "show - edit";

    	}

        break;

    case "book":
        
    	if ( $action == "create" ) {

    		$body_html = "book - create";

    	} elseif ( $action == "edit" ) {

    		$body_html = "book - edit";

    	}

        break;

    case "quote":
        
    	if ( $action == "create" ) {

    		$body_html = "quote - create";

    	} elseif ( $action == "edit" ) {

    		$body_html = "quote - edit";

    	}

        break;

}

?>

<!DOCTYPE html>

<html>

<head>
	
	<?php echo print_default_opening_head(); ?>

</head>

<body>
	
	<div id="toprail"></div>
	
	<!-- Begin master container. -->
	<div id="container">
		
		<div class="logo"><a href="admin.php">F-ADMIN</a></div>

		<p><?php echo $body_html ?></p>

	</div>
	<!-- End container. -->

</body>

</html>	