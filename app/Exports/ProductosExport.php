<?php

namespace App\Exports;

use App\Models\Producto;
use Maatwebsite\Excel\Concerns\FromCollection;


class ProductosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Producto::select("id", "nombre", "price")->get();
    }
    public function headings(): array
    {
        return ["id", "nombre", "price"]; 
    }
}
