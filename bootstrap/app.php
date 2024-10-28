<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\CustomerMiddleware;
use App\Http\Middleware\Loginmiddleware;
use App\Http\Middleware\CheckRoleMiddleware;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
      ->withMiddleware(function (Middleware $middleware) {
          $middleware->alias([
              'customer'=>CustomerMiddleware::class,
              'customerlogin'=>Loginmiddleware::class,
              'roles'=>CheckRoleMiddleware::class,

          ]);

      })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
