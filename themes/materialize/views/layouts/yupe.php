<!DOCTYPE html>
<html lang="ru">
  <head>
        <?php \yupe\components\TemplateEvent::fire(ShopThemeEvents::HEAD_START);
        require Yii::app()->getTheme()->basePath.'/manifest.php';
        ?>
    <meta charset="utf-8">
    <script class="hot" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link class="hot" rel="stylesheet" href="/css/master.css">
    <link async class="hot" rel="stylesheet" href="/css/materialize.min.css">
    <script async class="hot" src="/css/materialize.min.js" charset="utf-8"></script>
    <title><?= $this->title;?></title>
    <meta name="description" content="<?= $this->description;?>" />
    <meta  name="keywords" content="<?= $this->keywords;?>" />
    <?php if ($this->canonical): ?>
        <link rel="canonical" href="<?= $this->canonical ?>" />
    <?php endif; ?>
    <script type="text/javascript">
        var yupeTokenName = '<?= Yii::app()->getRequest()->csrfTokenName;?>';
        var yupeToken = '<?= Yii::app()->getRequest()->getCsrfToken();?>';
    </script>
    <?php     Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/blog.js'); ?>
        <script async src="/js/my.js" charset="utf-8"></script>
            <?php \yupe\components\TemplateEvent::fire(ShopThemeEvents::HEAD_END);?>
  </head>
  <body>
    <?php \yupe\components\TemplateEvent::fire(ShopThemeEvents::BODY_START);?>

    <script type="text/javascript">
    $(document).ready(function(){
         M.AutoInit();
         $('.modal-trigger').click(function(){
           $('.sidenav').sidenav('close');
         });
    });

    </script>
<div class="freez">


<!-- leftFly -->
      <ul id="slide-out" class="sidenav">

        <ul class="collapsible">
<li>
     <div class="collapsible-header"><i class="material-icons">filter_drama</i> <a href="/">Home</a> </div>
     <div class="collapsible-body"><span>***</span></div>
   </li>

   <li>
     <div class="collapsible-header"><i class="material-icons">place</i>Blog</div>
     <div class="collapsible-body"><span>
<ul>
  <li> <a href="/blogs">Список блогов</a> </li>
    <li> <a href="/post/write">Написать пост</a> </li>
</ul>
     </span></div>
   </li>
   <li>
     <div class="collapsible-header"><i class="material-icons">whatshot</i>
       <?php if($yp_Guest)
       {
         echo "Вход";
       }
       else {
       echo "Профиль";
     } ?> </div>
     <div class="collapsible-body"><span>
       <ul>

     <?php if($yp_Guest): ?>
<li> <a href="/login">Войти</a> </li>
<li> <a href="/registration">Регистрация</a> </li>
<?php else : ?>
  <li> <a href="/profile">Мой профиль</a> </li>
  <li> <a href="#">Мой код</a> </li>
  <li> <a href="#">Мои CDN</a> </li>
  <li> <a href="/logout">Выйти</a> </li>
<?php endif; ?>
       </ul>
</span></div>
   </li>


   <li><!-- Modal Trigger -->
   <a class="waves-effect waves-light btn modal-trigger" href="#modal1"> Modal</a></li>

 </ul>

      </ul>

      <!-- leftFly -->
      <a href="#" data-target="slide-out" class="sidenav-trigger" style="font-size: 22px;padding-left: 15px;color: red;"><i class="material-icons">apps</i></a>


<time style="float: right;color: white; padding: 5px;">
  <div style="font-size:2px;">
    <ul class="digit hours--1">
      <li class="item digit__item item--h item--1"></li>
      <li class="item digit__item item--v item--2"></li>
      <li class="item digit__item item--v item--3"></li>
      <li class="item digit__item item--h item--4"></li>
      <li class="item digit__item item--v item--5"></li>
      <li class="item digit__item item--v item--6"></li>
      <li class="item digit__item item--h item--7"></li>
    </ul>

    <ul class="digit hours--2">
      <li class="item digit__item item--h item--1"></li>
      <li class="item digit__item item--v item--2"></li>
      <li class="item digit__item item--v item--3"></li>
      <li class="item digit__item item--h item--4"></li>
      <li class="item digit__item item--v item--5"></li>
      <li class="item digit__item item--v item--6"></li>
      <li class="item digit__item item--h item--7"></li>
    </ul>

    <span class="dottes"></span>

    <ul class="digit min--0">
      <li class="item digit__item item--h item--1"></li>
      <li class="item digit__item item--v item--2"></li>
      <li class="item digit__item item--v item--3"></li>
      <li class="item digit__item item--h item--4"></li>
      <li class="item digit__item item--v item--5"></li>
      <li class="item digit__item item--v item--6"></li>
      <li class="item digit__item item--h item--7"></li>
    </ul>

    <ul class="digit min--1">
      <li class="item digit__item item--h item--1"></li>
      <li class="item digit__item item--v item--2"></li>
      <li class="item digit__item item--v item--3"></li>
      <li class="item digit__item item--h item--4"></li>
      <li class="item digit__item item--v item--5"></li>
      <li class="item digit__item item--v item--6"></li>
      <li class="item digit__item item--h item--7"></li>
    </ul>

    <ul class="digit digit--sec">
      <li class="item digit__item item--h item--1"></li>
      <li class="item digit__item item--v item--2"></li>
      <li class="item digit__item item--v item--3"></li>
      <li class="item digit__item item--h item--4"></li>
      <li class="item digit__item item--v item--5"></li>
      <li class="item digit__item item--v item--6"></li>
      <li class="item digit__item item--h item--7"></li>
    </ul>

    <ul class="digit digit--sec">
      <li class="item digit__item item--h item--1"></li>
      <li class="item digit__item item--v item--2"></li>
      <li class="item digit__item item--v item--3"></li>
      <li class="item digit__item item--h item--4"></li>
      <li class="item digit__item item--v item--5"></li>
      <li class="item digit__item item--v item--6"></li>
      <li class="item digit__item item--h item--7"></li>
    </ul>
  </div>
    <script src="/js/script.js" charset="utf-8"></script>
</time>

</div>
<div class="hot container">
  <?php

$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];

if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
else $ip = $remote;

// echo $ip;

?>
  <?php echo $content; ?>

</div>

<!-- Modal Structure -->
<div id="modal1" class="modal bottom-sheet">
  <div class="modal-content">
    <h4>Modal Header</h4>
    <p>A bunch of text</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
  </div>
</div>

<canvas id="canvas"></canvas>
<?php \yupe\components\TemplateEvent::fire(ShopThemeEvents::BODY_END);?>
  </body>
</html>
