<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestCategory extends Model
{
    protected $table = 'test_category';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function save(array $options = [])
    {
        return parent::save();
    }
}
