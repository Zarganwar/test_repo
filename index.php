<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="windows-1250">
        <title></title>
    </head>
    <body>
		<h1>HEADER</h1>
		<p>ODSTAVEC</p>
		<?php
		$t = new DateTime("-30 days");
		echo $t->format("d.m.Y");
		?>
		<p>TEXT</p>
    </body>
</html>
