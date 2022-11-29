<?php

namespace app\modules\inside\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property string $id
 * @property string $category_id
 * @property string $name
 * @property string $content
 * @property string $desc1
 * @property string $haracteristika
 * @property string $instruction
 * @property string $tech
 * @property string $funck
 * @property string $features
 * @property string $video
 * @property string $icon_menu
 * @property string $method
 * @property string $suggestion
 * @property string $exactness
 * @property double $old_price
 * @property double $price
 * @property string $keywords
 * @property string $description
 * @property string $alias
 * @property string $img
 * @property string $hit
 * @property string $new
 * @property string $sale
 */
class Product extends \yii\db\ActiveRecord
{
	  public $image;
      public $gallery;
    

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'name'], 'required'],
            [['category_id'], 'integer'],
            [['content', 'desc1', 'haracteristika', 'instruction', 'tech', 'funck', 'features', 'video', 'icon_menu', 'method', 'suggestion', 'exactness', 'hit', 'new', 'sale'], 'string'],
			[['old_price'], 'number'],
            [['price'], 'number'],
			[['image'], 'file', 'extensions' => 'png, jpg'],
			[['alias'], 'string', 'max' => 100],
            [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 5],
            [['name', 'keywords', 'description', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID товара',
            'category_id' => 'Категория',
            'name' => 'Наименование',
            'content' => 'Контент',
            'desc1' => 'Список под ценой',
			'haracteristika' => 'Характеристики',
			'instruction' => 'Инструкции',
			'tech' => 'Технические характеристики',
            'funck' => 'Функциональные возможности',
            'features' => 'Особенности товара',
            'video' => 'Фото/Видео обзор',
            'icon_menu' => 'Меню возле картинки',
            'method' => 'Способы хищения топлива',
            'suggestion' => 'Спецпредложение для монтажников',
            'exactness' => 'Точность контроля километража',
			'old_price' => 'Старая Цена',
            'price' => 'Цена',
            'keywords' => 'Ключевые слова',
            'description' => 'Мета-описание',
            'alias' => 'Алиас',
			'image' => 'Фото',
			'gallery' => 'Галерея',
            'hit' => 'Хит',
            'new' => 'Новинка',
            'sale' => 'Акция',
        ];
    }
    
	 public function upload(){
        if($this->validate()){
            $path = 'upload/store/' . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path, true);
            @unlink($path);
            return true;
        }else{
            return false;
        }
    }

    public function uploadGallery(){
        if($this->validate()){
            foreach($this->gallery as $file){
                $path = 'upload/store/' . $file->baseName . '.' . $file->extension;
                $file->saveAs($path);
                $this->attachImage($path);
                @unlink($path);
            }
            return true;
        }else{
            return false;
        }
    }
}
