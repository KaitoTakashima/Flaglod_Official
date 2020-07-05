<!DOCTYPE html>
<!-- 言語設定を自動的に出力 -->
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/earlyaccess/nikukyu.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/hannari.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
    <script>
  (function(d) {
    var config = {
      kitId: 'fyx7yfm',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<script>
  (function(d) {
    var config = {
      kitId: 'fyx7yfm',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
   <?php wp_head(); ?>
</head>
<body <?php body_class();?> >
    <header class="l-header">
     <div class="l-mobile_header">
            <h1 class="l-header_title">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <!-- Generator: Adobe Illustrator 24.2.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="レイヤー_2_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                        y="0px" viewBox="0 0 419.7 181.4" style="enable-background:new 0 0 419.7 181.4;" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:none;stroke:#231815;stroke-width:3;stroke-miterlimit:10;}
                        </style>
                        <path class="st0" d="M59.3,4.2c-18.8-0.3-38.8-0.3-57.8,0v125"/>
                        <path class="st0" d="M0.9,64.6c19.6,0.3,38.6,0.3,58.4,0"/>
                        <line class="st0" x1="80" y1="1.4" x2="80" y2="127.8"/>
                        <path class="st0" d="M160.4,97.6c0,3.2-0.4,6.4-1.3,9.5c-3.7,13.6-15.1,23.5-28.6,23.5c-16.5,0-29.9-14.8-29.9-33s13.4-33,29.9-33
                            C147,64.6,160.4,79.4,160.4,97.6z"/>
                        <line class="st0" x1="160.4" y1="130.6" x2="160.4" y2="97.6"/>
                        <ellipse class="st0" cx="210.9" cy="97.6" rx="29.9" ry="33"/>
                        <line class="st0" x1="260.1" y1="1.4" x2="260.1" y2="130.6"/>
                        <ellipse class="st0" cx="309.2" cy="97.6" rx="29.9" ry="33"/>
                        <ellipse class="st0" cx="388.2" cy="97.6" rx="29.9" ry="33"/>
                        <line class="st0" x1="418.2" y1="0" x2="418.2" y2="129.2"/>
                        <path class="st0" d="M240.8,97.6v82.4h-56.6l204-135.3"/>
                    </svg>
                </a>
            </h1>
            <div class="l-hamburger_menu">
                <span class="nav_toggle">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
                <nav class="nav">
                    <ul class="nav_menu_content">
                        <li class="nav_menu_li"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
                        <li class="nav_menu_li"><a href="<?php echo get_post_type_archive_link('news');?>">お知らせ</a></li>
                        <li class="nav_menu_li"><a href="<?php echo get_post_type_archive_link('movie');?>">映像</a></li>
                        <li class="nav_menu_li"><a href="<?php echo get_post_type_archive_link('biography');?>">略歴</a></li>
                        <li class="nav_menu_li"><a href="<?php echo get_post_type_archive_link('discography');?>">作品</a></li>
                        <li class="nav_menu_li"><a href="#">お店</a></li>
                        <li class="nav_menu_li"><a href="<?php echo get_permalink(44)?>">お問い合わせ</a></li>
                        <ul class="l-sns_group">
                            <li><a href=""><i class="lab la-twitter la-3x"></i></a></li>
                            <li><a href=""><i class="lab la-instagram la-3x"></i></a></li>
                            <li><a href=""><i class="lab la-youtube la-3x"></i></a></li>
                        </ul>

                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="l-pc_header">
            <ul>
                <li class="nav_menu_li"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
                <li class="nav_menu_li"><a href="<?php echo get_post_type_archive_link('news');?>">お知らせ</a></li>
                <li class="nav_menu_li"><a href="<?php echo get_post_type_archive_link('movie');?>">映像</a></li>
                <li class="nav_menu_li"><a href="<?php echo get_post_type_archive_link('biography');?>">略歴</a></li>
                <li class="nav_menu_li"><a href="<?php echo get_post_type_archive_link('discography');?>">作品</a></li>
                <li class="nav_menu_li"><a href="#">お店</a></li>
                <li class="nav_menu_li"><a href="<?php echo get_permalink(44)?>">お問い合わせ</a></li>
                <ul class="l-sns_group">
                    <li><a href=""><i class="lab la-twitter la-2x"></i></a></li>
                    <li><a href=""><i class="lab la-instagram la-2x"></i></a></li>
                    <li><a href=""><i class="lab la-youtube la-2x"></i></a></li>
                </ul>
            </ul>
        </div>
    </header>