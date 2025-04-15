<?php

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
        //
        //$middleware->append(\Subfission\Cas\Middleware\CASAuth::class);
        $middleware->alias([
            'cas.auth' => \Subfission\Cas\Middleware\CASAuth::class,
            'Agent' => Jenssegers\Agent\Facades\Agent::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
