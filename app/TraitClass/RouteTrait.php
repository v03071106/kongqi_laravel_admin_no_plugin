<?php
// +----------------------------------------------------------------------
// | KongQiAdminBase [ Laravel快速后台开发 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2012~2019 http://www.kongqikeji.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: kongqi <531833998@qq.com>`
// +----------------------------------------------------------------------

namespace App\TraitClass;

use Illuminate\Support\Facades\Route;

trait RouteTrait
{

    public $route;
    /**
     * 路由信息
     * @param $module
     * @return array
     */
    public function routeInfo($module)
    {
        $route_arr = explode('@', Route::currentRouteAction());
        $data = [];
        $data['route_name'] = Route::currentRouteName();
        $data['controller_name'] = '\\' . $route_arr[0];
        $data['action_name'] = strtolower($route_arr[1]);
        $data['controller_base'] = str_replace('Controller', '', str_replace('App\\Http\\Controllers\\' . $module . '\\', '', $route_arr[0]));
        $data['controller'] = '\\' . $route_arr[0];
        $data['controller_base_lower']=strtolower($data['controller_base']);

        $this->route=$data;
        return $data;
    }

}