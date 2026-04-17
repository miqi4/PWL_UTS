<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PenjualanDetail extends Model
{
    use HasFactory;

    protected $table = 't_penjualan_detail';
    protected $primaryKey = 'detail_id';

    protected $fillable = [
        'penjualan_id',
        'barang_id',
        'harga',
        'jumlah',
    ];

    /**
     * Get the penjualan that owns the detail.
     */
    public function penjualan(): BelongsTo
    {
        return $this->belongsTo(Penjualan::class, 'penjualan_id', 'penjualan_id');
    }

    /**
     * Get the barang that owns the detail.
     */
    public function barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'barang_id');
    }
}
