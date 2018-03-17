<?php
/**
 * Created by PhpStorm.
 * User: Рома
 * Date: 17.03.2018
 * Time: 23:29
 */

namespace app\models;


use yii\base\Model;
use yii\db\ActiveRecord;

class Cart extends ActiveRecord {

    public function addToCart($product, $qty = 1){
            echo 'afasfasf';
    }

}