<?php
// Project-level polyfills loaded by Composer autoload to aid tools (VSCode)

if (! function_exists('str')) {
    function str($value = '')
    {
        if (class_exists(\Illuminate\Support\Str::class)) {
            return \Illuminate\Support\Str::of($value);
        }

        return (string) $value;
    }
}
