<?php

use App\Models\StaticOption;

function set_static_option($key, $value)
{
    if (!StaticOption::where('option_name', $key)->first()) {
        StaticOption::create([
            'option_name' => $key,
            'option_value' => $value
        ]);
        return true;
    }
    return false;
}

function get_static_option($key)
{
    global $option_name;
    $option_name = $key;
    $value = StaticOption::where('option_name', $option_name)->first();
    // \Illuminate\Support\Facades\Cache::remember($option_name, 86400, function () {
    //     global $option_name;
    //     return StaticOption::where('option_name', $option_name)->first();
    // });

    return !empty($value) ? $value->option_value : null;
}

function update_static_option($key, $value)
{
    if (!StaticOption::where('option_name', $key)->first()) {
        StaticOption::create([
            'option_name' => $key,
            'option_value' => $value
        ]);
        return true;
    } else {
        StaticOption::where('option_name', $key)->update([
            'option_name' => $key,
            'option_value' => $value
        ]);
        \Illuminate\Support\Facades\Cache::forget($key);
        return true;
    }
    return false;
}

function delete_static_option($key)
{
    StaticOption::where('option_name', $key)->delete();
    return true;
}
