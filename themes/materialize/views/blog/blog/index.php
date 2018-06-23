<?php
/**
 * @var $this BlogController
 * @var $form TbActiveForm
 * @var $blogs Blog
 */
$this->title = Yii::t('BlogModule.blog', 'Blogs');
$this->description = Yii::t('BlogModule.blog', 'Blogs');
$this->keywords = Yii::t('BlogModule.blog', 'Blogs');
?>

<?php $this->breadcrumbs = [Yii::t('BlogModule.blog', 'Blogs')]; ?>

<?php
$form = $this->beginWidget(
    'bootstrap.widgets.TbActiveForm',
    [
        'method' => 'get',
        'type'   => 'vertical'
    ]
);
?>



          <div class="row">
            <form class="col s12">
              <div class="input-group">
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">search</i>
                  <?= $form->textField(
                      $blogs,
                      'name',
                      ['placeholder' => Yii::t('BlogModule.blog', ''), 'class' => 'form-control']
                  ); ?>
                  <label for="icon_prefix2">Искать по названию блога</label>
                </div>
              </div>
          </div>
            </form>
          </div>





<?php $this->endWidget(); ?>

<?php
$this->widget(
    'bootstrap.widgets.TbListView',
    [
        'dataProvider'       => $blogs->search(),
        'template'           => '{sorter}<br/><hr/>{items} {pager}',
        'sorterCssClass'     => 'sorter pull-left',
        'itemView'           => '_item',
        'ajaxUpdate'         => false
    ]
);
?>
