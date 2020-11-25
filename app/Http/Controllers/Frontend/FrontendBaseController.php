<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Faq;
use App\Model\Introduction;
use App\Model\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontendBaseController extends Controller
{
    protected function loadDataToView($view_path){
        View::composer($view_path, function ($view){
            $introductions = Introduction::where('status',1)->orderBy('created_at','desc')->limit(1)->get();
            $view->with('main_introduction',$introductions);

            $reviews = Review::where('status',1)->get();
            $view->with('main_review',$reviews);

            $categories = Category::where('status',1)->get();
            $view->with('main_category',$categories);

            $introductionMenu = Introduction::where('status',1)->get();
            $view->with('menu_introduction',$introductionMenu);

            $faqs = Faq::where('status',1)->get();
            $view->with('main_faq',$faqs);
        });
        return $view_path;
    }
}
