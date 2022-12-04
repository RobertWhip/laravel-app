<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/tW5IfmvRiqA2yLm2H26NJSq6UeVsoDoaB0aaCF8H7T1LiCorY9wxy3hnouKDJUaJ/webhook'
    ];
}
