<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    protected $guarded = [];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'nom' => 'nullable|min:1',
            'option_id' => 'required|numeric'
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'nom' => 'required|min:1',
            'option_id' => 'required|numeric'
        ]);
    }

    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
