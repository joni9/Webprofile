<?php

use App\Models\Project;
use App\Models\Section;
use App\Models\Service;
use App\Models\Setting;

function get_setting_value($key)
{
    $data = Setting::where('key', $key)->first();
    if (isset($data->value)) {
        return $data->value;
    } else {
        return 'empty';
    }
}
function get_section_value($key)
{
    $data = Section::where('post_as', $key)->first();
    if (isset($data)) {
        return $data;
    }
}
function get_project()
{
    $data = Project::all();
    if (isset($data)) {
        return $data;
    }
}
function get_service()
{
    $data = Service::all();
    if (isset($data)) {
        return $data;
    }
}
