<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unite_enseignement extends Model
{
    protected $guarded = [];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'nom' => 'nullable|min:2',
            'salle_id' => 'required|numeric',
            'code' => 'nullable|min:2',
            'type' => 'nullable|min:2',
            'Competences_visees' => 'nullable|min:2'
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'nom' => 'required|min:2',
            'salle_id' => 'required|numeric',
            'code' => 'required|min:2',
            'type' => 'required|min:2',
            'Competences_visees' => 'required|min:2'
        ]);
    }

    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }
}
