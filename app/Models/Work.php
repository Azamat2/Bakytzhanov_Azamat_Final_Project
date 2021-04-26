<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Worker;

class Work extends Model
{
    use HasFactory;

    protected $table = 'work';
    protected $fillable = ['name', 'description'];

    public function worker() {
        return $this->hasMany(Worker::class);
    }
}
