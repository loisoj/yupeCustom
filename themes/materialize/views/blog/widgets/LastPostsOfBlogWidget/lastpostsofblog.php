<?php Yii::import('application.modules.blog.BlogModule'); ?>

<div class="posts">

    <p class="posts-header">
        <span class="posts-header-text"><?= Yii::t('BlogModule.blog', 'Last blog posts'); ?></span>
    </p>

    <div class="posts-list">
        <?php foreach ($posts as $post): ?>

          <div class="row">
            <div class="col s12 m7">
              <div class="card">
                <div class="card-image">
                  <img src="<?= $post->getImageUrl(400,400) ?>">
                  <span class="card-title"><?= CHtml::link(
                      CHtml::encode($post->title),
                      ['/blog/post/view', 'slug' => $post->slug]
                  ); ?></span>
                </div>
                <div class="card-content">
                  <p>Создал:               <?php $this->widget(
                                    'application.modules.user.widgets.UserPopupInfoWidget',
                                    [
                                        'model' => $post->createUser
                                    ]
                                ); ?></p>
                                <p>          <?= Yii::app()->getDateFormatter()->formatDateTime(
                                              $post->publish_time,
                                              "long",
                                              "short"
                                          ); ?></p>
                  <p>Для     <?= CHtml::link(
                          CHtml::encode($post->blog->name),
                          [
                              '/blog/blog/view/',
                              'slug' => CHtml::encode($post->blog->slug)
                          ]
                      ); ?></p>
                  <p><?= strip_tags($post->getQuote()); ?></p>
                  <?php foreach ((array)$post->getTags() as $tag): ?>
                      <span>
                          <?= CHtml::link(
                              CHtml::encode($tag),
                              ['/posts/', 'tag' => CHtml::encode($tag)]
                          ); ?>
                      </span>
                  <?php endforeach; ?>
                </div>
                <div class="card-action">
                  <?= CHtml::link(
                      CHtml::encode('Перейти'),
                      ['/blog/post/view', 'slug' => $post->slug]
                  ); ?>
                </div>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
    </div>
</div>
