<?php

use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsGuest;
use App\Http\Middleware\IsPelanggan;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'isadmin' => IsAdmin::class,
            'isguest' => IsGuest::class,
            'ispelanggan' => IsPelanggan::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
