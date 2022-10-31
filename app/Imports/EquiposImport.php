<?php

namespace App\Imports;

use App\Models\Equipo;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
class EquiposImport implements ToModel, WithHeadingRow, WithValidation, WithBatchInserts,WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Equipo([
            'nombre'=> $row['nombre'],
            'id_colegio'=> $row['id_colegio'],
            'cuenta'=> $row['cuenta'],
            'clave'=> $row['clave'],
            'id_categoria'=> $row['id_categoria']
        ]);
    }
    public function rules():array
    {
        return [
            'nombre'=> 'required',
            'id_colegio'=> 'required',
            'id_categoria'=> 'required'
        ];
    }
    public function batchSize(): int
    {
        return 1000;
    }
    public function chunkSize(): int
    {
        return 100;
    }
}
