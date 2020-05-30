<?php

namespace App\Http\Controllers;
//use SEO;
use App\Series;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    /**
     * Show the welcome / landing page
     *
     * @return view
     */
    public function welcome() {
        //$this->setSeo('Solomon', 'THe best web development training');

        return view('welcome')->withSeries(Series::all());
    }

    /**
     * Show the series page
     *
     * @param Series $series
     * @return view
     */
    public function series(Series $series) {
        $this->setSeo($series->title, $series->description);

        return view('series')->withSeries($series);
    }

    /**
     * Show all the series
     *
     * @return view
     */
    public function showAllSeries() {
        return view('all-series')->withSeries(Series::all());
    }
}
