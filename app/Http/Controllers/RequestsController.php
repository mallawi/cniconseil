<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestsController extends Controller
{
    public function form($type)
    {
        // $formBuild = $this->$formBuilder->create(app\Forms\AcheterForm::class);

        $formType = "forms." . $type;

        // return view($formType, compact("form"));
        return view($formType);
    }
}
