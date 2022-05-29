<?php

namespace App\Modules\Login\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Modules\Login\Http\Requests\ApiUserRequest;
use App\Modules\Login\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    /**
     * @param UserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(UserRequest $request)
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')], true)) {

            return redirect()->route('dashboard.index');
        }
        return view('Login::login')->withErrors(trans('Login::validation.AuthDescription'));
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function profile()
    {
        return response()->json(['user' => User::find(Auth::user()->id)]);
    }

    /**
     * @param ApiUserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function ApiLogin(ApiUserRequest $request)
    {

        if (Auth::attempt(['email' => request('email'), 'password' => request('password')], true)) {

            $user = $request->user();
            return response()->json([
                'users' => User::find(Auth::user()->id),
                'access_token' => 'Bearer' . ' ' . $user->createToken('Laravel crm')->accessToken,
            ]);
        }
        return response()->json(['status' => 404, 'description' => trans('Login::validation.AuthDescription')], '404');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('loginLogin');
    }



}
