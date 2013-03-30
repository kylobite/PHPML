<?php
	require "html.min.php";
	for ($i = 1;$i <= 6;$i++)
		echo HTML::parse("h{$i}","Test",["id"=>"test"]);
