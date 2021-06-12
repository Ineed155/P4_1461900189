<?php

namespace App\Exports;

use App\Models\Buku;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\support\Facades\DB;

class BukuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Buku::all();
        $users = DB::table('buku')
            ->join('jenis_buku', 'jenis_buku.id', '=', 'buku.id')
            ->select('buku.*', 'jenis_buku.jenis')
            ->get();
        return $users;
    }
}
