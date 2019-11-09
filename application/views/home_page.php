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
            <h1 id="title">KentBook</h1>
        </div>
    </div>
	<h1>Welcome to Home Page!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>


</body>
</html>