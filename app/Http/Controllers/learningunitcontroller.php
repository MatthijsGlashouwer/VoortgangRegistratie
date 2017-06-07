<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tbllearningunit;
use Input;


class learningunitcontroller extends Controller
{
    public function index()
   {
   		return view('leereenheden.index');
   }

   public function create()
   {
   		return view('leereenheden.create');
   }

   public function view()
   {
   		$tbllearningunit = tbllearningunit::all();
   		/* $tbllearningunittitle = tbllearningunit::Title(); */
   		return view('leereenheden.view')->with('tbllearningunit',$tbllearningunit);

   }
   public function edit()
   {
   		return view('leereenheden.edit');

   }

}



