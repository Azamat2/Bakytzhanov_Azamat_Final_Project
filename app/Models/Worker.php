<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Work;

class Worker extends Model {
    use HasFactory;

    protected $table = 'worker';
    protected $fillable = ['worker_name', 'worker_surname', 'worker_photo', 'work_id'];

    public function work() {
        return $this->belongsTo(Work::class);
    }
}