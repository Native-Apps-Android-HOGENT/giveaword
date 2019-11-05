<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use yii\rest\ActiveController;
use yii\web\Response;

class RestController extends ActiveController {

    public $modelClass = "app\models\Word";

    public function behaviors() {

        $behaviors = parent::behaviors();



        $behaviors['contentNegotiator'] = [
            'class' => 'yii\filters\ContentNegotiator',
            'formats' => [
                'application/json' => Response::FORMAT_JSON,
            ]
        ];



        return $behaviors;
    }

}
