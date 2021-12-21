<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Profile;
use DB;
use Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request) {
        if (!$request->email || !$request->password) {
            return back()->with('error', 'Enter email and password');
        }
        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            $password_is_correct = Hash::check($request->password, $user->password);
            if ($password_is_correct) {

                $request->session()->put('profileId', $user->profile->id);
                return redirect('game');
            }
        }
        return back()->with('error', 'Email or password is wrong');
    }

    public function createUser(Request $request) {
        $request->validate ([
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ]);
        if ($request->password != $request->password_repeat) {
            return back()->with('error', 'Passwords do not match');
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user -> save();
        if ($res) {
            $profile = new Profile();
            $profile->user_id = $user->id;
            $profile->save();
            $request->session()->put('profileId', $profile->id);
            return redirect('game');
        } else {
            return back()->with('error', 'Something wrong with the server');
        }
    }

    public function game() {
        $response = HTTP::get("https://random-word-form.herokuapp.com/random/noun");
        $word = $response->json()[0];
        Session::put('word', $word);
        $word_shuffled = str_shuffle($word);
        $profile_id = Session::get('profileId');
        $profile = Profile::where('id', '=', $profile_id) -> first();
        $current_score = $profile->score;
        return view('game', compact('word_shuffled', 'current_score'));
    }

    public function confirm(Request $request) {
        $word = Session::get('word');
        $profile_id = Session::get('profileId');
        $profile = Profile::find($profile_id);
        if (strcmp($request->guess, $word) == 0) {
            $profile->score += 1;
            $profile->save();
            return redirect('game');
        }
        else {
            return redirect('game');
        }
    }

    public function leaderboard() {
        $top_five = Profile::orderBy('score', 'desc')->take(5)->get();
        return view('leaderboard', compact('top_five'));
    }

    public function profile() {
        $profile = Profile::find(Session::get('profileId'));
        $score = $profile->score;
        $username = $profile->user->name;
        return view('profile', compact('score', 'username'));
    }

    public function logout() {
        if (Session::has('profileId')) {
            Session::pull('profileId');
            return redirect('/');
        }
    }

    public function deleteAccount() {
        if (Session::has('profileId')) {
            $profile_id = Session::get('profileId');
            $profile = Profile::find($profile_id); 
            $user = $profile->user;
            $user->delete();
            $profile->delete();
            Session::pull('profileId');
            return redirect('/');
        }
    }
}
