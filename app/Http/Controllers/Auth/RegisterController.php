<?php

namespace App\Http\Controllers\Auth;


use App\User;
use Validator;
use App\Course;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Controller;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/students';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $pswd = $data['password'];
        var_dump($pswd);

        // course_name으로 검색결과 나중에 해봐야지
        // $course_id = Users::where('name', '=', $data['course_name'])->first().id;

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'uid' => $data['uid'],
            // 'course_id' => $course['id'],
        ]);

        $course = Course::create([
          'name'=>$data['course_name'],
          'user_id'=>$user['id'],
        ]);
        $user['course_id'] = $course['id'];

        return $user;
    }
}
