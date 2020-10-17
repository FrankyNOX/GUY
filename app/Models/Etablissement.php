<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    protected $guarded = [];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'nom' => 'nullable|min:2',
            'state_id' => 'required|numeric',
            'city_id' => 'required|numeric',
            'numero'    => "nullable|unique:etablissements,numero,$id",
            'email'    => "nullable|email|unique:etablissements,email,$id"
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'nom' => 'required|min:2',
            'state_id' => 'required|numeric',
            'city_id' => 'required|numeric',
            'numero'    => "required|unique:etablissements,email",
            'email'    => "required|email|unique:etablissements,email"
        ]);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

}
