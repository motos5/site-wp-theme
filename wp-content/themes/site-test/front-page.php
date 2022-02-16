
<?php get_header();?>
	<body>
		<!-- Start header -->
		<header class="header">
			<div class="container-head">
				<div class="header__content">
					<h1 class="header__title">
                        <?php the_field('title', $post->ID); ?>
					</h1>
					<p class="header__text">
                        <?php the_field('description', $post->ID); ?>
					</p>
				</div>
				<nav class="menu">
					<ul class="menu__list">
						<li class="menu__item">
                            <svg class="menu__info" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 14.667A6.667 6.667 0 108 1.333a6.667 6.667 0 000 13.334zm0-4V8m0-2.667h.007" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
							<a class="menu__link" href="#">IT Sicherheit</a>
						</li>
						<li class="menu__item">
                            <svg class="menu__info" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 14.667A6.667 6.667 0 108 1.333a6.667 6.667 0 000 13.334zm0-4V8m0-2.667h.007" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
							<a class="menu__link" href="#">IT Strategie</a>
						</li>
						<li class="menu__item">
							<svg class="menu__info" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 14.667A6.667 6.667 0 108 1.333a6.667 6.667 0 000 13.334zm0-4V8m0-2.667h.007" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
							<a class="menu__link" href="#">IT Infrastruktur</a>
						</li>
						<li class="menu__item">
							<svg class="menu__info" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 14.667A6.667 6.667 0 108 1.333a6.667 6.667 0 000 13.334zm0-4V8m0-2.667h.007" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
							<a class="menu__link" href="#">IT Support</a>
						</li>
						<li class="menu__item">
							<svg class="menu__info" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 14.667A6.667 6.667 0 108 1.333a6.667 6.667 0 000 13.334zm0-4V8m0-2.667h.007" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
							<a class="menu__link" href="#">Lorem ipsum</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<!-- End header -->

		<!-- Start contents -->
		<div class="contents">
			<div class="container">
				<div class="contents__items">

                <?php
                    global $post;

                    $myposts = get_posts([ 
                        'numberposts' => 6
                    ]);

                    if( $myposts ){
                        foreach( $myposts as $post ){
                            setup_postdata( $post );
                            ?>
                            <div class="contents__item">
                            <?php the_post_thumbnail( 'medium', array('class' => "contents__img",)); ?>
                                <div class="contents__box">
                                    <div class="contents__info info">
                                        <p class="info__author">by <?php the_author(); ?>  / <?php the_time('j F'); ?></p>
                                    </div>
                                    <h2 class="contents__title"><?php the_title(); ?></h2>
                                    <div class="contents__text">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <a class="contents__btn" href="#">IT Abteilung</a>
                                    <a class="contents__podcast" href="<?php echo get_the_permalink(); ?>">
                                        <p class="contents__podcast-text">Podcast anhören</p>
                                        <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 16L9 9L2 2" stroke="#18212D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        <?php 
                        }
                    } else {
                        echo 'No entries found';
                    }
                
                    wp_reset_postdata();
                ?>
				</div>
			</div>
		</div>
		<!-- End contents -->
<?php get_footer();  ?>