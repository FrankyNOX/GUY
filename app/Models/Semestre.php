<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    protected $guarded = [];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'nom' => 'nullable|min:2'
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'nom' => 'required|min:2'
        ]);
    }

}
