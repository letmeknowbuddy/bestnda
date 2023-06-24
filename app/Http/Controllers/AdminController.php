<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Hash;
use URL;
use Illuminate\Support\Str;
use DB;





class AdminController extends Controller
{
    public function admin()
    {
       return view('admin.index');
    }
    public function dashborad()
    {
         return view('admin.dashborad');
    }
    // sitemap
        public function sitemap()
    {
        $sitemap=DB::table('site_map')->orderBy('id','desc')->get();
         return view('admin.sitemap.sitemap',['sitemap'=>$sitemap]);
    }

    public function site_edit($id)
    {
        $data=DB::table('site_map')->where('id',$id)->first();
         return view('admin.sitemap.sitemap_edit',['data'=>$data]);
    }

    public function site_delete(Request $request)
    {
        $del = $request->delete;
         DB::table('site_map')->where('id', $del)->delete();
          $notification = array(
         'message' => 'Manu Delited Successful',
         'alert-type' => 'warning'
        );
        return redirect()->route('admin.sitemap')->with($notification);
    }

    public function site_save(Request $request)
    {
        $url = $request->page_url;
        $slugs = explode ("/", $url);
        $latestslug = $slugs [(count ($slugs) - 1)];
        // dd($latestslug);

         DB::table('site_map')->where('id', $request->id)->update(
            [
                'page_url'=>$request->page_url,
                'changefre'=>$request->changefre,
                'priority'=>$request->priority,
                'status'=>$request->status,
            ]
         );

         DB::table('add_blog')->where('blog_slug',$latestslug)->update([
            'status'=>$request->status,
         ]);
         DB::table('add_page')->where('slug',$latestslug)->update([
            'status'=>$request->status,
         ]);


          $notification = array(
         'message' => 'Sitemap Updated Successful',
         'alert-type' => 'success'
        );
        return redirect()->route('admin.sitemap')->with($notification);
    }
// sitemap
    public function siteupdate(Request $req)
    {
     $image         = $req->file('h_logo');
     $footer_about  = $req->footer_about;
     if ($image) 
     {
      $image      =     time().'.'.$req->h_logo->extension();
      $req->h_logo->move(public_path('logo/header_image'), $image);
     }
     else{
     $image = $req->old_logo;
     }
      DB::table('site_update')->where('id', 1)->update([
             'logo'              =>  $image,
             'about'             =>  $footer_about
         ]);
 
       $notification = array(
          'message' => 'Site Updated Successful',
          'alert-type' => 'success'
         );
         return redirect()->route('admin.sitemap')->with($notification);
    }
 
     public function webmasterUpdate(Request $req){
         $google                = $req->google;
         $yandex                = $req->yandex;
         $mnvali                = $req->mnvali;
         DB::table('webmaster_update')->where('id', 1)->update([
             'google'             =>  $google,
             'yandex'             =>  $yandex,
             'pintrest'           =>  $mnvali
         ]);
 
          $notification = array(
          'message' => 'Webmaster Updated  Successful',
          'alert-type' => 'info'
         );
 
         return redirect()->route('admin.update')->with($notification);
     }
 
      public function analyticsUpdate(Request $req){
         $header   = $req->head_dtl;
         $body     = $req->foot_dtl;
         DB::table('analytics_update')->where('id', 1)->update([
             'header'  =>  $header,
             'body'    =>  $body,
         ]);
 
         $notification = array(
          'message' => 'Analytics Header Updated Successful',
          'alert-type' => 'success'
         );
        return redirect()->route('admin.update')->with($notification);
     }
 
      public function socalUpadte(Request $req)
     {
         $fb_url  = $req->fb_url;
         $tw_url  = $req->tw_url;
         $yt_url  = $req->yt_url;
         $ins_url = $req->ins_url;
         $li_url  = $req->li_url;
         $pin_url = $req->pin_url;
 
         DB::table('socal_updated')->where('id', 1)->update([
             'Facebook' =>$fb_url,
             'twitter'    =>$tw_url,
             'youtube'  =>  $yt_url,
             'intagram'    =>$ins_url,
             'linkdan'  =>  $li_url,
             'printest'    => $pin_url,
         ]);
          $notification = array(
          'message' => 'Socal Link Updated Successful',
          'alert-type' => 'success'
         );
      return redirect()->route('admin.update')->with($notification);
     }

