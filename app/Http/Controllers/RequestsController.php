<?php

namespace App\Http\Controllers;

use App\Acheter;

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

        // $lname = $formData["lname"]; 

        // $fArr = array();

        // foreach ($formData as $key => $value) {
        //     $fArr[$key] = $value;
        // }

        // $acheter = new Acheter;
        // $acheter->lname = $lname;

        $acheter = Acheter::create($formData);
        // $acheter->save();

        return $acheter;
    }
}
