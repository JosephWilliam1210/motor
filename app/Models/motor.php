<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'description',
        'harga',
        'date',
        'created_by'
    ];

    public function creator(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
