<?php

require_once "connect.php";

echo Speedometer::convertKmtoMiles(10) . "<br>" . PHP_EOL;
echo Speedometer::convertMilestoKm(10);