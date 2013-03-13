<?php
	require "html.php";
	for ($i = 1;$i <= 6;$i++)
		echo HTML::parse("h{$i}",["id"=>"test"],"Test");