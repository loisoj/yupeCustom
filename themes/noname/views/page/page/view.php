<?php
/* @var $model Page */
/* @var $this PageController */

if ($model->layout) {
    $this->layout = "//layouts/{$model->layout}";
}

$this->title = $model->title;
$this->breadcrumbs = $this->getBreadCrumbs();
$this->description = $model->description ?: Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = $model->keywords ?: Yii::app()->getModule('yupe')->siteKeyWords;
$thisCpage = Yii::app()->controller->currentPage->id;
?>
<div class="main__title grid">
    <h1 class="h2"><?= $model->title; ?></h1>
</div>
<div class="main__catalog grid">
    <?= $model->body; ?>
    <?php if(Yii::app()->user->checkAccess('admin')) { ?>

      <link rel="stylesheet" type="text/css" href="/css/x-dev-component.css" />

      <div class="md-modal md-effect-12" id="modal-12" style="left: 50%;
      margin-left: -20%;max-width:100%;">
        <div class="md-content">
          <iframe src="/backend/page/page/update/<?php echo $thisCpage; ?>" style="width:90vw;height:90vh">
     Ваш браузер не поддерживает плавающие фреймы!
  </iframe>
            <button class="md-close">Закрыть!</button>
          </div>
        </div>

        <button class="md-trigger" data-modal="modal-12">Нажми меня</button>

        <div class="md-overlay"></div>

        <script src="/js/x-dev/classie.js"></script>
    		<script src="/js/x-dev/modalEffects.js"></script>

        <script>
    			// this is important for IEs
    			var polyfilter_scriptpath = '/js/';
    		</script>
    		<!-- <script src="/js/x-dev/cssParser.js"></script> -->
    		<!-- <script src="/js/x-dev/css-filters-polyfill.js"></script> -->
  <?php  } ?>
</div>
