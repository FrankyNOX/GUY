<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unite_valeur extends Model
{
    protected $guarded = [];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'nom' => 'nullable|min:2',
            'credit' => 'nullable|numeric',
            'unite_enseignement_id' => 'nullable|numeric'
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'nom' => 'required|min:2',
            'credit' => 'required|numeric',
            'unite_enseignement_id' => 'required|numeric'
        ]);
    }

    public function unite_enseignement()
    {
        return $this->belongsTo(Unite_enseignement::class);
    }
}
