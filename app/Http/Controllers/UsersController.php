<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Http\Session;

class UsersController extends Controller
{
    public function create()
    {
        $users = Users::all();
        return view('users.create', compact('users'));
    }

    /**
     * La función store permite guardar los usuarios en BD
     * 
     * El argurmento permite validar los datos antes de enviarlos al servidor
     */
    public function store(ItemCreateRequest $request) 
    {
        //Instanciar el modelo de BD 'users'
        $users = new Users;

        //Recibir datos del formulario para registrar nuevo usuario
        $users->first_name = $request->first_name;
        $users->last_name = $request->last_name;
        $users->email_address = $request->email_address;
        $users->username = $request->username;
        $users->password = $request->password;
        $users->birthdate = $request->birthdate;
        $users->phone = $request->phone;
        
        //Guardar datos en BD
        $users->save();

        //Realizar una redirección a la vista con mesanje
        return redirect('/')->with('message','Listones !');
    }

    /**
     * La función Index permite ver los usuarios registrados en la DB local 
     */
    public function index()
    {
        $users = Users::all();
        return view('index', compact('users')); 
    }

  
    public function update($idUser)
    {
        $users = Users::find($idUser);
        return view('update', ['users' => $users]); 
    }

    /**
    * La función update permite actualizar los  usuarios registrados en la DB local 
    */
    public function sdupdate($idUser)
    {


        $users = Users::find($idUser);

        $users->first_name = $request->first_name;
        $users->last_name = $request->last_name;
        $users->email_address = $request->email_address;
        $users->username = $request->username;
        $users->password = $request->password;
        $users->birthdate = $request->birthdate;
        $users->phone = $request->phone;

        $users->save();

        Session::flash('message', 'Editado Satisfactoriamente !');

    }

     
    public function delete(Request $respuesta)
    {
        $users = Users::find( $respuesta->idUser);
        
        Users::destroy($respuesta->idUser);
        return redirect('/users')->with('message','Listones  !');
    }


}
