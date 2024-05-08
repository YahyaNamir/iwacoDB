<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function show($id)
    {
        $manager = Manager::with('projects')->find($id);

        return view('managers.show', compact('manager'));
    }
}
