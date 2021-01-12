<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            if(auth()->user()->admin) return redirect('admin/dashboard');
            return redirect('home');
        }else{
            return redirect()->back()->with('flash_message_error', 'Invalid Username and Password!');
        }
    }

    public function indexAdmins(){
        $list = User::where('admin', true)->get();
        return view('admin.admins.index')->with(compact('list'));
    }

    public function createAdmin(){
        return view('admin.admins.create');
    }

    public function storeAdmin(Request $request){
        // $data = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|same:password_confirmation',
        // ]);
        // dd('hi');
        
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $data['admin'] = true;
        $user = User::create($data);
        
        // $code = base64_encode($data['email']);
        // $url = url('confirm/'.$code) ;

        // $to = $data['email'];

        // Mail::to($to)->send(new ConfirmMail($user));

        return redirect(route('admin.admins.index'))->with('flash_message_success', 'Registered Successfully!');
    }

    public function editAdmin($id){
        $user = User::find($id);
        return view('admin.admins.edit')->with(compact('user'));
    }

    public function updateAdmin(Request $request, $id){
        $user = User::find($id);
        $data = $request->all();
        $user->password = bcrypt($data['password']);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->save();

        return redirect(route('admin.admins.index'))->with('flash_message_success', 'Updated Successfully!');
    }

    public function destroyAdmin($id)
    {
        User::destroy($id);
        return redirect(route('admin.admins.index'))->with('flash_message_success', 'Deleted Successfully!');
    }

    
    public function indexUsers(){
        $list = User::where('admin', false)->get();
        return view('admin.users.index')->with(compact('list'));
    }

    public function createUser(){
        return view('admin.users.create');
    }

    public function storeUser(Request $request){
        // $data = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|same:password_confirmation',
        // ]);
        // dd('hi');
        
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $data['admin'] = true;
        $user = User::create($data);
        
        // $code = base64_encode($data['email']);
        // $url = url('confirm/'.$code) ;

        // $to = $data['email'];

        // Mail::to($to)->send(new ConfirmMail($user));

        return redirect(route('admin.users.index'))->with('flash_message_success', 'Registered Successfully!');
    }

    public function editUser($id){
        $user = User::find($id);
        return view('admin.users.edit')->with(compact('user'));
    }

    public function updateUser(Request $request, $id){
        $user = User::find($id);
        $data = $request->all();
        $user->password = bcrypt($data['password']);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->save();

        return redirect(route('admin.users.index'))->with('flash_message_success', 'Updated Successfully!');
    }

    public function destroyUser($id)
    {
        User::destroy($id);
        return redirect(route('admin.users.index'))->with('flash_message_success', 'Deleted Successfully!');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
