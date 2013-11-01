<?php

	/*
	* -----------------------------------------------------------------------------
	* “THE COFFEEWARE LICENSE” (Revision 1):
	* <ihsan@kehribar.me> wrote this file. As long as you retain this notice you
	* can do whatever you want with this stuff. If we meet some day, and you think
	* this stuff is worth it, you can buy me a coffee in return.
	* -----------------------------------------------------------------------------
	*/

	$CITY = $_GET["c"];

	if($CITY != '')
	{
		$OPEN_WEATHER_MAP_URL_PREFIX = 'http://api.openweathermap.org/data/2.5/weather?units=metric&q=';

		$raw_contents = file_get_contents($OPEN_WEATHER_MAP_URL_PREFIX . $CITY);

		$decoded = json_decode($raw_contents,true);		

		echo round($decoded["main"]["temp"],1);

		echo ",";

		echo $decoded["weather"][0]["description"];

		echo "\r\n";
	}

?>
