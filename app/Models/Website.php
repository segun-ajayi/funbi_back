<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    protected $fillable = ['name', 'url', 'api_key'];
    protected $hidden = ['api_key'];

    public static function generateApiKey()
    {
        return bin2hex(random_bytes(32)); // 64-character hex string
    }
}
