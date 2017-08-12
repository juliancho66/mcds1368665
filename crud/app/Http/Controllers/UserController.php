<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        //para ver la coleccion de datos
        //dd($users);
        //var_dump($users);
        //enviar datos  a una vista
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //dd($request);

        if ($request->hasfile('photo')) {
            $file = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('photos'), $file);
        }

        $user           = new User;
        $user->name     = $request->get('name');
        $user->email    = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->role     = $request->get('role');
        $user->photo    = 'photos/' . $file;

        if ($user->save()) {
            return redirect('user')->with('status', 'Usuario ' . $user->name . '
                Adicionado con exito!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usr = User::find($id);
        return view('users.show')->with('usr', $usr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illumi
    nate\Http\Response
     */
    public function edit($id)
    {
        $usr = User::find($id);
        return view('users.edit')->with('usr', $usr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {

        $usr        = User::find($id);
        $usr->name  = $request->get('name');
        $usr->email = $request->get('email');
        $usr->role  = $request->get('role');
        if ($request->hasfile('photo')) {
            $file = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('photos'), $file);
            $usr->photo = 'photos/' . $file;
        }

        // $user->photo = 'photos/'.$file;

        if ($usr->save()) {
            return redirect('user')->with('status', ' Usuario ' . $usr->name . ' Modificado con exito!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usr = User::find($id);
        if ($usr->delete()) {
            return redirect('user')->with('status', 'Usuario ' .$usr->name. ' Eliminado con exito!');
        }
    }


    public function checkmail(Request $request){
       $check = User::where('email','=', $request->get('email'))->count();

       if ($check > 0){
           echo 'not ok'; 
       }else{
            echo 'ok';
       }
       

   }   

}
