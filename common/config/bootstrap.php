<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');

Yii::setAlias('@approot', dirname(dirname(__DIR__)));
Yii::setAlias('api', dirname(dirname(__DIR__)) . '/api');
Yii::setAlias('@uploadPath', '@backend/web/uploads');
Yii::setAlias('uploadUrl', '/backend/web/uploads');

//Yii::setAlias('@approot', dirname(dirname(__DIR__)));
//Yii::setAlias('@common', dirname(__DIR__));
//Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
//Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
//Yii::setAlias('api', dirname(dirname(__DIR__)) . '/api');
//Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');
//Yii::setAlias('@uploadPath', '@api/web/uploads');
//Yii::setAlias('uploadUrl', '/api/uploads');