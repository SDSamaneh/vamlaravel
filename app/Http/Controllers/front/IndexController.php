<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\dashboard\Category;
use App\Models\dashboard\Departmans;
use App\Models\dashboard\Supervisors;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $supervisors = Supervisors::all();
        $departmans = Departmans::all();
        return view('front/index', compact('categories', 'supervisors', 'departmans'));
    }
}