    public function update()
    {
        return view('admin/update/update');
    }

    public function pages()
    {
        $menu = DB::table('add_page')->get();
        return view('admin/page/pages', ['menu' => $menu]);
    }

    public function addpage()
    {
       
        return view('admin/page/add_page');
    }

    public function addpages(Request $req)
   {

    $page_name      = $req->page_name;
    $slug           = $req->slug;
    $slug_id        = $slug.rand(10,100);
    $meta_title     = $req->meta_title;
    $meta_keywords  = $req->meta_keywords;
    $description    = $req->description;
    $banner_img     = $req->file('banner_img');
    $og_img         = $req->file('og_img');

   $banner_img = time() . '.' . $req->banner_img->getClientOriginalExtension();
   $req->banner_img->move(public_path('menuimage/banner_img'), $banner_img);

   $og_img  = time() . '.' . $req->og_img->getClientOriginalExtension();
   $req->og_img->move(public_path('menuimage/og_img'), $og_img);

   DB::table('site_map')->insert([
    'page_url'=>url('/'.$slug ),
    'changefre'=>"weekly",
    'priority'=>"0.90",
    'slug'=>$slug_id,

   ]);
   
   DB::table('add_page')->insert([

    'page_name'         => $page_name,
    'slug'              => $slug,
    'slug_id'           => $slug_id,
    'meta_title'        => $meta_title,
    'meta_keyword'      => $meta_keywords,
    'meta_descrption'   => $description,
    'baneer_image'      => $banner_img,
    'omg_image'         => $og_img,
   ]);
    $notification = array(
         'message' => 'Manu Added Successful',
         'alert-type' => 'success'
        );
    return redirect()->back()->with($notification);
   }

   public function editpage($id)
   {
    $pageedit = DB::table('add_page')->where('id',$id)->first();
    return view('admin/page/edit_page', ['pageedit' => $pageedit]);
   }

   public function updatepage(Request $req)
   {
    $id            = $req->id;
    $page_name     = $req->page_name;
    $slug          = $req->slug;
    $slugid       = $req->slug.rand(10,100);
    $title         = $req->title;
    $keywords      = $req->keywords;
    $description   = $req->description;
    $banner_img    = $req->file('banner_img');
    $og_img        = $req->file('og_img');
    $status        = $req->status;
    if ($banner_img) 
    {
    $banner_img = time() . '.' . $req->banner_img->getClientOriginalExtension();
    $req->banner_img->move(public_path('menuimage/banner_img'),$banner_img);
    }
    else{

        $banner_img = $req->old_image;
    }

    if($og_img) 
    {
    $og_img = time() . '.' . $req->og_img->getClientOriginalExtension();
    $req->og_img->move(public_path('menuimage/og_img'),$og_img);
    }
    else{

       $og_img = $req->old_ogimg;
    }
    $item=DB::table('add_page')->select('slug_id')->where('id',$id)->first();

    DB::table('site_map')->where('slug',$item->slug_id)->update([
        'page_url'=>url('/'.$slug ),
        'changefre'=>"weekly",
        'priority'=>"0.90",
        'slug'=>$slugid,
        'status'=>$status,
    
       ]);

    DB::table('add_page')->where('id',$id)->update([

      'page_name'       =>  $page_name,
      'slug'            =>  $slug,
      'slug_id'         =>  $slugid,
      'meta_title'      =>  $title,
      'meta_keyword'    =>  $keywords,
      'meta_descrption' =>  $description,
      'baneer_image'    =>  $banner_img,
      'omg_image'       =>  $og_img,
      'status'          =>  $status,
    ]);
         $notification = array(
         'message' => 'Page Edit Successful',
         'alert-type' => 'success'
        );
    return redirect()->back()->with($notification);
   }

