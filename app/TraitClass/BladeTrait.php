<?php
// +----------------------------------------------------------------------
// | KongQiAdminBase [ Laravel快速后台开发 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2012~2019 http://www.kongqikeji.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: kongqi <531833998@qq.com>`
// +----------------------------------------------------------------------
namespace App\TraitClass;
trait BladeTrait
{

    public $bladeView;
    public $bladePrefix='';


    /**
     * 输出视图
     * @param array $data
     * @return mixed
     */
    public function display($data = [])
    {

        //取得表名
        $this->getTable();
        $this->pageName();
        $this->commonBlade();


        return view($this->bladePrefix.$this->bladeView, $data);
    }



    public function setModelControllerView($view_name = '')
    {
        $route_info = $this->routeInfo;
        $view_name ? $this->bladeView = strtolower($this->module) . '.' . strtolower($route_info['controller_base']) . '.' . $view_name : '';
    }

    public function setModelView($view_name = '')
    {

        $view_name ? $this->bladeView = strtolower($this->module) . '.' . $view_name : '';
    }

    /**
     * 是否视图目录取消控制器目录
     * @return bool
     */
    public function viewNotControllerBlade(){
        return false;
    }

    public function getBlade()
    {
        $route_info = $this->routeInfo;
        $controller=strtolower($route_info['controller_base']) . '.' ;
        if($this->viewNotControllerBlade())
        {
            $controller='';
        }

        $this->bladeView = strtolower($this->module) . '.' .$controller . $route_info['action_name'];

    }

    /**
     * 通用设置
     */
    public function commonBlade()
    {

    }
}