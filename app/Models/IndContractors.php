<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IndContractors extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'ind_contractors';
    protected $guarded = false;

    // Функцию связывания называем в единственном числе,
    // потому что у контрагента может быть только один пользователь - создатель.

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