   public function editblog($id)
   {  
    $blogedit = DB::table('add_blog')->where('id',$id)->first();
    return view('admin/blog/edit_blog', ['blogedit' => $blogedit]);
   }

   public function updateblog(Request $req)
   {
     $id               = $req->id;
     $blog_title       = $req->blog_title;
     $blog_slug        = $req->blog_slug;
     $slugid           = $req->blog_slug.rand(10,100);
     $meta_title       = $req->meta_title;
     $meta_keywords    = $req->meta_keywords;
     $meta_description = $req->meta_description;
     $category         = $req->category;
     $u_email          = $req->u_email;
     $u_name           = $req->u_name;
     $user_type        = $req->user_type;
     $thumbimg         = $req->file('thumbimg');
     $banner_img       = $req->file('banner_img');
     $blog             = $req->blog;
     $status           = $req->status;

    if($thumbimg) 
    {
    $thumbimg = time() . '.' . $req->thumbimg->getClientOriginalExtension();
    $req->thumbimg->move(public_path('blog_image/thumbimg'), $thumbimg);
    }
    else{

       $thumbimg = $req->old_image;
    }
     if ($banner_img) 
    {
    $banner_img = time() . '.' .$req->banner_img->getClientOriginalExtension();
    $req->banner_img->move(public_path('blog_image/banner_img'), $banner_img);
    }
    else{
       $banner_img = $req->banner_oldimage;
    }

    $item=DB::table('add_blog')->select('slug_id')->where('id',$id)->first();
    DB::table('site_map')->where('slug',$item->slug_id)->update([
        'page_url'=>url('/'.$blog_slug ),
        'changefre'=>"weekly",
        'priority'=>"0.90",
        'slug'=>$slugid,
        'status'=>$status,

       ]);
    DB::table('add_blog')->where('id',$id)->update([

      'blog_title'       => $blog_title,
      'blog_slug'        => $blog_slug,
      'slug_id'          => $slugid,
      'meta_title'       => $meta_title,
      'meta_keywords'    => $meta_keywords,
      'meta_description' => $meta_description,
      'u_email'          => $u_email,
      'u_name'           => $u_name,
      'user_type'        => $user_type,
      'category'         => $category,
      'thumbimg'         => $thumbimg,
      'banner_img'       => $banner_img,
      'blog'             => $blog,
      'status'           => $status,
    ]);

     $notification = array(
      'message' => 'Blog Edit Successful',
      'alert-type' => 'success'
        );
    return redirect()->back()->with($notification);
   }

   public function delitepage($id)
   {
    $item=DB::table('add_page')->select('slug_id')->where('id',$id)->first();

    DB::table('site_map')->where('slug',$item->slug_id)->delete();
    
    DB::table('add_page')->where('id', $id)->delete();
          $notification = array(
         'message' => 'Manu Delited Successful',
         'alert-type' => 'warning'
        );
    return redirect()->back()->with($notification);
   }

    // start blog
   public function deliteblog($id)
   {
    $item=DB::table('add_blog')->select('slug_id')->where('id',$id)->first();
    DB::table('site_map')->where('slug',$item->slug_id)->delete();
     $blog = DB::table('add_blog')->where('id', $id)->delete();
      $notification = array(
         'message' => 'Blog Delite Successful',
         'alert-type' => 'warning'
        );
      return redirect()->back()->with($notification);
   }

    public function blogs()
    {
        $blog = DB::table('add_blog')->orderBy('create_at','desc')->get();
        return view('admin/blog/blogs', ['blog' => $blog]);
    }

    public function addblog()
    {
        return view('admin/blog/add_blog');
    }

