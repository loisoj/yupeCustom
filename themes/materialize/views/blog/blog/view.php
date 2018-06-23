<?php
/**
 * @var $this BlogController
 * @var $blog Blog
 */
$this->title = CHtml::encode($blog->name);
$this->description = CHtml::encode($blog->name);
$this->keywords = CHtml::encode($blog->name);
?>

<?php
$this->breadcrumbs = [
    Yii::t('BlogModule.blog', 'Blogs') => ['/blog/blog/index/'],
    CHtml::encode($blog->name),
];
?>
<div class="row">
    <div class="col-sm-12">

                      <?= CHtml::link(
                          CHtml::encode($blog->name),
                          ['/blog/post/blog/', 'slug' => CHtml::encode($blog->slug)]
                      ); ?>
        <div class="blog-logo pull-left">
            <?= CHtml::image(
                $blog->getImageUrl(109, 109, true , ''),
                CHtml::encode($blog->name),
                [
                    'width'  => 109,
                    'height' => 109
                ]
            );


             ?>

        </div>
        <div class="blog-description">
          <?php if ($blog->description) : ?>
              <div class="blog-description-text">
                  <?= strip_tags($blog->description); ?>
              </div>
          <?php endif; ?>

          <div class="blog-description-info">
          <span class="blog-description-posts">
              Кол-во записей:
              <?= CHtml::link(
                  count($blog->posts),
                  ['/blog/post/blog/', 'slug' => CHtml::encode($blog->slug)]
              ); ?>
          </span>

          </div>
                      <?php $this->widget('blog.widgets.MembersOfBlogWidget', ['blogId' => $blog->id, 'blog' => $blog]); ?>
            <div class="blog-description-name">

                <div class="pull-right">
                    <?php $this->widget(
                        'application.modules.blog.widgets.JoinBlogWidget',
                        ['user' => Yii::app()->user, 'blog' => $blog]
                    ); ?>
                    <?php
                    if ($blog->userIn(Yii::app()->getUser()->getId())) {
                        echo CHtml::link(Yii::t('BlogModule.blog', 'Add a post'), ['/blog/publisher/write', 'blog-id' => $blog->id], ['class' => 'btn btn-success btn-sm']);
                    }
                    ?>
                </div>


            </div>





        </div>
    </div>
</div>

<?php $this->widget('blog.widgets.LastPostsOfBlogWidget', ['blogId' => $blog->id, 'limit' => 10]); ?>

<br/>

<?= CHtml::link(
    Yii::t('BlogModule.blog', 'All entries for blog "{blog}"', ['{blog}' => CHtml::encode($blog->name)]),
    ['/blog/post/blog/', 'slug' => $blog->slug],
    ['class' => 'btn btn-default']
); ?>

<br/><br/>
