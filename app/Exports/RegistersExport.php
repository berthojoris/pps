<?php

namespace App\Exports;

use App\Register;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegistersExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Register::all();
    }

    public function map($data) : array {
        return [
            $data->name,
            $data->contact,
            $data->email,
            Carbon::parse($data->created_at)->toFormattedDateString()
        ] ;
    }

    public function headings(): array
    {
        return [
            'Nama',
            'Kontak',
            'Email',
            'Tanggal Submit',
        ];
    }
}
