<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected $guarded = [];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'nom' => 'nullable|min:2',
            'etablissement_id' => 'required|numeric'
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'nom' => 'nullable|min:2',
            'etablissement_id' => 'required|numeric'
        ]);
    }

    public function etablissement()
    {
        return $this->belongsTo(Etablissement::class);
    }
}
