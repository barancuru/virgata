<?php

namespace App\Http\Controllers;

use App\Models\Node;
use Illuminate\Http\Request;

class NodeController extends Controller
{
    // Node'ları listelemek için
    public function index()
    {
        return Node::all();
    }

    // Yeni bir Node oluşturmak için
    public function store(Request $request)
    {
        $node = Node::create($request->all());
        return response()->json($node, 201);
    }

    // Belirli bir Node'u göstermek için
    public function show($id)
    {
        $node = Node::findOrFail($id);
        return response()->json($node);
    }

    // Bir Node'u güncellemek için
    public function update(Request $request, $id)
    {
        $node = Node::findOrFail($id);
        $node->update($request->all());
        return response()->json($node);
    }

    // Bir Node'u silmek için
    public function destroy($id)
    {
        Node::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
