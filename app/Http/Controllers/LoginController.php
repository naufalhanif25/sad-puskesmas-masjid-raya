<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            if (Session::has('admin_logged_in')) {
                return redirect('/dashboard');
            }
            elseif(Session::has('staff_logged_in')) {
                return redirect('/dokter');
            }
        }
        
        return view('login');
    }

    public function login(Request $request)
    {
        $messages = [
            'role.required' => 'Role belum dipilih. Silahkan coba lagi.',
            'nip.required' => 'NIP tidak boleh kosong. Silahkan coba lagi.',
            'password.required' => 'Password tidak boleh kosong. Silahkan coba lagi.',
        ];

        $credentials = $request->validate([
            'role' => 'required|in:admin,staf',
            'nip' => 'required|string',
            'password' => 'required|string',
        ], $messages);

        $user = \App\Models\User::where('nip', $credentials['nip'])
            ->where('role', $credentials['role'])
            ->first();

        if (auth()->check()) {
            if (Session::has('admin_logged_in')) {
                return redirect('/dashboard');
            }
            elseif(Session::has('staff_logged_in')) {
                return redirect('/dokter');
            }
        }

        if ($user && \Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();

            if ($user->role == 'admin') {
                Session::put('admin_logged_in', true);

                return view('dashboard');
            }
            elseif ($user->role == 'staf') {
                Session::put('staff_logged_in', true);

                return view('dokter');
            }
            else {
                redirect("/")->withErrors(['role' => 'Role tidak valid. Silahkan coba lagi.']);
            }
        }

        return redirect("/")->withErrors(['nip' => 'NIP atau password salah. Silahkan coba lagi.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        if (Session::has('admin_logged_in')) {
            Session::forget('admin_logged_in');
        }
        elseif (Session::has('staff_logged_in')) {
            Session::forget('staff_logged_in');
        }

        return redirect('/');
    }
}
