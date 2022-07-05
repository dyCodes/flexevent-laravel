<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

function get_last_logged_in()
{
    return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', auth()->user()->last_logged_in)->diffForHumans();
}

function get_setting($key)
{
    $setting = Cache::rememberForever('settings', function () {
        return Setting::first();
    });
    return $setting->{$key};
}
