<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <title><?php $this->archiveTitle(array(
    'category'  =>  _t(' %s '),
    'search'    =>  _t(' %s '),
    'tag'       =>  _t(' %s '),
    'author'    =>  _t(' %s '),
    'date'      =>  _t(' %s ')
    ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <meta name="keywords" content="<?php $this->keywords(); ?>" />
    <!-- OG Tags 首页输出 -->
    <?php if($this->is('index')): ?>
    <meta property="og:url" content="<?php $this->options->siteUrl(); ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="<?php $this->options->title() ?>"/>
    <meta property="og:image" content="https://yuika.love/img/icon.png"/>
    <meta property="og:author" content="LautlosP"/>
    <meta property="og:site_name" content="<?php $this->options->title() ?>"/>
    <meta property="og:description" content="<?php $this->options->title() ?> 为DD而生"/>
    <meta property="og:locale:alternate" content="zh_CN"/>

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@imyonjar">
    <meta name="twitter:title" content="<?php $this->options->title() ?>">
    <meta name="twitter:description" content="<?php $this->options->title() ?> 为DD而生">
    <meta name="twitter:url" content="<?php $this->options->siteUrl(); ?>">
    <meta name="twitter:image" content="https://yuika.love/img/icon.png">
    <?php endif; ?>

    <!-- OG Tags 文章和独立页面输出 -->
    <?php if($this->is('post')||$this->is('page')): ?>
    <?php $thumb = showThumb($this,null,true);?>
    <meta property="og:url" content="<?php $this->permalink(); ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="<?php $this->title(); ?>"/>
        <?php if(!empty($thumb)):?>
        <meta property="og:image" content="<?php echo $thumb ?>"/>
        <?php else: ?>
        <meta property="og:image" content="https://yuika.love/img/icon.png"/>
        <?php endif; ?>
    <meta property="og:author" content="<?php $this->author(); ?>"/>
    <meta property="og:site_name" content="<?php $this->options->title(); ?>"/>
    <meta property="og:description" content="<?php $this->description(); ?>"/>
    <meta property="og:locale:alternate" content="zh_CN"/>

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@imyonjar">
    <meta name="twitter:title" content="<?php $this->title(); ?>">
    <meta name="twitter:description" content="<?php $this->description(); ?>">
    <meta name="twitter:url" content="<?php $this->permalink(); ?>">
        <?php if(!empty($thumb)):?>
        <meta name="twitter:image" content="<?php echo $thumb ?>"/>
        <?php else: ?>
        <meta name="twitter:image" content="https://yuika.love/img/icon.png"/>
        <?php endif; ?>
    <?php endif; ?>
    <!-- OG Tags end -->
    <meta charset="<?php $this->options->charset(); ?>"><?php if ($this->options->DnsPrefetch): ?>
    <meta http-equiv="x-dns-prefetch-control" content="on"><?php if ($this->options->cdn_add): ?>
    <link rel="dns-prefetch" href="<?php $this->options->cdn_add(); ?>" /><?php endif; ?>
    <link rel="dns-prefetch" href="//cdn.bootcss.com" />
    <link rel="dns-prefetch" href="//secure.gravatar.com" /><?php endif; ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0">
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.bootcss.com/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">    <?php if($this->options->favicon): ?>
    <link rel="shortcut icon" href="<?php $this->options->favicon(); ?>"><?php endif;?><?php if($this->options->iosicon): ?>
    <link rel="apple-touch-icon" href="<?php $this->options->iosicon();?>"><?php endif; ?>
    <?php $this->header('keywords=&generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&atom='); ?>
    <link href="<?php $this->options->themeUrl('css/style.min.css'); ?>" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/my.style.min.css'); ?>" rel="stylesheet">
 
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="<?php if (array_key_exists('archive',unserialize($this->___fields()))): ?>bg-grey<?php elseif($this->is('archive')&&($this->options->colorBgPosts == 'defaultColor')): ?>bg-grey<?php elseif($this->is('archive')&&($this->options->colorBgPosts == 'customColor')): ?>bg-white<?php elseif(!$this->is('single')): ?>bg-grey<?php endif; ?>" gtools_scp_screen_capture_injected="true">
<!--[if lt IE 8]>
<div class="browsehappy" role="dialog">
    当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/" target="_blank">升级你的浏览器</a>。
</div>
<![endif]-->
<header id="header" class="header bg-glass">
    <div class="navbar-container">
        <a href="<?php $this->options->siteUrl(); ?>" class="navbar-logo">
            <?php if($this->options->logoUrl): ?>
            <img src="<?php $this->options->logoUrl();?>" alt="<?php $this->options->title() ?>" />
            <?php else : ?>
            <?php $this->options->title() ?>
            <?php endif; ?>
        </a>
        <div class="navbar-menu">
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>

            <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a>
            <?php endwhile; ?>

        </div>
        <?php if($this->options->searchPage): ?>
        <a href="<?php $this->options->searchPage(); ?>" class="navbar-search">
            <span class="icon-search"></span>
        </a>
        <?php else: ?>
        <div class="navbar-search" onclick="">
            <span class="icon-search"></span>
            <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                <span class="search-box">
                    <input label="search" type="text" id="input" class="input" name="s" required="true" placeholder="Search..." maxlength="30" autocomplete="off">
                </span>
            </form>
        </div>
        <?php endif;?>
        <div class="navbar-mobile-menu" onclick="">
            <span class="icon-menu cross"><span class="middle"></span></span>
            <ul>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>

                <li><a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
                <?php endwhile; ?>

            </ul>
        </div>
    </div>
</header>