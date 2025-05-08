<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <div>
            <?php
                if($_REQUEST["un"]=="John_doe"&&$_REQUEST["password"]=="0xdeadcafe"){

            ?>
                <h6>User accepted</h6><br>
            <?php    
            }
            else{
                ?>
                <h6>User is not Accepted.</h6><br>
            <?php
            }
            ?>
            <a href="login.html"><button accesskey="p" tabindex="0">BACK</button></a>
        </div>
    </body>
</html>