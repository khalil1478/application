<?php

namespace App\Exports;

use App\Donnees;
use App\List_Electoral;
use Maatwebsite\Excel\Concerns\FromCollection;

class ListsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      return List_Electoral::all();
     return Donnees::all();
    }


}
