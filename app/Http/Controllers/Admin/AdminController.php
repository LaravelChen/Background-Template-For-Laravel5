<?php

namespace App\Http\Controllers\Admin;

use App\Repository\AdminRepostiry;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public $admin;

    /**
     * AdminController constructor.
     * @param AdminRepostiry $admin
     */
    public function __construct(AdminRepostiry $admin)
    {
        $this->admin = $admin;
    }

    /**
     * 显示后台首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $collects = $this->admin->rdashboard();
        return view('admin.dashboard.index', compact('collects'));
    }

    /**
     * 显示后台管理员个人信息
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function admininfo()
    {
        return view('admin.admin.index');
    }

    /**
     * 显示用户信息页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function usermembershow()
    {
        return view('admin.usermember.index');
    }

    /**
     * 显示文章列表页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function articleshow()
    {
        return view('admin.article.index');
    }

    /**
     * 创建文章页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function uploadarticle()
    {
        return view('admin.article.create');
    }
}

