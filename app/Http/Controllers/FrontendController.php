<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

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
        $items=Item::orderBy('id','desc')
            ->take(6)
            ->get();
    	
    	return view('frontend.item1',compact('items'));
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
}
