<?php

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function category_nav_active($category_id){
    //if_route() - 判断当前对应的路由是否是指定的路由;
    
    // if_route_param() - 判断当前的 url 有无指定的路由参数。
    return active_class((if_route('categories.show') && if_route_param('category',$category_id)));
}