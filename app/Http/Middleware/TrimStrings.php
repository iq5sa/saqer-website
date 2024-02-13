<?php
/*
 * Copyright notice for the website built for saqer.com.iq.
 * Copyright (c) 2024. Jodx.dev. All rights reserved.
 * This work is protected by copyright law. Unauthorized reproduction, distribution, or modification is strictly prohibited.
 */

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
     * @var array<int, string>
     */
    protected $except = [
        'current_password',
        'password',
        'password_confirmation',
    ];
}
