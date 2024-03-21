<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        // web: __DIR__ . '',
        using: function () {


            Route::middleware('web')
                ->group(base_path('./routes/web.php'));

            Route::middleware('web')
                ->group(base_path('./routes/custom.php'));

            Route::middleware('web')
                ->group(base_path('./app/Http/custom/route.php'));

        },
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',

    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => \App\Http\Middleware\Admin::class,
            'supper_admin' => \App\Http\Middleware\SupperAdmin::class,

        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
