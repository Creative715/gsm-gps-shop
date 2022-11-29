<?php

namespace app\modules\inside\models;

use Yii;

/**
 * This is the model class for table "usefulinfo".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $description
 * @property string $alias
 */
class Usefulinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usefulinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'description', 'alias'], 'required'],
            [['content'], 'string'],
            [['title', 'description'], 'string', 'max' => 255],
            [['alias'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'description' => 'Description',
            'alias' => 'Alias',
        ];
    }
}
