<?php

use MyApp\Model\Brand;
use MyApp\Model\Producer;
use MyApp\Storage\Application;

require_once realpath("vendor/autoload.php");
$application = new MyApp\Storage\Application();
$application->run();
