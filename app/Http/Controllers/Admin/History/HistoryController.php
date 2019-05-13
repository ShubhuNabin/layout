<?php

namespace App\Http\Controllers\Admin\History;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    public function history() {

    	return view('admin.history');

    }
}
