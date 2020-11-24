<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Faq;
use App\Model\Introduction;
use App\Model\Product;
use App\Model\Review;
use App\Model\Subcategory;
use Illuminate\Http\Request;

class FrontendController extends FrontendBaseController
{
    function index(){
        $data['introductions'] = Introduction::all();
        $data['reviews'] = Review::all();
        $data['faqs'] = Faq::all();
        return view($this->loadDataToView('frontend.frontend.index'),compact('data'));
    }
    function resume($slug){
        $data['introductions'] = Introduction::where('slug',$slug)->first();
        $data['reviews'] = Review::all();
        $data['faqs'] = Faq::all();
        return view($this->loadDataToView('frontend.frontend.resume'),compact('data'));
    }
    function list(){
        $data['introductions'] = Introduction::all();
        $data['reviews'] = Review::all();
        $data['faqs'] = Faq::all();
        return view($this->loadDataToView('frontend.frontend.list'),compact('data'));
    }
}
