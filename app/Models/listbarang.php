<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listbarang extends Model
{
    use HasFactory;
    public function satuan()
    {
        return $this->belongsTo(satuan::class);
    }

}
