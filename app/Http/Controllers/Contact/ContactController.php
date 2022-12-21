<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Inertia\Inertia;
class ContactController extends Controller
{
    public function index(Request $request) {
        return Inertia::render('Contact/Index');
    }
}
