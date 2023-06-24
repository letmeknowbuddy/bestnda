<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SitemapXmlController extends Controller
{
    public function index() {
        $posts=DB::table('site_map')->where('status',0)->get();
        return response()->view('sitem', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
      }
}