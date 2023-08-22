<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\specification;

class SController extends Controller
{

    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "specification - Online Store";
        $viewData["subtitle"] =  "List of specifications";
        $viewData["specification"] = specification::all();
        return view('specification.index')->with("viewData", $viewData);
    }

    public function show(string $id) : View
    {
        $viewData = [];
        $specification = specification::findOrFail($id);
        $viewData["title"] = $specification["name"]." - Online Store";
        $viewData["subtitle"] =  $specification["name"]." - specification information";
        $viewData["specification"] = $specification;
        return view('specification.show')->with("viewData", $viewData);
    }

    
    public function create(): View

    {
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Create specification";

        return view('specification.create')->with("viewData",$viewData);
    }

    public function save(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            "Especificacion" => "required",
            "RAM" => "required",
            "CPU" => "required",
            "DiscoDuro" => "required",
            "TarjetaGrafica" => "required",
        ]);
        Product::create($request->only(["Especificacion","RAM", "CPU", "DiscoDuro", "TarjetGrafica"]));

        return back();

    }

}