    public function saveblog(Request $req)
   {
   $blog_title        = $req->blog_title;
   $blog_slug         = Str::slug($req->blog_slug);
   $slug_id           = str_replace('-','',$blog_slug).rand(10,100);
   $meta_title        = $req->meta_title;
   $meta_keywords     = $req->meta_keywords;
   $meta_description  = $req->meta_description;
   $u_email           = $req->u_email;
   $u_name            = $req->u_name;
   $user_type         = $req->user_type;
   $category          = $req->category;
   $thumbimg          = $req->file('thumbimg');
   $banner_img        = $req->file('banner_img');
   $blog              = $req->blog;
   $thumbimg = time() . '.' . $req->thumbimg->getClientOriginalExtension();
   $req->thumbimg->move(public_path('blog_image/thumbimg'), $thumbimg);

   $banner_img = time() . '.' . $req->banner_img->getClientOriginalExtension();
   $req->banner_img->move(public_path('blog_image/banner_img'), $banner_img);

//    dd($slug_id);
   DB::table('site_map')->insert([
    'page_url'=>url('/'.$blog_slug ),
    'changefre'=>"weekly",
    'priority'=>"0.80",
    'slug'=>$slug_id,

   ]);

    DB::table('add_blog')->insert([

      'blog_title'       => $blog_title,
      'blog_slug'        => $blog_slug,
      'slug_id'          => $slug_id,
      'meta_title'       => $meta_title,
      'meta_keywords'    => $meta_keywords,
      'meta_description' => $meta_description,
      'u_email'          => $u_email,
      'u_name'           => $u_name,
      'user_type'        => $user_type,
      'category'         => $category,
      'thumbimg'         => $thumbimg,
      'banner_img'       => $banner_img,
      'blog'             => $blog,
    ]);
        $notification = array(
         'message' => 'Blog Add Successful',
         'alert-type' => 'success'
        );
      return redirect()->route('admin.add_blog')->with($notification);
   }
    //blog close
   
    //add services
    public function service()
    {
        $services = DB::table('add_services')->get();
        return view('admin/services/services', ['services' => $services]);
    }

    public function addservice()
    {
        return view('admin/services/add_service');
    }
      public function addnewservice(Request $req)
      {
        $service_name    = $req->service_name;
        $service_slug    = $req->service_slug;
        $filter_status   = $req->filter_status;
        $meta_title      = $req->meta_title;
        $meta_keywords   = $req->meta_keywords;
        $meta_description = $req->meta_description;
        $banner_image     = $req->file('banner_image');
        $og_image         = $req->file('og_image');

        $banner_image = time() . '.' . $req->banner_image->getClientOriginalExtension();
        $req->banner_image->move(public_path('services/banner_image'), $banner_image);

        $og_image = time() . '.' . $req->og_image->getClientOriginalExtension();
        $req->og_image->move(public_path('services/omg_image'), $og_image);

        DB::table('add_services')->insert([

            'service_name'      => $service_name,
            'slug'              => $service_slug,
            'services_name'     => $filter_status,
            'meta_title'        => $meta_title,
            'meta_keyword'      => $meta_keywords,
            'meta_descripstion' => $meta_description,
            'banner_image'      => $banner_image,
            'omg_image'         => $og_image,
        ]);

        $notification = array(
            'message' => 'Services Add Successful',
            'alert-type' => 'success'
           );
         return redirect()->route('admin.add_service')->with($notification);


      }

      public function editservices($id)
      {
         $services = DB::table('add_services')->where('id',$id)->first();
        return view('admin/services/edit_service', ['services' => $services]);
      }

      public function deliteservice($id)
      {
        $blog = DB::table('add_services')->where('id', $id)->delete();
         $notification = array(
            'message' => 'Blog Delite Successful',
            'alert-type' => 'warning'
           );
         return redirect()->back()->with($notification);
      }

