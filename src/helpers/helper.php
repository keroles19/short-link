<?php


if (!function_exists('getShorterLink')) {
    function getShorterToken()
    {
        return config('shortlink.SHORTEN_TOKEN');
    }
}
