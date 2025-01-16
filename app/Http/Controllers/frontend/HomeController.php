<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage(){
        $allService = Service::where('status', 1)->orderBy('id', 'desc')->get();
        
        return view('frontend.index', compact('allService'));
    }

    public function servicePage(){
        $allService = Service::where('status', 1)->orderBy('id', 'desc')->get();
        return view('frontend.service', compact('allService'));
    }

    public function serviceDetailsPage($slug){

        $serviceContent = Service::where('slug', $slug)->firstOrFail();
        $allService = Service::where('status', 1)->orderBy('id', 'desc')->get();
        // return $allService;
        return view('frontend.service-details', compact('serviceContent', 'allService'));
    }

    public function aboutPage(){
        $allService = Service::where('status', 1)->orderBy('id', 'desc')->get();
        return view('frontend.about', compact('allService'));
    }

    public function blogPage(){
        $allService = Service::where('status', 1)->orderBy('id', 'desc')->get();
        return view('frontend.blog', compact('allService'));
    }

    public function blogDetailsPage(){
        $allService = Service::where('status', 1)->orderBy('id', 'desc')->get();
        return view('frontend.blog-details', compact('allService'));
    }

    public function blogDetailsPage2(){
        $allService = Service::where('status', 1)->orderBy('id', 'desc')->get();
        return view('frontend.blog-details2', compact('allService'));
    }

    public function blogDetailsPage3(){
        $allService = Service::where('status', 1)->orderBy('id', 'desc')->get();
        return view('frontend.blog-details3', compact('allService'));
    }

    public function contactPage(){
        $allService = Service::where('status', 1)->orderBy('id', 'desc')->get();
        return view('frontend.contact', compact('allService'));
    }

    public function teamPage(){
        $allService = Service::where('status', 1)->orderBy('id', 'desc')->get();
        return view('frontend.team', compact('allService'));
    }

    public function qaPage(){
        $allService = Service::where('status', 1)->orderBy('id', 'desc')->get();
        return view('frontend.qa', compact('allService'));
    }

    public function case_studay_details(){
        $allService = Service::where('status', 1)->orderBy('id', 'desc')->get();
        return view('frontend.case-study-details', compact('allService'));
    }

}

