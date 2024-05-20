<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    // public function logout(Request $request)
    // {
    //     Auth::logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return redirect('/login');
    // }

    public function logout(Request $request)
    {
        $user = Auth::user();
        $user->tokens()->delete(); 
        
        return response()->json(['message' => 'Logged out successfully']);
    }
}
