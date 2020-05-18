<?php

use App\Http\Controllers\api\bancoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('banco', 'api\bancoController');