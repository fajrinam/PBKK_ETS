<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class RekamMedisController extends Controller
{
    public function index()
    {
        return view('rekam-medis');
    }
}