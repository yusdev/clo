<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanelController extends Controller
{
    public function index()
    {
      if(Auth::check()){
        return redirect('admin/panel');
      }
      return view('auth.login');
    }

    public function panel()
    {
      return view('back.panel');
    }
}
