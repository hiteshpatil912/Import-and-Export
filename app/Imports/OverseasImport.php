<?php

namespace App\Imports;

use App\Models\Oversea;
use Maatwebsite\Excel\Concerns\ToModel;

class OverseasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Oversea([
            'series_Refreance' =>  $row[0],
            'period' => $row[1],
            'data_Value' => $row[2],
            'status' => $row[3],
            'units' => $row[4],
            'magntude' => $row[5],
            'subject' => $row[6],
            'group' => $row[7],
            'series_Title_1' => $row[8],
            'series_Title_2' => $row[9],
            'series_Title_3' => $row[10],
            'series_title_4' => $row[11],
            'series_title_5' => $row[12]
        ]);
    }
}