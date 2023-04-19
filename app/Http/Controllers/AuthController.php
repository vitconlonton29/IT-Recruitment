<?php

namespace App\Http\Controllers;

use App\Enums\UserRoleEnum;
use App\Http\Requests\Auth\RegisteringRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginning(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            return redirect()->route('applicant.welcome')
                ->withSuccess('Signed in');
        }


        return redirect()->route('login')->withSuccess('Login details are not valid');


    }
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function register()
    {
        return view('auth.register');

    }

    public function callback($provider)
    {
        $checkExists = true; //kiểm tra user đã login = github chưa
        $data = Socialite::driver($provider)->user();
        $user = User::query()
            ->where('email', $data->getEmail())
            ->first();

        //nếu chưa thì khởi tạo new User
        if (is_null($user)) {
            $user = new User();
            $user->email = $data->getEmail();
            $checkExists = false;
        }


        $user->name = $data->getName();
        $user->avatar = $data->getAvatar();
        $user->save();

        Auth::login($user);

        //nếu đã login = github rồi thì return về view phân quyền cho role
        if ($checkExists) {
            $role = strtolower(UserRoleEnum::getKeys($user->role)[0]);
            return redirect()->route($role . '.welcome');
        }

        //return về trang đăng ký role nếu chưa login= github bao giờ


        return redirect()->route('roleregister');


    }

    public function registering(RegisteringRequest $request)
    {
        $password = Hash::make($request->get('password'));
        $role = $request->get('role');


        $userCount = User::where('email',  $request->get('email'))->count();
//        dd($userCount);
        if ($userCount==0) {
            $user = User::create([
                'email' => $request->get('email'),
                'password' => $password,
                'name' => $request->get('name'),
                'role' => $role,
            ]);

            Auth::login($user);
            return redirect()->route($role.'.welcome');

        }
        else {
            return redirect(route('register'));
        }

    }

    public function roleRegister()
    {
        return view('auth.roleregister');
    }


    public function roleRegistering(Request $request)
    {


        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'role' => $request->get('role'),
        ]);
        dd(1);
        Auth::login($user);
        return redirect()->route($user->get('role') . '.welcome');
    }

    public function applicantWelcome()
    {
        return view('auth.applicant');
    }

    public function hrWelcome()
    {
        return view('auth.hr');
    }
}
