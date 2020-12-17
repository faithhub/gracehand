<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $data['title'] = 'Admin Dashboard';
        $data['user_count'] = User::where(['role' => 'User'])->count();
        return view('admin.dashboard.index', $data);
    }
}
