<html>
    <head>
        <title>
            Reading Data from Radio Buttons
        </title>
    </head>
    <body bgcolor="black">
        <font face="Trebuchet MS" size="5" color="orange">
            <h1 style="background-color:midnightblue;color:white;text-align:center">Your Choice of Biriyani</h1>
            <h2 style="background-color:red;color:white;text-align:center">
                <?php
                    if(isset($_REQUEST["radios"])){
                        echo $_REQUEST["radios"],"<br>";
                    }
                    else{
                        echo "No options selected <br/>";
                    }
                ?>
            </h2>
        </font>
    </body>