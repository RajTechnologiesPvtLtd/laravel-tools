<?php

namespace RajTechnologies\Tools\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Route;
use Artisan;
class RouteController extends Controller
{
    public function clearcache()
    {
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear ');
        Artisan::call('view:clear ');
        return "Cache is cleared";
    }
    public function index(Request $request)
    {
        if(request()->has('only')){
            $title = "API Routes List";
        }else{
            $title = "All Routes List";
        }
        $routeCollection = Route::getRoutes();
        return view("Tool::routes.index",compact('title','routeCollection'));
    }

    
}
