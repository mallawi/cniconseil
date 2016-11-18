<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestsController extends Controller
{
    public function form($type)
    {
        $formType = "forms." . $type;

        return view($formType);
    }


    public function store(Request $request)
    {
        $formData = $request->all();

        return $formData;
    }
}
