<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Color;

class InvoicesExport implements FromCollection
{
    public function collection()
    {
        return Color::all();
    }
}