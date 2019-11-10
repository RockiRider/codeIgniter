<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>KentBook</title>
        <link rel="stylesheet" type="text/css" href="<?= asset_url();?>css/home.css" media="all"/>
    </head>
    <body>
        <div class="banner">
            <div class="bg">
                <h1 id="title"> [ The Kentbook ]</h1>
            </div>
        </div>
        <div class="borderino">
            <div class="main">
                <div class="right">
                    <div id="welcome">
                        <h1>[ Welcome to The Kentbook ]</h1>
                        <p>The Kentbook is an online directory that connects people through social networks at Kent University!</p>
                        <br>
                        <p>Incase you can't tell we are taking you back to 2004, when <a href="https://facebook.com">facebook</a> had just launched. View similarities <a href="https://en.wikipedia.org/wiki/Facebook#/media/File:Thefacebook.png">here</a></p>
                    </div>
                </div>
                <div class="left">
                    <div class="smallbord">
                        <form action="">
                            <label>Username:</label><br>
                            <input type="text" name="username" value="">
                            <br>
                            <label>Password:</label><br>
                            <input type="password" name="psw" value="">
                            <br><br>
                            <input type="submit" value="Login">
                            <input type="submit" value="Register">
                        </form> 
                    </div>
                </div>
            </div>
            <footer>
                <p>a Tsotne Gvadzabia production</p>
                <p>Thekentbook @ 2019</p>
            </footer>
        </div>
    </body>
</html>