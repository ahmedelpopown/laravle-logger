<?php
if (!function_exists('laravelLogger')) {
    function  laravelLogger() {
        return app(\Ahmedelpopown\LaravelLogger\Services\LaravelLoggerService::class);

    }
}
