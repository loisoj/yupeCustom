<?php
/**
 * @var $data Post
 */
?>
<div class="posts-list-block">
    <div class="posts-list-block-header">
        <?= CHtml::link(
            CHtml::encode($data->title),
            ['/blog/post/view', 'slug' => $data->slug]
        ); ?>
    </div>

    <div class="posts-list-block-meta">
	        <span>
	            <i class="glyphicon glyphicon-user"></i>
                <?php $this->widget(
                    'application.modules.user.widgets.UserPopupInfoWidget',
                    [
                        'model' => $data->createUser
                    ]
                ); ?>
	        </span>

	        <span>
	            <i class="glyphicon glyphicon-pencil"></i>

                <?= CHtml::link(CHtml::encode($data->blog->name), ['/blog/blog/view', 'slug' => $data->blog->slug]); ?>
	        </span>

	        <span>
	            <i class="glyphicon glyphicon-calendar"></i>

                <?= Yii::app()->getDateFormatter()->formatDateTime(
                    $data->publish_time,
                    "long",
                    "short"
                ); ?>
	        </span>
    </div>

    <div class="posts-list-block-text">
        <p>
            <?= $data->getImageUrl(400,400,false,'/dir-nophoto.jpg') ? CHtml::image($data->getImageUrl(400,400,false,'/dir-nophoto.jpg'), CHtml::encode($data->title), ['class' => 'img-responsive']) : ''; ?>
        </p>
        <?= strip_tags($data->getQuote()); ?>
    </div>

    <div class="posts-list-block-tags">
        <div>
	        <span class="posts-list-block-tags-block">
	            <i class="glyphicon glyphicon-tags"></i>

                <?= Yii::t('BlogModule.blog', 'Tags'); ?>:

                <?php foreach ((array)$data->getTags() as $tag): ?>
                    <span>
	                    <?= CHtml::link(CHtml::encode($tag), ['/posts/', 'tag' => CHtml::encode($tag)]); ?>
	                </span>
                <?php endforeach; ?>
	        </span>

	        <span class="posts-list-block-tags-comments">
	            <i class="glyphicon glyphicon-comment"></i>

                <?= CHtml::link(
                    $data->getCommentCount(),
                    ['/blog/post/view', 'slug' => $data->slug]
                ); ?>
	        </span>
        </div>
    </div>
</div>
