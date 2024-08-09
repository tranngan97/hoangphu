<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'test';
    protected $primaryKey = 'test_id';

    protected $guarded = [];

    public function save(array $options = [])
    {
        return parent::save();
    }
}
