<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    /**
     * Menampilkan halaman Pendahuluan.
     */
    public function dashboard()
    {

        return view('dashboard');
    }

    public function pendahuluan()
    {
        return view('pendahuluan');
    }

}
