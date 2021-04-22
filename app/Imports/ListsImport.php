<?php

namespace App\Imports;


use App\List_Electoral;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class ListsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new List_Electoral([
            'nom_liste' => $row['nom_liste'],
            'nb_voix' => $row['nb_voix'],
            'siege_complimentaire' => $row['siege_complimentaire'],
            'version_actuelle' => $row['version_actuelle'],
        ]);


    }
}
