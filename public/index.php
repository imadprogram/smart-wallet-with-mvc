<?php
session_start();

require_once __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../config/config.php';

use App\Core\App;
use App\Core\Controller;

$app = new App();