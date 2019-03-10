<?php
/**
 * Created by PhpStorm.
 * User: feng
 * Date: 19-3-10
 * Time: 下午7:18
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
} 