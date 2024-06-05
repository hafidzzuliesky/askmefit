<?php
namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;

            // Lakukan pengecekan tipe pengguna
            if ($userType === 'user') {
                // For user type, we may not need these variables, so let's set them as null
                $user = Auth::user();
                $userName = $user->name;

                return view('user.utama', compact('userName'))->with(['dashboard' => true]);
            } elseif ($userType === 'admin') {
                // Total feedback count
                $totalFeedback = Feedback::count();

                // Average rating
                $averageRating = Feedback::avg('rating');
                // For admin type, calculate the required variables
                $totalUsers = User::count();

                return view('admin.home', compact('totalFeedback', 'averageRating', 'totalUsers'))->with(['dashboard' => true]);
            } else {
                // Tipe pengguna tidak dikenali, mungkin ada kesalahan dalam pengaturan
                // Anda dapat menangani kasus ini sesuai dengan kebutuhan aplikasi Anda
                // Misalnya, mengarahkan ke halaman error atau melakukan tindakan lainnya
            }
        } else {
            // For non-authenticated users, we may not need these variables, so let's set them as null
            $totalUsers = null;

            return view('user.home', compact('totalUsers'))->with(['dashboard' => false]);
        }
    }
}
