<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TableController extends Controller
{
    public function index()
    {
        $users = User::select('id', 'name', 'email')->get();

        return view('table.index', compact('users'));
    }
}
