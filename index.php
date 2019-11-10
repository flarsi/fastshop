<?php
use App\Core\{Router, Request};

require 'vendor/autoload.php';
require 'App/core/bootstrap.php';
Router::load('routes.php')->direct(Request::uri(), Request::method());