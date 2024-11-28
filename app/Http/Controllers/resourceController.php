<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class resourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Student::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return ['result'=>'create Function'];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return ['result'=>'store Function'];

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return ['result'=>'show Function'];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return ['result'=>'edit Function'];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return ['result'=>'update Function'];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return ['result'=>'destroy Function'];
    }
}
