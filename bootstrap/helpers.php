<?php
/**
 * Created by PhpStorm.
 * Author: littledragoner
 * Date: 2019/1/30
 * Time: 10:04
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}