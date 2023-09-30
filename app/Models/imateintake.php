<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class imateintake extends Model implements Auditable
{
    protected $table = 'imates';
    use HasFactory, AuditableTrait;
    protected $hidden = ['id', 'External_inmateID', 'created_at', 'updated_at'];
    protected $guarded = [];

}
