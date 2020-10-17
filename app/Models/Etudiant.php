<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $guarded = [];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'name' => 'nullable|min:2',
            'salle_id' => 'required|numeric',
            'genre' => 'nullable',
            'lieu_naissance' => 'nullable|min:2',
            'date_naissance' => 'nullable|min:2',
            'nationalite' => 'nullable|min:2',
            'matricule' => 'nullable|min:2'
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'name' => 'required|min:2',
            'salle_id' => 'required|numeric',
            'genre' => 'required',
            'lieu_naissance' => 'required|min:2',
            'date_naissance' => 'required|min:2',
            'nationalite' => 'required|min:2',
            'matricule' => 'required|min:2'
        ]);
    }

    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }
}
