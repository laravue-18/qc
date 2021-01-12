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

    public function index(){
        $list = User::all();
        return view('admin.users.index')->with(compact('list'));
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){
        // $data = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|same:password_confirmation',
        // ]);
        // dd('hi');
        
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        
        // $code = base64_encode($data['email']);
        // $url = url('confirm/'.$code) ;

        // $to = $data['email'];

        // Mail::to($to)->send(new ConfirmMail($user));

        return redirect(route('admin.users.index'))->with('flash_message_success', 'Registered Successfully!');
    }

    public function show($id){
        $user = User::find($id);
        return view('admin.users.show')->with(compact('user'));
    }
    public function edit($id){
        $user = User::find($id);
        return view('admin.users.edit')->with(compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $data = $request->all();
        if($data['password'])
            $user->password = bcrypt($data['password']);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->admin = $data['admin'];
        $user->company = $data['company'];
        $user->buyer = $data['buyer'];
        $user->phone = $data['phone'];
        $user->designation = $data['designation'];
        $user->employee_id = $data['employee_id'];
        $user->factory = $data['factory'];
        $user->order = $data['order'];
        $user->style = $data['style'];
        $user->comment = $data['comment'];
        $user->status = $data['status'];
        $user->save();

        return redirect(route('admin.users.index'))->with('flash_message_success', 'Updated Successfully!');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect(route('admin.users.index'))->with('flash_message_success', 'Deleted Successfully!');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
