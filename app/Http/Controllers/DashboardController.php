<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kamar;
use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'page' => 'dashboard',
            'jmlUser' => User::all()->count(),
            'jmlKamar' => Kamar::all()->count(),
        ];
        return view('backend.dashboard', $data);
    }
}
