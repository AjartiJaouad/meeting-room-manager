<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    protected $fillable = ['nom_salle', 'type_salle', 'capacite', 'service_id'];
    public function service()
{
   
    return $this->belongsTo(Service::class);
}
}