       public function savesating(Request $req)
       {

        $id              = $req->id;
        $service_name    = $req->service_name;
        $service_slug    = $req->service_slug;
        $services        = $req->services; 
        $meta_title      = $req->meta_title;
        $meta_keywords   = $req->meta_keywords;
        $meta_description = $req->meta_description;
        $banner_image     = $req->file('banner_image');
        $og_image         = $req->file('og_image');
        $status           = $req->status;

        if ($banner_image) 
        {
        $banner_image = time() . '.' . $req->$banner_image->getClientOriginalExtension();
        $req->banner_image->move(public_path('services/banner_image'), $banner_image);
        }else
        {
         $banner_image = $req->old_image;
        }

        if ($og_image) 
        {
        $og_image = time() . '.' . $req->$og_image->getClientOriginalExtension();
        $req->og_image->move(public_path('services/banner_image'), $og_image);
        }
        else
        {
        $og_image = $req->oldomg_image;
        }

        DB::table('add_services')->where('id', $id)->update([

           'service_name'     => $service_name,
           'slug'             => $service_slug,
           'services_name'    => $services,
           'meta_title'       => $meta_title,
           'meta_keyword'     =>  $meta_keywords,
           'meta_descripstion'=> $meta_description,
           'banner_image'     => $banner_image,
           'omg_image'        => $og_image,
           'status'           => $status,

        ]);

        $notification = array(
            'message' => 'Services Edit Successful',
            'alert-type' => 'success'
           );
         return redirect()->back()->with($notification);

       }

    // close services

    public function categury()
    {
        $category = DB::table('add_catgury')->get();
        return view('admin/categury/category', ['category' => $category]);
    }

    public function addcategury()
    {
        return view('admin/categury/add_category');
    }

    public function catgurysave(Request $req)
    {
        $cate_name        = $req->cate_name;
        $cate_slug        = $req->cate_slug;
        $category         = $req->category;
        $meta_title       = $req->meta_title;
        $meta_keywords    = $req->meta_keywords;
        $meta_description = $req->meta_description;
        $banner_img       = $req->file('banner_img');
        $og_image         = $req->file('og_image');

        $banner_img  = time() . '.' . $req->banner_img->getClientOriginalExtension();
        $req->banner_img->move(public_path('category/banner_image'),$banner_img);

        $og_image  = time() . '.' . $req->og_image->getClientOriginalExtension();
        $req->og_image->move(public_path('category/omg_image'), $og_image);

        DB::table('add_catgury')->insert([

            'Category_Name'    => $cate_name,
            'slug'             => $cate_slug,
            'categories'       => $category,
            'meta_title'       => $meta_title,
            'meta_keywords'    => $meta_keywords,
            'meta_description' => $meta_description,
            'baneer_image'     => $banner_img,
            'omg_image'        => $og_image,

        ]);
         $notification = array(
            'message' => 'Category Add Successful',
            'alert-type' => 'success'
           );
         return redirect()->back()->with($notification);
    }

    public function editctagury()
    {
        return view('admin/categury/edit_category');
    }

    public function catdelited($id)
    {
         $blog = DB::table('add_catgury')->where('id', $id)->delete();
         $notification = array(
            'message' => 'Blog Delite Successful',
            'alert-type' => 'warning'
           );
         return redirect()->back()->with($notification);
    }


    public function serch()
    {
        $data=DB::table('search')->orderBy('id', 'DESC')->get();
        return view('admin/serch/serch')->with('data',$data);
    }

    public function delete_search(Request $request)
    {  
        DB::table('search')->where('id',  $request->delete)->delete();
        return redirect()->back()->with('message','Record Deleted Successfully');
    }


    public function contctlist()
    {
        $data = DB::table('contect')->orderBy('id', 'DESC')->get();
        return view ('admin/contact/contact_list')->with('contact_list_data', $data);
    }

    public function contctlist_view($id)
    {
        $data = DB::table('contect')->where('id', $id)->first();
        return view ('admin/contact/contact_view')->with('contact_list_view', $data);
    }

    public function contctlist_del($id)
    {
        DB::table('contect')->where('id', $id)->delete();
        return redirect()->back()->with('message', "Successfully delete.");
    }


    public function enquery()
    {
        $equey = DB::table('online_query')->get();
        return view('admin/enqury/enquiry_list', ['equey' => $equey]);
    }

    public function sidebar_enquiry_list()
    {
        $equey = DB::table('sidebar_enquiry')->get();
        return view('admin/enqury/sidebar_enquiry_list', ['equey' => $equey]);
    }

