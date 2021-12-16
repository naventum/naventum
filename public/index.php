<?php

use Naventum\Framework\Illuminate\Foundation\Support\Init;
use Naventum\Framework\Illuminate\Support\Facades\App;

require_once '../bootstrap/app.php';

$init = new Init;

$init->paths(__DIR__ . '/..')->dotEnv()->db()->routing()->session()->app(new App)->make();
