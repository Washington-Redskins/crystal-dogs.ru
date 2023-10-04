<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 08.05.2016
 * Time: 10:00
 */

namespace app\controllers;
use app\models\Breed;
use app\models\ContactForm;
use app\models\Dog;
use Yii;
use yii\data\Pagination;

class ContactController extends AppController{

    public function actionIndex(){

        //////////////////////ОТПРАВКА ПИСЬМА
        //создать модель, которую затем передать в вид
        $model = new ContactForm();

        //получить адрес отправителя
        $postData = Yii::$app->request->post();
        $visitorEmail = isset ($postData['ContactForm']['email'] ) ? $postData['ContactForm']['email'] : null;
        $visitorName = isset ($postData['ContactForm']['name'] ) ? $postData['ContactForm']['name'] : '';
        $visitorBody = isset ($postData['ContactForm']['body'] ) ? $postData['ContactForm']['body'] : '';


        //если email был указан
        if (isset($visitorEmail)) {


            Yii::$app->mailer->compose()
                ->setFrom(Yii::$app->params['robotEmail'])
                ->setTo(Yii::$app->params['adminEmail'])
                ->setSubject('Вопрос на сайте')
                ->setTextBody('Пользователь по имени ' . $visitorName . ' и адресом эл. почты - ' . $visitorEmail . ' задал вопрос на сайте: ' . $visitorBody . '')->setCharset('UTF-8') /* текст сообщения */
                ->send();
            Yii::$app->session->setFlash('success', "Ваше сообщение успешно отправлено.");
            redirect(); //удалить данные из формы (для исправления ошибки f5)
        }


        $this->setMeta('Собачки из хрустального замка. Вязка');
        return $this->render('index', compact('model'));
    }
} 