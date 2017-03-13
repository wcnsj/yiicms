<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\bootstrap\ActiveForm;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= Html::encode($this->title) ?></title>
    <?= Html::csrfMetaTags() ?>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <?php $this->head() ?>
</head>

<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Welcome to {$Think.config.WEB_TITLE}</h3>
            <p>为您提供简单、易用的管理系统，让您更专注于您的专业领域！</p>
            <p>登陆。就可以查看管理内容</p>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <div class="form-group">
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label(false) ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'password')->passwordInput()->label(false) ?>
                </div>
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary block full-width m-b', 'name' => 'login-button']) ?>

                <a href="#" id="a"><small>忘记密码?</small></a>
            <?php ActiveForm::end(); ?>
            <p class="m-t"> <small>欢迎使用{$Think.config.WEB_TITLE} &copy; <?= date('Y') ?></small> </p>
        </div>
    </div>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/plugins/toastr/toastr.min.js"></script>
</body>

</html>
<?php $this->endPage() ?>
