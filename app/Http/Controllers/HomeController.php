<?php

namespace App\Http\Controllers;

use App\Enums\StaticDataType;
use App\Motel;
use App\StaticData;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        $listCity = StaticData::Where("static_data_type", StaticDataType::CITY)->get();
        $listWard = StaticData::Where("static_data_type", StaticDataType::WARD)->get();
        $listConvenient = StaticData::Where("static_data_type", StaticDataType::CONVENIENT)->get();
        $motel_view = Motel::orderBy('view', 'desc')->take(3)->get();
        $motel_new = Motel::orderBy('created_at', 'desc')->take(3)->get();
        $motel_price = Motel::orderBy('price', 'asc')->take(3)->get();
        return view('home',
            [
                'listCity' => $listCity,
                'listWard' => $listWard,
                'listConvenient' => $listConvenient,
                'motel_views' => $motel_view,
                'motel_news' => $motel_new,
                'motel_prices' => $motel_price
            ]);
    }
}
