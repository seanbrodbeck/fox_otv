<?php
/**
 * Template Name: Article
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package otv
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section id="article-header">
				<a href="/"><img class="otv-article-logo" src="/ontheverge/wp-content/themes/otv/dist/images/otv-logo-header.svg" width="220" height="auto"></a>
				<div class="container">
					<div class="row flexcenter">
						<div class="col-md-5 article-icon">
							<div class="article-icon-wrap">
								<?php the_field('article_icon')?>
							</div>
						</div>
						<div class="col-md-6 article-title">
							<div class="article-number"><?php the_field('article_number')?> &mdash;</div>
							<h1><?php the_title();?></h1>
							<p class="large red"><?php the_field('article_subheader')?></p>
						</div>
					</div>
					<div class="jumpdown nojumpmobile"><a class="jumpdownlink bounce" href="#article-content"><img src="/ontheverge/wp-content/themes/otv/dist/images/scroll-down.svg"></a></div>
				</div>
			</section>

			<section id="article-content">
				<div class="container">
						<div class="row">
							<div class="col-md-5">
								<?php the_field('article_introduction')?>
							</div>
						</div>
				</div>
				<div class="story-nav">
					<?php if(get_field('story_sections')): ?>
					<ul>
					<?php while(has_sub_field('story_sections')): ?>
						<li>
							<h2><span><?php the_sub_field('story_section_title'); ?></span> <img src="/ontheverge/wp-content/themes/otv/dist/images/icon-plus.svg" /></h2>
						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				</div>
				<div id="story-jump" class="stories">
					<?php if( have_rows('story_sections') ): ?><?php while( have_rows('story_sections') ): the_row(); ?>
						<div class="story-item">
							<div class="close-story"><img src="/ontheverge/wp-content/themes/otv/dist/images/icon-close.svg" width="15" height="auto"/></div>
							<div class="story-outter-wrap">
								<div class="story-inner-wrap">

								<h2><?php the_sub_field('story_section_title'); ?></h2>
								<p class="large"><?php the_sub_field('story_section_subtitle'); ?></p>
								<p><?php the_sub_field('story_section_content'); ?></p>
								<?php if( have_rows('more_story_content') ): ?>
									<div class="more-content">
									<?php while( have_rows('more_story_content') ): the_row(); ?>
										<div class="more-content-col">
											<?php the_sub_field('more_story_content_column'); ?>
										</div>
									<?php endwhile; ?>
									</div>
								<?php endif; ?>
							</div>
							<div class="story-fade"></div>
							</div>
							<div class="story-item-icon"><img src="<?php the_sub_field('story_section_icon'); ?>" width="100%" height="auto"/></div>
						</div>	
					<?php endwhile; ?><?php endif;  ?>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

		</div><!-- #content -->

	</div><!-- #page -->

<?php
get_footer();
