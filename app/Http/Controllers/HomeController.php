<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Formation;
use App\Models\Referentiel;
use App\Models\Type;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $formations = Formation::all();
        $referentiels = Referentiel::all();
        $types = Type::all();
        $nombre_femme = DB::table('candidats')->where("sexe", "=", "Femme")->count();
        $nombre_homme = DB::table('candidats')->where("sexe", "=", "Homme")->count();

        foreach ($formations as $formation) {
            $compteur_formation = DB::table('candidat_formations')->where("formation_id", "=", $formation->id)->count();
            $nombre_formation[] = $compteur_formation;
            $nom_formation[] = $formation->nom;
        }
        foreach ($referentiels as $referentiel) {
            $compteur_referentiel = DB::table('formations')
                ->where("referentiel_id", "=", $referentiel->id)->count();
            $nombre_referentiel[] = $compteur_referentiel;
            $nom_referentiel[] = $referentiel->libelle;
        }
        foreach ($types as $key) {
            $compteur_type = DB::table('referentiels')
                ->join('formations', 'referentiels.id', '=', 'formations.referentiel_id')
                ->where('type_id', '=', $key->id)->count();
            $nom_type[] = $key->libelle;
            $nombre_type[] = $compteur_type;
        }

        $ages = DB::select(DB::raw('select count(*) as total, age from candidats group by age'));
        $chaine_age = "";
        foreach ($ages as $key) {
            $chaine_age.= "['".$key->age."', ". $key->total."],";
        }
        $table_ages['chaine_age'] = rtrim($chaine_age,",");
       
        $graphique_nom = DB::select(DB::raw('select is_started from formations'));
        $nom_formations = DB::select(DB::raw('select nom from formations'));
        foreach ($nom_formations as $key) {
            $nom[]= $key->nom;
        }
        foreach ($graphique_nom as $key) {
            $chaine_nom[] = $key->is_started;
        }
        
        return view(
            'index',
            [
                'nom' => $nom,
                'chaine_age' => $chaine_age,
                'chaine_nom' => $chaine_nom,
                'nom_type' => $nom_type,
                'nombre_type' => $nombre_type,
                'nombre_femme' => $nombre_femme,
                'nombre_homme' => $nombre_homme,
                'nom_formation' => $nom_formation,
                'graphique_nom' => $graphique_nom,
                'nom_referentiel' => $nom_referentiel,
                'nombre_formation' => $nombre_formation,
                'nombre_referentiel' => $nombre_referentiel,
            ]
        );
    }
}