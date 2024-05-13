<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class Teamcontroller extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', ['teams' => $teams]);
    }
    public function show($id)
    {
        $team = Team::find($id);
        return view('teams.team', ['team' => $team]);
    }
}