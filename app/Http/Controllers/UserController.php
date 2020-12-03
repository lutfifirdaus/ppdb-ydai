<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        return view('user.daftar', ['user' => Auth::user()]);
    }

    /**
     * @param Request $request
     * @return
     */
    public function update(Request $request)
    {

        // dd($request);
        // Get current user
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $user->status = $request->status;

        // Save user to database
        $user->save();

        // Redirect to route
        if ($user->status == 4) {
            $user->assignRole('calon-sma');
            return redirect()->route('calon.sma');
        } elseif ($user->status == 3) {
            $user->assignRole('calon-smp');
            // return redirect()->route('calon.sma');
        } elseif ($user->status == 2) {
            $user->assignRole('calon-sd');
            // return redirect()->route('calon.sma');
        } elseif ($user->status == 1) {
            $user->assignRole('calon-sd');
            // return redirect()->route('calon.sma');
        } elseif ($user->status == 0) {
            return redirect()->route('calon.siswa');
        }
    }
}
