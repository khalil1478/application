<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function recherche(Request $request)
    {
$rech = $request->recherche;


 $users=User::where('name','like','%'.$rech.'%')
            ->orWhere('email','like','%'.$rech.'%')
            ->get();

       return view('admin.users.index')->with('users',$users);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $users=User::all();

            return view('admin.users.index')->with('users',$users);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user= User::create([
            'name' => $request->name,
            'email' =>$request->email,
            //creptage mdp
            'password' => Hash::make($request->password),
        ]);
        $role=Role::select('id')->where('name','utilisateur')->first();
        $user->roles()->attach($role);


        return redirect()->route('users.index');



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

     $roles = Role::all();
       return view('admin.users.edit',[
       'user' => $user,
       'roles' => $roles
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $user->roles()->sync($request->roles);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('users.index');
//dd($request->roles);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
$user->roles()->detach();
$user->delete();


return redirect()->route('users.index');

    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        return view('admin.users.test');
    }

    public function listequestionnaire()
    {

        $users= User::all();
       return view('admin.users.listequestionnaire')->with('users',$users);
    }


    public function consulterprofile()
    {
        $roles = Role::all();
        return view('consulterprofile')->with('roles',$roles);

    }

    public function modifierprofile(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if($user)
        {
          $user->name=$request->name;
          $user->email=$request->email;
          $user->password = Hash::make($request->password);

          $user->save();
            Auth::logout();
            return redirect('/login');

        }


    }




}