    public function bottom_enquiry_list()
    {
        $equey = DB::table('bottom_enquiry')->get();
        return view('admin/enqury/bottom_enquiry_list', ['equey' => $equey]);
    }

    public function sidebar_enquiry(Request $req)
    {
        $name   = $req->name;
        $course = $req->course;
        $city   = $req->city;
        $number = $req->number;

        DB::table('sidebar_enquiry')->insert([
            'name'      => $name,
            'course'    => $course,
            'city'      => $city,
            'phone'     => $number,
        ]);
        return redirect()->back()->with('message','Your Query Successfully');
    }

    public function bottom_enquiry(Request $req)
    {
        $name   = $req->name;
        $course = $req->course;
        $city   = $req->city;
        $number = $req->number;

        DB::table('bottom_enquiry')->insert([
            'name'      => $name,
            'course'    => $course,
            'city'      => $city,
            'phone'     => $number,
        ]);
        return redirect()->back()->with('message','Your Query Successfully');
    }

    public function del_sidebar_enquiry($id)
    {
        DB::table('sidebar_enquiry')->where('id', $id)->delete();
        return redirect()->back()->with('message','Robots Update Successfully');
    }

    public function del_bottom_enquiry($id)
    {
        DB::table('bottom_enquiry')->where('id', $id)->delete();
        return redirect()->back()->with('message','Robots Update Successfully');
    }
    
    public function delitonline($id)
    {
        DB::table('online_query')->where('id', $id)->delete();
        return redirect()->back()->with('message','Robots Update Successfully');
    }

    public function callback()
    {
        $callback = DB::table('query')->get();
        return view('admin/callback/call_back_list', ['callback' => $callback]);
        
    }

    public function query(Request $req)
    {
        $name  = $req->name;
        $number = $req->number;
        $course = $req->course;

        DB::table('query')->insert([

            'name' => $name,
            'phone' => $number,
            'course' =>$course,
        ]);
        return redirect()->back()->with('message','Robots Update Successfully');
    }
    
    public function home_query(Request $req)
    {
        $name  = $req->name;
        $number = $req->number;
        $course = $req->city;
        $course = $req->course;

        DB::table('home_query')->insert([

            'name' => $name,
            'phone' => $number,
            'city' => $city,
            'course' =>$course,
        ]);
        
    }
    public function delite($id)
    {
        DB::table('query')->where('id', $id)->delete();
        return redirect()->back()->with('message','Robots Update Successfully');

    }



    public function online()
    {
        $online = DB::table('online_register')->get();
        return view('admin/online/online_registration', ['online' => $online]);
    }

    public function saveonline(Request $req)
    {
       $course             =     $req->course;
       $c_name             =     $req->c_name;
       $fa_name            =     $req->fa_name;
       $mother_name        =     $req->mother_name;
       $number             =     $req->number;
       $email              =     $req->email;
       $dob                =     $req->dob;
       $corr_address       =     $req->corr_address;
       $per_address        =     $req->per_address;
       $city               =     $req->city;
       $pincode            =     $req->pincode;
       $state              =     $req->state;
       $qualification      =     $req->qualification;
       $board              =     $req->board;
       $percentage         =     $req->percentage;
       $passing_year       =     $req->passing_year;
       $medium             =     $req->medium;
       $currency           =     $req->currency;
       $reg_amount         =     $req->reg_amount;


       DB::table('online_register')->insert([

        'course'               =>  $course,
        'user_name'            =>  $c_name,
        'f_name'               =>  $fa_name,
        'm_name'               =>  $mother_name,
        'mobile'               =>  $number,
        'email'                =>  $email,
        'date'                 =>  $dob,
        'crosspons_address'    =>  $corr_address,
        'parmnet_address'      =>  $per_address,
        'city'                 =>  $city,
        'pin_code'             =>  $pincode,
        'state'                =>  $state,
        'qualification'        =>  $qualification,
        'borad_name'           =>  $board,
        'parentage'            =>  $percentage,
        'passing_year'         =>  $passing_year,
        'medium'               =>  $medium,
        'inr'                  =>  $currency,
        'fees'                 =>  $reg_amount,
       ]);

       return redirect()->route('registration-successfully')->with('success', 'Webmaster Updates Updated successfully.');

    }

