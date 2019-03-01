<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Standard\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Organisation\Organisation;

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
        $logged_user = User::
                            join('organisation_admin', 'organisation_admin.user_id', '=', 'users.id')
                            ->join('positions', 'organisation_admin.position_id', '=', 'positions.id')
                            ->join('countries', 'organisation_admin.country_id', '=', 'countries.id')
                            ->join('counties', 'organisation_admin.county_id', '=', 'counties.id')
                            ->join('constituencies', 'organisation_admin.constituency_id', '=', 'constituencies.id')
                            ->join('wards', 'organisation_admin.ward_id', '=', 'wards.id')
                            ->select('users.*',
                                'organisation_admin.*',
                                    'countries.name as country_name',
                                    'counties.name as county_name',
                                    'constituencies.name as constituency_name',
                                    'wards.name as ward_name',
                                    'positions.name as position_name'
                            )->where('users.id', Auth::id())
                            ->first()
                            ;
                            // return $logged_user;

        return view('admin.adminmaster', compact("logged_user"));
        // return view('public.publicmaster');
    }
}
