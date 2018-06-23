


  <div class="card small">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="<?= $data->getImageUrl(); ?>">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?= CHtml::link(
              CHtml::encode($data->name),
              ['/blog/blog/view/', 'slug' => CHtml::encode($data->slug)]
          ); ?>
                <i class="material-icons right">more_vert</i></span>
  <p>Постов: <?= CHtml::link(
          CHtml::encode($data->postsCount),
          ['/blog/post/blog/', 'slug' => CHtml::encode($data->slug)]
      ); ?></p>
      <p>Пишут: <?= CHtml::link(
              CHtml::encode($data->membersCount),
              ['/blog/blog/members', 'slug' => CHtml::encode($data->slug)]
          ); ?></p>



    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?= $data->name ?> <i class="material-icons right">close</i></span>
      <ul>
      <li>        <?php $this->widget(
                  'application.modules.blog.widgets.JoinBlogWidget',
                  ['user' => Yii::app()->getUser(), 'blog' => $data]
              ); ?>
              </li>

              <?php
              if ($data->userIn(Yii::app()->getUser()->getId())) { ?>
                <br>
                <li>
                  <?php
                  echo CHtml::link(Yii::t('BlogModule.blog', 'Add a post'), ['/blog/publisher/write', 'blog-id' => $data->id], ['class' => 'btn btn-success btn-sm']);
                  ?> </li> <?php  } ?>
      </ul>
      <span><?= strip_tags($data->description); ?></span>
    </div>
  </div>
