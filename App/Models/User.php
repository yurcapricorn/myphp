<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 24-Feb-17
 * Time: 16:56
 */

namespace App\Models;

use App\Db;
use App\Model;

class User extends Model
{
    const TABLE = 'user';
    public $email;
    public $name;

}