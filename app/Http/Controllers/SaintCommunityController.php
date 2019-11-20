<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaintCommunityController extends Controller
{
    //
    public function indexPage(){

        return view('saintcommunity-index.index');
    }


    public function aboutUsPage(){

        return view('saintcommunity-about.about');
    }

    public function locationPage(){

        return view('saintcommunity-location.location');
    }

    public function mediaPage(){

        return view('saintcommunity-media.media');
    }

    public function partnershipPage(){

        return view('saintcommunity-partnership.partnership');
    }

    public function eventPage(){

        return view('saintcommunity-event.event');
    }

    public function contactUsPage(){

        return view('saintcommunity-contact.contact');
    }
}
