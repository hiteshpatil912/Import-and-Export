<?php

namespace App\Exports;

use App\Models\Oversea;
use Maatwebsite\Excel\Concerns\FromCollection;

class OverseasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Oversea::all();
    }
}
