<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Item;
use App\Subcategory;

class FrontendController extends Controller
{
      public function home($value='')
    {
    	$items=Item::orderBy('id','desc')
    		->take(6)
    		->get();
    	// dd($items);
    	return view('frontend.home',compact('items'));
    }
      public function item1($value='')
    {
        $subcategories=Subcategory::orderBy('id','desc')
            ->take(3)
            ->get();
        
    	
    	return view('frontend.item1',compact('subcategories'));
    }
    public function detail($id)
    {   
        
    	$items=Item::orderBy('id','desc')
            ->take(6)
            ->get();
    	return view('frontend.detail',compact('items'));
    }
    public function register($value='')
    {
    	
    	return view('frontend.register');
    }
    public function login($value='')
    {
    	
    	return view('frontend.login');
    }
    public function checkout($value='')
    {
    	
    	return view('frontend.checkout');
    }
    public function profile($value='')
    {
    	
    	return view('frontend.profile');
    }
    public function getItems(Request $request)
    {
        $sid=$request->sid;
        if($sid==0){
            $items=Item::all();
    
        }
        else{
        $items=Subcategory::find($sid)->items;
    }
    return $items;
}
}
