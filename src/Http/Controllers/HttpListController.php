<?php

namespace RajTechnologies\Tools\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RajTechnologies\Reminder\Repositories\WalkReminderRepository;
use Illuminate\Support\Facades\Validator;
use Route;
use Artisan;
class HttpListController extends Controller
{
    public function index(Request $request)
    {
        $Collection = config("Tool.http");
        return view("Tool::httplist.index",compact('Collection'));
    }    
}
