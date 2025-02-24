<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UlasanKamar extends Model
{
    use HasFactory;
    protected $table = 'ulasan_kamar';
    protected $guarded = ['id'];

    public function reservasi(): BelongsTo
    {
        return $this->belongsTo(Reservasi::class);
    }
}
