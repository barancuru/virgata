<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
}
public function store(Request $request)
{
    $node = Node::create($request->all());
    return response()->json($node, 201);
}
