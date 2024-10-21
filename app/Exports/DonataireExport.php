<?php

namespace App\Exports;

use App\Models\Donataire;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DonataireExport implements FromCollection, WithHeadings
{
    /**
     * Retourne la collection de données à exporter.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Donataire::with('don')->get()->map(function ($donataire) {
            return [
                'Nom'   => $donataire->name,
                'Email' => $donataire->email,
                'Phone' => $donataire->phone,
                'Dons'  => $donataire->don->pluck('description'), // Par exemple, si tu veux afficher les montants des dons
            ];
        });
    }

    /**
     * Retourne les en-têtes des colonnes.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'Nom',
            'Email',
            'Phone',
            'Dons'
        ];
    }
}
