<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'condominia_id'];

    /**
     * @return mixed
     */
    public function condominium()
    {
        return $this->belongsTo(Condominium::class);
    }
}
