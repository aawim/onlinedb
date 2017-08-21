<?php

namespace App\Http\Controllers;
 use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use App\Brand;
use Toastr;
use Input;

class PagesController extends Controller
{

    use Notifiable;



    public function __construct()
    {
        $this->middleware('auth');
    }


     public function wishlist()
    {
        return view('pages.wish');
    }



   public function myaccount()
    {
        return view('pages.myaccount');
    }





     public function SBrands(Request $request)
    {
        
        
        $b = new Brand();
        $b->name = $request->BrandName;
        $b->Description = $request->Description;
          //$d->image_url = $request->image_file;
       
       
       
       
        $image_path = $request->file('image_file')->store('public');
        $save_path = str_replace('public','storage', $image_path);
        $b->image_url = $save_path;
        $b->save();


        
        return redirect()->route('CBrands');
  
    



 
    }




     public function CBrands()
    {
        return view('pages.admin.CreateBrand');
    }


     public function Brands()
    {
        return view('pages.admin.Brands');
    }


   public function Categories()
    {
        return view('pages.admin.Categories');
    }


   public function Items()
    {
        return view('pages.admin.Items');
    }


  public function Customers()
    {
        return view('pages.admin.Customers');
    }



}
