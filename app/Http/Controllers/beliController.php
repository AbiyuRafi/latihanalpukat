<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\Belis;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class beliController extends Controller
{
    function beli(){

        return view('prosesBeli');
        

    }
    function store(request $r){

        
$pesan = Belis::create($r->all());
if($pesan){
    session::flash('status', 'success');
    session::flash('pesan', ' ℹ  Yeyy  berhasil memesan alpukat');
}
return redirect('/beli');
        
        

    }
}
