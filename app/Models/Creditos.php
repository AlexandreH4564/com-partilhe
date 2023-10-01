<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creditos extends Model
{
    use HasFactory;

    protected $fillable = ['doador_id', 'peca_id', 'credito', ];

    public function doador() {
        return $this->belongsTo('App\Models\Doador');
    }

    public function peca() {
        return $this->belongsTo('App\Models\Peca');
    }
}
