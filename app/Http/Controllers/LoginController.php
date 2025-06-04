<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
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

        if ($user && \Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();

            // TODO: Ganti dengan view admin
            if ($user->role == 'admin') {
                return response()->json([
                    'message' => 'berhasil login',
                    'role' => $user->role,
                    'name' => $user->name,
                ]);
            }
            // TODO: Ganti dengan view staf
            elseif ($user->role == 'staf') {
                return response()->json([
                    'message' => 'berhasil login',
                    'role' => $user->role,
                    'name' => $user->name,
                ]);
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

        return redirect('/login');
    }
}
