<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edge extends Model
{
    use HasFactory;
}
// app/Models/Edge.php içinde

public function fromNode()
{
    return $this->belongsTo(Node::class, 'from_node_id');
}

public function toNode()
{
    return $this->belongsTo(Node::class, 'to_node_id');
}
