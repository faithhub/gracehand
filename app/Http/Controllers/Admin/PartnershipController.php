<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partnership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class PartnershipController extends Controller
{
    public function index()
    {
        $data['title'] = 'Partnerships';
        $data['sn'] = 1;
        $data['users'] = Partnership::all();
        return view('admin.partnership.index', $data);
    }
    public function view_partnership($id)
    {
        $data['title'] = 'View Partnership Details';
        $user = Partnership::find($id);
        if ($user->count() > 0) {
            try {
                $data['user'] = $user;
                return view('admin.partnership.view', $data);
            } catch (\Throwable $th) {
                Session::flash('warning', $th->getMessage());
                return back();
            }
        } else {
            Session::flash('warning', 'Partnership not found');
            return back();
        }
    }
    public function delete_partnership(Request $request)
    {
        try {
            Partnership::find($request->id)->delete();
            Session::flash('success', 'Partnership Deleted Successfully');
            return \back();
        } catch (\Throwable $th) {
            Session::flash('error', $th->getMessage());
            return \back();
        }
    }
}
