<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable=['content'];
    /**
     * @var mixed
     */

    public function user(){
        return $this->belongsTo(User::class);
    }
}
