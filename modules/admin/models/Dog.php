<?php

namespace app\modules\admin\models;
use Intervention\Image\ImageManagerStatic;
use rico\yii2images\models\Image;
use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "dog".
 *
 * @property string $id
 * @property string $breed_id
 * @property string $name
 * @property string $content
 * @property double $price
 * @property string $keywords
 * @property string $description
 * @property string $img
 * @property string $hit
 * @property string $sold
 * @property string $status
 */
class Dog extends \yii\db\ActiveRecord
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
        return 'dog';
    }

    public function getBreed(){
        return $this->hasOne(Breed::className(), ['id' => 'breed_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['breed_id', 'name'], 'required'],
            [['breed_id'], 'integer'],
            [['content', 'hit', 'sold', 'status'], 'string'],
            [['price'], 'number'],
            [['name', 'keywords', 'description', 'img', 'alias'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg'],
            [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер (ID)',
            'breed_id' => 'Порода',
            'name' => 'Наименование',
            'alias' => 'Название транслитом',
            'content' => 'Контент',
            'price' => 'Цена',
            'keywords' => 'Ключевые слова',
            'description' => 'Мета-описание',
            'image' => 'Фото',
            'gallery' => 'Галерея',
            'hit' => 'Хит',
            'sold' => 'Продано',
            'status' => 'Активен',
        ];
    }

    public function saveFile($image, $isMainImage = false){

        $bytes = random_bytes(6);
        $baseName = (bin2hex($bytes));

//        $img = ImageManagerStatic::make($_FILES['Dog']['tmp_name']['image']);
        $img = ImageManagerStatic::make($image->tempName);

        $img->resize(Yii::$app->params['imageWidth'], Yii::$app->params['imageHeight'], function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save('upload/store/' . $baseName . '.' . $image->extension, Yii::$app->params['compressionLevel']);
//        if($this->validate()){
            $path = 'upload/store/' . $baseName . '.' . $image->extension;
//            $this->image->saveAs($path);

            $this->attachImage($path, $isMainImage);

//            Image::make($path)->resize(300, 200)->save($path);
            @unlink($path);

//            return true;
//        }else{
//            return false;
//        }
    }

    public function uploadMainImage($model) {
        if($this->validate()){
            $mainImg = $model->getImage();


            //удалить старое фото и запись в БД
            @unlink('upload/store/' . $mainImg->filePath);
            $imagesRowInDB = Image::find()->where(['itemId' => $model->id])->all();
            foreach ($imagesRowInDB as $row) {
                $row->delete();
            }
//            $mainImg = $model->getImage()->all();
//            ActiveRecord::deleteAll($mainImg);

                $this->saveFile($model->image, true);

            return true;
        }else{
            return false;
        }
    }

    public function uploadGallery($model){
        if($this->validate()){
            $galleryImages = $model->getImages();

            //удалить старое фото и запись в БД
            foreach ($galleryImages as $galleryImage) {

                $imagesRowInDB = Image::find()->where(['itemId' => $model->id, 'isMain' => 0])->all();
                @unlink('upload/store/' . $galleryImage->filePath);

                foreach ($imagesRowInDB as $row) {
                    $row->delete();
                }
            }

            foreach($model->gallery as $image){
                 $this->saveFile($image, false);
            }
            return true;
        }else{
            return false;
        }
    }
}