    public function view($id)
    {   
        $view = DB::table('online_register')->where('id', $id)->first();
        return view('admin/online/view_registration',['view' => $view]);
    }

    public function registedel($id)
    {
        DB::table('online_register')->where('id', $id)->delete();
        return redirect()->back()->with('message','Robots Update Successfully');
    }



    public function feepay()
    {
        $pay = DB::table('fees_pay')->get();
        return view('admin/inline_fess/online_fee_pay', ['pay' => $pay]);
        
    }

    public function fesspay(Request $req)
    {
       $name           = $req->name;
       $email          = $req->email;
       $mobile_no      = $req->mobile_no;
       $address        = $req->address;
       $course         = $req->course;
       $inr            = $req->inr;
       $payable_amount = $req->payable_amount;
       $message        = $req->message;

       DB::table('fees_pay')->insert([

        'name'    => $name,
        'email'   => $email,
        'phone'   => $mobile_no,
        'address' => $address,
        'course'  => $course,
        'currency' => $inr,
        'fess'     => $payable_amount,
        'massage'  => $message,
       ]);
       return redirect()->back()->with('message','PAYMENT  Successfully');
    }



    public function vewpament($id)
    {
        $detls = DB::table('fees_pay')->where('id', $id)->first();
        return view('admin/inline_fess/view_payment',['detls' => $detls]);
       
    }

    public function delfess($id)
    {
        DB::table('fees_pay')->where('id', $id)->delete();
        return redirect()->back()->with('message','Robots Update Successfully');
    }

    public function contect(Request $req)
    {

        $req->validate([
            'name'=>'required',
            'email'  => 'required',
            'number'  => 'required',
            'subject' =>'required',
            'message'  => 'required',
        ]);

        DB::table('contect')->insert([

            'name'  => $req->name,
            'email' => $req->email,
            'phone' => $req->number,
            'subject' => $req->subject,
            'massage' => $req->message
        ]);
        return redirect()->back()->with('message','Successfully Submit.');
    }


    public function scuss()
    {
        return view('registration-successfully');
    }


   public function users()
   {
    $user=DB::table('users')->get();
       return view('admin/users/users',['user'=>$user]);
   }

   public function adduser()
   {
    return view('admin/users/add_user');
   }

   public function saveuser(Request $request)
   {
    $permission  = $request->permission;
    $permission  = implode(', ', $permission);
    DB::table('users')->insert([
        'name'         => $request->f_name,
        'last_name'           => $request->l_name,
        'email'           => $request->email,
        'password'        => Hash::make($request->password),
        'page_permission'        => $permission,
        'role'        => $request->role,
       ]);

        $notification = array(
             'message' => 'User Added Successful',
             'alert-type' => 'success'
            );
        return redirect()->route('admin.users')->with($notification);
   }

   public function userdelete($id)
   {
    DB::table('users')->where('id',$id)->delete();
    $notification = array(
        'message' => 'User Deleted Successful',
        'alert-type' => 'warning'
       );
    return redirect()->route('admin.users')->with($notification);
   }

   public function edituser($id)
   {
    $user_edit=DB::table('users')->where('id',$id)->first();
    return view('admin/users/edit_user',['user_edit'=>$user_edit]);

  }

  public function userupdate(Request $request)
  {
   $permission  = $request->permission;
   $permission  = implode(', ', $permission);
   DB::table('users')->where('id',$request->id)->update([
       'name'         => $request->f_name,
       'last_name'           => $request->l_name,
       'email'           => $request->email,
       'password'        => Hash::make($request->password),
       'page_permission'        => $permission,
       'role'        => $request->role,
       'ip_address'        => $request->access_ip,
       'status'        =>$request->status,
    
      ]);

       $notification = array(
            'message' => 'User Updated Successful',
            'alert-type' => 'success'
           );
       return redirect()->route('admin.users')->with($notification);
  }

}