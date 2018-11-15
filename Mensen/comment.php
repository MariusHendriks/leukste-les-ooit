<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Comment</title>
        <link Rel="stylesheet" type="text/css" href="css/theme.css">
    </head>
    <body>
        <br/>
        <br/>
        <fieldset class="bevestiging">
            <legend>Bevestiging comment</legend>

            <?php


            if ( isset( $_POST["name"] ) ) {
	            $sFormName = $_POST["name"];
	            $sTel      = $_POST["phone"];
	            $sComment  = $_POST["comment"];
	            $sEmail    = $_POST["email"];
	            $sGender   = $_POST["gender"];
	            $tijd      = date( "d-m-Y" );
            }

            echo( "Beste " . $sFormName . "(" . $sGender . ")" . "<br/>" );
            echo( "Uw email is: " . $sEmail . "</br>");
            echo( "Hartelijk dank voor het indienen van uw comment jonge om " . $tijd . "<hr/>" );
            echo( $sComment . "<br/><hr/><br/>" );

            $e = "naam: " . $sFormName . "<br/>";
            $e .= "gender: " . $sGender . "<br/>";
            $e .= "email: " . $sEmail . "<br/> ";
            $e .= "comment: " . $sComment . "<br/><hr/><br/> ";
            $e .= "om: " . $tijd;

            die();
            ?>
        </fieldset>
    </body>
</html>