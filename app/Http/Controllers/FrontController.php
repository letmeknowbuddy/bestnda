<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class FrontController extends Controller
{
    public function about()
    { 
        $currenturl=url()->full();

        $checkurl=DB::table('site_map')->where('page_url',$currenturl)->where('status',0)->first();
        if($checkurl!=''){
            return view('about-us');
        }else{
            return view('404error');
        }
       
        
    }
   
    public function contact ()
    { 
        $currenturl=url()->full();

        $checkurl=DB::table('site_map')->where('page_url',$currenturl)->where('status',0)->first();
        if($checkurl!=''){
            return view('contact-us');
        }else{
            return view('404error');
        }

    }



    public function blog()
    {
        $currenturl=url()->full();

        $checkurl=DB::table('site_map')->where('page_url',$currenturl)->where('status',0)->first();
        if($checkurl!=''){
            $blog = DB::table('add_blog')->where('status', 0)->orderBy('id', 'desc')->get();
            return view('blog', ['blog' => $blog]);
        }else{
            return view('404error');
        }

        
  
    }


    public function search(Request $req)
    {
          $url = $_SERVER['REQUEST_URI'];
            if ( preg_match('/[A-Z]/', $url) ) {
                // Convert URL to lowercase
                $lc_url = strtolower($url);
                // 301 redirect to new lowercase URL
                header('Location: ' . $lc_url, TRUE, 301);
                exit();
            }
        if (!isset($_GET['blog'])) {
            $title   = '';
        }else{
            $title   = $_GET['blog'];
            
        }
        $scount=DB::table('search')->where('title', $title)->count();
        if($scount==0){
            DB::table('search')->insert([
                'title'      => $title,
                'count'    => 1,
                'created_at'  => now()->format('Y-m-d').' '.now()->format('H:i:s'),
                
            ]);
        }else{
           $count=DB::table('search')->select('count')->where('title', $title)->get();
            foreach($count as $item){
             DB::table('search')->where('title', $title)->update(['count' => $item->count+1]);

        }
        }
        $blog = DB::table('add_blog')->where('blog_title','like', '%' . $title . '%')->orderby('id', 'desc')->get();
        return view('search',['blog' => $blog,'title'=>$title]);
    }

    public function blogdetls($blog_slug)
    {

        $currenturl=url()->full();

        $checkurl=DB::table('site_map')->where('page_url',$currenturl)->where('status',0)->first();
        if($checkurl!=''){
            $url = $_SERVER['REQUEST_URI'];
            if ( preg_match('/[A-Z]/', $url) ) {
                // Convert URL to lowercase
                $lc_url = strtolower($url);
                // 301 redirect to new lowercase URL
                header('Location: ' . $lc_url, TRUE, 301);
                exit();
            }
            $blogs = DB::table('add_blog')->where('status', 0)->orderBy('id', 'desc')->where('blog_slug',$blog_slug)->first();
                if (!empty($blogs)) 
                {
                return view('blog-details',['blogs' => $blogs]);
                }else{

                    return redirect('404error');
                }
        }else{
            return view('404error');
        }


    }
    
    public function privacy()
    { return view('privacy-policy'); }

    public function terms()
    { return view('terms-and-conditions'); }

     public function eroor()
    { return view('404error'); }
 
}