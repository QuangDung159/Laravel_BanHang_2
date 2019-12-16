<?php

namespace App\Http\Controllers;

use App\Constant;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showIndexPage()
    {
        return view(Constant::PATH_INDEX);
    }
}
