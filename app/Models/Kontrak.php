<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Kontrak extends Model
{
    use HasFactory;
    protected $fillable = [
        'supplier',
        'po_direct',
        'kontrak_direct',
        'po_timbang',
        'kontrak_timbang',
    ];
    public function index()
    {
        $data = Kontrak::all();
    }
}
