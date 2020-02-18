<?php

namespace App\Http\Controllers\Api;

use App\Child;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ChildResource;

class ChildrenController extends Controller
{
    public function show(Child $child)
    {
        return (new ChildResource($child))->response()->setStatusCode(200);
    }
}
