<?
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $user = auth()->user(); // Mengambil pengguna yang sedang login

        return view('user.show', ['user' => $user]);
    }
}
