<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin\Serie;

class SerieController extends Controller
{
    public function show($id) {
        $serie = Serie::findOrFail($id);
        return view('admin.series.castings.show')->withSerie($serie);
    }
}
