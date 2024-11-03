<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'm_user';
    protected $primaryKey = 'user_id';

    // JOBSHEET 4
    // prak 1
    protected $fillable = ['level_id', 'username', 'nama', 'password'];
    // protected $fillable = ['level_id', 'username', 'nama'];

    // prak 2.4
    // protected $table = 'user';

    // prak 2.7
    public function level(): BelongsTo{
        return $this->belongsTo(UserModel::class, 'level_id', 'level_id');
    }
}