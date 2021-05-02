<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property string $symbol
 * @property string $link
 * @method static Company create(array $data)
 */
class Company extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
}
