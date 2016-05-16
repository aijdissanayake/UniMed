<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AssistantController extends Controller
{
    public function home() {
        return view('assistant.index');
    }
    
    public function viewFinTab() {
        return view('assistant.finance');
    }
    
    public function viewInvTab() {
        return view('assistant.index');
    }
    
    public function viewLabTab() {
        return view('assistant.lab');
    }
}
