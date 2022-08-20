<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function testroute()
    {
        // Role::create(['name' => 'Admin']);
        // Permission::create(['name' => 'delete banner']);
        // $permission = Permission::find(2);
        $role = Role::find(2);
        $user = User::find(2);
        $user->assignRole($role);
    }
}
