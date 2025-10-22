<?php

namespace App\Http\Controllers\Front;

class PageController
{
    public function about()
    {
        return view('front.page.about');
    }

    public function services()
    {
        return view('front.page.services');
    }

    public function contact()
    {
        return view('front.home.contact');
    }
}
