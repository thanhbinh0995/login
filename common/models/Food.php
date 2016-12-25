<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use cornernote\softdelete\SoftDeleteBehavior;
/**
 * This is the model class for table "food".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $name
 * @property string $image
 * @property string $content
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Category $category
 */
class Food extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file_image;
//    use \mootensai\relation\RelationTrait;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
//            'SoftDeleteBehavior' => [
//                'class' => SoftDeleteBehavior::className(),
//                'attribute' => 'deleted_at',
//                'value' => time(), // for sqlite use - new \yii\db\Expression("date('now')")
//            ],
        ];
    }
    public static function tableName()
    {
        return 'food';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'name', 'image', 'content'], 'required'],
            [['category_id', 'created_at', 'updated_at'], 'integer'],
            [['content'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 50],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['file_image'], 'file', 'extensions' => 'png, jpg','maxSize' => 1024 * 1024 * 2, 'skipOnEmpty' => true],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'name' => 'Name',
            'image' => 'Image',
            'content' => 'Content',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
