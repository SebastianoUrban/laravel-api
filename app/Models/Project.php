<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title','start_date','end_date','place','description','image','type_id'];

    public function type () {
        return $this->belongsTo(Type::class);
    }

    public function tecnology () {
        return $this->belongsToMany(Tecnology::class);
    }
}
