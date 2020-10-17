<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    protected $guarded = [];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'nom' => 'nullable|min:2',
            'filiere_id' => 'required|numeric'
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'nom' => 'nullable|min:2',
            'filiere_id' => 'required|numeric'
        ]);
    }

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }
}
