<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $guarded = [];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'nom' => 'nullable|min:2',
            'cycle_id' => 'required|numeric'
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'nom' => 'nullable|min:2',
            'cycle_id' => 'required|numeric'
        ]);
    }

    public function cycle()
    {
        return $this->belongsTo(Cycle::class);
    }
}
