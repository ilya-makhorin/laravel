<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = \Auth::user();

        $errors = [];

        if($request->isMethod('post')) {
            $password = $request->post('password');

            if(\Hash::check($request->post('current_password'), $user->password)){
                if($this->validate($request, $this->validateRules())){
                    $user->name = $request->post('name');
                    $user->email = $request->post('email');
                    if(!empty($password)) {
                        $user->password = \Hash::make($password);
                    }
                    $user->save();
                }
            } else {
                $errors['current_password'][] = 'Пароль указан неверно';
            }

            return redirect()->back()
                ->withErrors($errors)
                ->with('success', "Данные сохранены");
        }
        return view('update', ['user' => $user]);
    }


    public function validateRules()
    {
        return [
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'current_password' => 'required'
        ];
    }
    public function admin(){
        $user = DB::select('SELECT id ,name ,email,is_admin from users');
        return view('adminka',['user'=>$user]);
    }
    public function updateAdmin(User $user,Request $request){
        if($request->isMethod('post')){
            $user->fill($request->all());
            $user->save();
            return redirect()->back()
                ->with('success', "Данные сохранены");
        }
        return view('update',[
            'user'=>$user
        ]);
    }
    public function delete(User $user){
        $user->delete();
        return redirect()->route('adminka');
    }
   /* public function updateAdmin(Request $request,User $user){
        if($request->isMethod('post')){
            $user->fill($request->all());
            $user->save();
            return redirect()->route('adminka');
        }
        return view('update',[
            'user'=>$user,
            'rout'=>'profileAdmin',
            'title'=>'update'
        ]);
    }
   */

}
