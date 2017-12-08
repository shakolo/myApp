<?php
/**
 * Created by PhpStorm.
 * User: eVol
 * Date: 06.12.2017
 * Time: 12:24
 */

namespace app\controllers;
use app\models\Category;
use Yii;
use app\models\TestForm;

class PostController extends AppController
{

    public $layout = 'basic';

    public function beforeAction($action)
    {
//        debug($action);
        if ($action->id == 'index'){
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

    public function actionIndex(){

//        $post = TestForm::findOne(6);
//        $this->debug($post);
//        $post->email = 'mail@mail.ru';
//        $post->save();
//        $this->debug($post);
//        $post->delete();


        TestForm::deleteAll();
        $model = new TestForm();


//        $model->name = "Автор";
////        $model->email = 'mail@mail.com';
////        $model->text = 'текст сообщения';
//        $model->save();

        if($model->load(Yii::$app->request->post())) {
//            debug(Yii::$app->request->post());
//            debug($model);
//            die;
            if ($model->save()){
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }


        if(Yii::$app->request->isAjax) {
//            debug($_POST);
            debug(Yii::$app->request->post());
            return 'test';

        }
//        $names = ['Ivanov', 'Petrov', 'Sidorov'];

//        var_dump(Yii::$app);
//        $this->debug(Yii::$app);
//        $this->debug($names);
//        return $this->render('test');
        return $this->render('test', compact('model'));
    }
    public function actionShow(){
//        $this->layout = 'basic';
        $this->view->title = "Одна статья";
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание']);

//        $cats = Category::find()->asArray()->where(['parent' => 691])->limit(1)->all();
//        $cats = Category::find()->asArray()->where(['parent' => 691])->limit(1)->one();
//        $cats = Category::findAll(['parent' => 691]);
//        $cats = Category::findOne(['parent' => 691]);
//        $cats = Category::find()->orderBy(['id' => SORT_ASC ])->all();
//        $cats = Category::find()->asArray()->where(['<=', 'id',  695])->all();
//        $cats = Category::find()->asArray()->where(['like' , 'title', 'pp'])->all();
//        $cats = Category::find()->asArray()->where(['parent' => 691])->all();
//        $cats = Category::find()->asArray()->where('parent =691')->all();
//        $cats = Category::find()->asArray()->all();
//        $cats = Category::find()->all();
//            $query = "SELECT * FROM categories WHERE title LIKE '%pp%'";
//        $cats = Category::findBySql($query)->all();
//            $query = "SELECT * FROM categories WHERE title LIKE :search";
//
//            $cats = Category::findBySql($query, ['search' => '%pp%'])->all();
//            $cats = Category::find()->all(); //ленивая (отложенная) загрузка
//            $cats = Category::find()->with('products')->all(); //жадная загрузка
//            $cats = Category::find()->with('products')->where('id=694')->all();
//            $cats = Category::findOne(694);

//        return $this->render('show');
        return $this->render('show', compact('cats'));
    }
}