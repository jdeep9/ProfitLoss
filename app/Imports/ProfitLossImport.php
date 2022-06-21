<?php

namespace App\Imports;

use App\ProfitLoss;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProfitLossImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        dd($row);
        return new ProfitLoss([
            //
            'month_year' => $row['Month/Year'],
            'Qty' => $row['Qty'],
            'Total' => $row['Total'],
            'Rate' => $row['Rate'],
            'Type' => $row['Type'],
        ]);
    }
}
