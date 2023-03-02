<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * トップページ
     */
    public function top()
    {
      return view('top.blade.php');
    }

    /**
     * aboutページ
     */
    public function about()
    {
      return view('about.blade.php');
    }
}