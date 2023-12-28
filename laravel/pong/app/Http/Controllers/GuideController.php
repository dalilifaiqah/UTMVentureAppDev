<?

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function index(Request $request)
    {
        // Controller logic
        return view('guide');
    }
}