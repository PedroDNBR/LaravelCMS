<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Visitor;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($slug, Request $request) {
        $page = Page::where('slug', $slug)->first();
        $currentDate = date('Y-m-d H:i:s');
        $ip = $request->ip();  
        if($page){
            $visitor = new Visitor;
            $visitor->ip = $ip;
            $visitor->date_access = $currentDate;
            $visitor->page = $slug;
            $visitor->save();

            return view('site.page', [
                'page' => $page
            ]);
        }else{
            abort(404);
        }
    }
}
