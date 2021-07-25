<?php

namespace App\Imports;

use App\Models\Kontrak;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class KontrakImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Kontrak([
            'supplier' => $row[1],
            'po_direct' => $row[2],
            'kontrak_direct' => $row[3],
            'po_timbang' => $row[4],
            'kontrak_timbang' => $row[5],
        ]);
    }
}
