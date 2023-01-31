<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePeopleRequest;
use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        $people = People::all();

        return response()->json([
            'status' => true,
            'people' => $people
        ]);
    }
    public function create()
    {
        //
    }
    public function store(StorePeopleRequest $request)
    {
        $people = People::create($request->all());

        return response()->json([
            'status' => true,
            'people' => $people
        ], 200);
    }
    public function show($id)
    {
        return response()->json(['status'=>true,
            'people' => People::findOrFail($id)
        ]);
    }
    public function edit(People $people)
    {
        //
    }
    public function update(StorePeopleRequest $request, People $peopleup)
    {
        $peopleup->update($request->all());

        return response()->json([
            'status' => true,
            'people' => $peopleup
        ], 202);
    }
    public function destroy(People $people)
    {
        $people->delete();

        return response()->json([
            'status' => true,
        ], 204);
    }
}
