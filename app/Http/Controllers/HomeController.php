<?php

namespace App\Http\Controllers;

use App\Models\CarBD;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Affichage de la page pricipale c-a-d la page home
    public function homePage(){
        $CarBD = CarBD::orderByDesc('id')->get();
        return view('home', compact('CarBD'));
    }
// Ajouter de données
    public function addCar(Request $request){
        $car = new CarBD;
        $car->marque = $request->marque;
        $car->annee = $request->annee;
        $car->couleur = $request->couleur;
        $car->prix = $request->prix;
        $car->reduction = $request->reduction;
        $car->save();
        return redirect()->back();
    }
// Supprimer un row grace à son id
    public function del($id){
        $id=CarBD::find($id);
        $id->delete();
        return redirect()->back();
    }
// Affichage de l'id
    public function showId($id){
        $show =CarBD::find($id);
        return view('crudEdit',compact('show'));
    }
}
