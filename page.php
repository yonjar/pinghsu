<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<article class="main-content page-page">
	<div class="post-header">
		<h1 class="post-title" itemprop="name headline">
			<?php $this->title() ?>
		</h1>
		<div class="post-data">
			<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><i class="far fa-clock"></i> <?php $this->date('M j, Y'); ?></time> 
					/ <i class="far fa-comment-dots"></i> <a href="#comments"><?php $this->commentsNum(_t(' 0 '), _t(' 1 '), _t(' %d ')); ?></a> 
					/ <i class="far fa-eye"></i> <?php get_post_view($this) ?>	
		</div>
	</div>
	<div id="post-content" class="post-content">
		<?php parseContent($this); ?>
	</div>
</article>

<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>