<?php

namespace RajTechnologies\Tools\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class HttpListController extends Controller
{
    public function index(Request $request)
    {
        $Collection = config("Tool.http");
        return view("Tool::httplist.index",compact('Collection'));
    }    
}
