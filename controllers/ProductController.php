<?php

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;

class ProductController extends AppController{

    public function actionView($id = null){
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id); //Ленивая загрузка
    //    $product = Product::find()->with('category')->where(['id' => $id ])->limit(1)->one(); //Жадная загрузка

        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();

        $this->setMeta('E-SHOPPER | '.$product->name, $product->keywords, $product->description );

        return $this->render('view', compact('product', 'hits'));
    }
}