<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cin;
class UserController extends Controller
{
    public function index(){
        //$data=Cin::all();
        return view ('welcome');
    }

    public function show (){
        //$cin=Cin::all();
        return view('/sendForm');
    }

    public function store(){
        $record= new Cin();
        // error_log(request('prenom'));

         $record->nom=request('nom');
         $record->prenom=request('prenom');
         $record->email=request('email');
         $record->adresse=request('adresse');
         $record->ville=request('ville');
         $record->numero=request('numero');
         $record->commentaire=request('commentaire');
         $record->save();

       // error_log($record);
        return redirect('/')->with('msg','Formulaire envoyé avec success');
    }
    public function admin(){
     $data=Cin::all();
    return view('/admin',['datas'=>$data]);
    }

    public function create($id){
        $user=Cin::where('id', $id)->get();
        //error_log($user);
        return view('/detail',['id'=>$user]);
    }

    public function destroy ($id){
        $user=Cin::findOrFail($id);
        $user->delete();
        return redirect('/admin')->with('msg','Utilisateur supprimés avec success');

    }
}
