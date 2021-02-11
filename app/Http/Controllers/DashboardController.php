<?php

namespace App\Http\Controllers;

use App\Entities\User;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Auth;

class DashboardController extends Controller
{

  private $repository;
  private $validator;



  public function __contruct(UserRepository $repository, UseValidator $validator)
  {
    $this->$repository = $repository;
    $this->validator = $validator;
  }




  public function auth(Request $request)
  {
    $data = [
      'email'    => $request->get('username'),
      'password' => $request->get('password')
    ];

    try {

      if(env('PASSWORD_HASH')) {



        $is_auth = \Auth::attempt($data, false);

        if (!$is_auth)
          throw new \Exception("Email ou senha inválida");

      }
      else {


        $user = User::where('email', $request->get('username'))->first();

        if(!$user)
          throw new \Exception("E-mail informado inválido");

        if($user->password != $request->get('password'))
          throw new \Exception("A senha informada é inválida");

        \Auth::login($user);


      }

      return redirect()->route('user.dashboard');


    } catch (\Exception $e) {

        return $e->getMessage();
    }
  }




  public function index()
  {
    return view('user.dashboard');
  }
}
