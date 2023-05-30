<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\character;

class CharacterController extends Controller
{
    public function GetData() {
        
        $characters = Character::get();

        return view('home', compact(['characters']));
    }
}
