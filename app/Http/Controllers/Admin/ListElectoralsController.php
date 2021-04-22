<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\List_Electoral;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ListsImport;
use App\Exports\ListsExport;
use App\Donnees;
use Illuminate\Support\Facades\DB;

class ListElectoralsController extends Controller
{
    //

    public  function liste_electorals()
    {
       $lists = List_Electoral::all();
       $listsdonnes = Donnees::all();


       //apporter total de voix  à partie BD
        $editeurs =Donnees::select('Total_Voix_List')->get();
        foreach ($editeurs as $editeur) {

        }


        $editeurss =Donnees::select('Total_Voix')->get();
        foreach ($editeurss as $editeurs) {
       //   echo $editeurs;
        }


        $nbr_nb_voix=List_Electoral::select('nb_voix')->get();
        foreach ($nbr_nb_voix as $nbr_nb_voixx) {
            //   echo $editeurs;
        }


        // la somme des nb_voix à partire BD
        $total_voix = DB::table('list__electorals')
            ->sum('nb_voix');


//calcule de total de voix:
        //$listsdonnes->Total_Voix = $editeurs;
        foreach ($listsdonnes as $listsdonne) {
           $listsdonne->Total_Voix= $total_voix;
            $listsdonne->save();
        }




//calcule de pourcentage :
     foreach ($lists as $list) {
         $list->pourcentage = ($list->nb_voix/$editeur->Total_Voix_List)*100;
// echo($list->pourcentage);
          $list->save();
      }



// calcule de total_voix_siege:
        foreach ($listsdonnes as $listsdonne) {
            $listsdonne->Total_Voix_Siege = $total_voix/$listsdonne->nbr_sieges;

           // echo $listsdonne->Total_Voix_Siege;
            $listsdonne->save();
        }

//calculer le nombre de siege obtenue
        foreach ($lists as $list) {
            $list->nbr_siege_obtenu = $list->nb_voix/($total_voix/$listsdonne->nbr_sieges);
        //    echo($list->nbr_siege_obtenu);
            $list->save();

        }


//calculer version propossé
        foreach ($lists as $listss) {
            $listss->version_proposee = (int)$listss->nbr_siege_obtenu + $listss->siege_complimentaire;
         //      echo( (int)$listss->nbr_siege_obtenu);
            $listss->save();

        }




//calculer nbr_voix_siege
        foreach ($listsdonnes as $listsdonne) {
            $listsdonne->nbr_voix_siege = $listsdonne->Total_Voix_List /$listsdonne->nbr_sieges;
            //     echo($listsdonne->nbr_voix_siege);
            $listsdonne->save();

        }

// la somme des version_proposee à partire BD
        $total_version_proposee = DB::table('list__electorals')
            ->sum('version_proposee');


// la somme des version_actuelle à partire BD
        $total_version_actuelle = DB::table('list__electorals')
            ->sum('version_actuelle');

// la somme des version_actuelle à partire BD
        $total_siege_complimentaire = DB::table('list__electorals')
            ->sum('siege_complimentaire');


// la somme des quotion_electorel à partire BD
        $total_quotion_electoral = DB::table('list__electorals')
            ->sum('quotion_electoral');


// la somme des reste_electorel à partire BD
        $total_reste_electoral = DB::table('list__electorals')
            ->sum('reste_electoral');



//calcule de quotion electoral  :
       foreach ($lists as $list) {
            $list->quotion_electoral =(int)($list->nb_voix/$listsdonne->nbr_voix_siege);
 //   echo($list->quotion_electoral);
           $list->save();
      }



//calculer reste  electoral:
        foreach ($lists as $listss) {
          $listss->reste_electoral =$listss->version_actuelle - $listss->quotion_electoral;
            //     echo($listss->reste_electoral);
           $listss->save();

       }


        foreach ($listsdonnes as $listsdonne) {
            $listsdonne->total_version_proposee= $total_version_proposee;
            $listsdonne->total_version_actuelle= $total_version_actuelle;
            $listsdonne->total_siege_complimentaire=$total_siege_complimentaire;
            $listsdonne->total_quotion_electoral=$total_quotion_electoral ;
            $listsdonne->total_reste_electoral=$total_reste_electoral;
            $listsdonne->save();
        }





















        return view('liste_electorals',compact('lists','listsdonnes','editeur','total_voix'));

    }



    public function importlists(Request $request)
    {
     //   return $request->file;
     $request->validate([
         'file' => 'required' ,

     ]);
      Excel::import(new ListsImport, $request->file('file'));
      return back();


    }

    public function exportlists()
    {

      return Excel::download(new ListsExport, 'Classeur1.csv');

    }
}
