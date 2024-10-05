<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;


class UserController extends Controller
{
    public function index(){
        $users = User::get();
        return view('users', compact('users'));
        }
        public function export(){
        return Excel::download(new UsersExport, 'users.xlsx');
        }
}
