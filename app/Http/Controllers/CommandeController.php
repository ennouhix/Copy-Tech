<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;

class CommandeController extends Controller
{
    public function store(Request $request)
    {
        $commande = new Commande;

        $commande->Professeur = $request->input('Professeur');
        $commande->Impression = $request->input('Impression');
        $commande->Filiere = $request->input('Filiere');
        $commande->NCopies = $request->input('NCopies');
        $commande->Format = $request->input('Format');
        $commande->Type = $request->input('Type');
        $commande->Couleur = $request->input('Couleur');
        $commande->TImpression = $request->input('TImpression');
        $commande->DateTime = $request->input('DateTime');
        // Assuming you want to store the file name in the database
        $commande->pdfFile = $request->file('pdfFile')->getClientOriginalName();
        $request->file('pdfFile')->storeAs('pdfs', $commande->pdfFile, 'public');

        $commande->save();

        return redirect()->back()->with('success', 'Commande soumise avec succès');
    }
}
