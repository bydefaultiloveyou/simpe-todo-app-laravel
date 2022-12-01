<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    return view('pages.home', [
      "lists" => Task::orderBy("id", "desc")->get()
    ]);
  }
}
