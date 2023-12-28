<?

// File: app/Http/Controllers/EventsController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

class EventsController extends Controller
{
    public function index(Request $request)
    {
        // Your controller logic here
        return view('events');
    }
}
