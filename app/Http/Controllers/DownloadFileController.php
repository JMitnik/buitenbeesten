<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DownloadFileController extends Controller
{
    //
    public function beleidsplan() {
        return response()->download('../storage/app/public/files/Beleidsplan_Buitenbeesten.pdf');
    }

    public function begroting() {
        return response()->download('../storage/app/public/files/Begroting_Buitenbeesten.xlsx');
    }
}
