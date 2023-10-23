<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'checkin_date', 'checkout_date', 'no_kamar', 'type_kamar', 'jumlah_tamu', 'total'];

    protected $table = 'reservations';

    protected $primaryKey = 'id';

    public $timestamps = true;
}
