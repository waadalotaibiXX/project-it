<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Thanks for Choosing Us! </title>
        <style>
            p , a{
                text-align: center;
                font-family:Garamond ,Georgia ;
                font-size: 40px;
                color:#302e2e;
                text-decoration: none;
            }
            body{
                background-color:#F8EDEB;

            }
   
            a:hover{color:#FEB4A7;}
        </style>
    </head>
    <body>
<p>
<?php 

if($_SERVER["REQUEST_METHOD"]=="POST"):
echo "Your order is confirmed! <br> Thanks ".$_POST["firstname"].' for shopping with florin.  ';
endif;
?><br>
<a href="MainPage.html">Go back to Main Page -> </a>
</p>

    </body>
</html>