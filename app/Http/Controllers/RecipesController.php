<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index()
    {
        return Recipe::all();
    }
}
