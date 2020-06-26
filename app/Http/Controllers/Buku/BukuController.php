<?php

namespace App\Http\Controllers\Buku;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;

class BukuController extends Controller
{

    public function show()
    {    
        return view('buku.buku');      
    	 
    }

}
