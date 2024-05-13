<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrganizationController extends Controller
{
    public function index()
    {
        $orgs = Organization::all();
        //dd($orgs);
        return Inertia::render('Organization/Index', [
            'orgs' => $orgs,
        ]);
    }
    public function create()
    {
        return Inertia::render('Organization/Create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'industry' => 'required',
            'Orgsize' => 'required',
        ]);
        Organization::create($request->all());
        return redirect()->route('orgs.index');
    }
}