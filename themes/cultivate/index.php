<?php

/**
 * Template Name: Home
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cultivate
 */

get_header(); ?>
<section class="promo">
	<div class="container">
		<?php if (have_rows('section_i')) : while (have_rows('section_i')) : the_row(); ?>
				<div class="promo__wrap">
					<h1 class="promo__title"><?php the_sub_field('section_i_title'); ?></h1>
					<div class="promo__subtitle"><?php the_sub_field('section_i_description'); ?></div>
					<?php if (have_rows('section_i_button_box')) : while (have_rows('section_i_button_box')) : the_row(); ?>
							<a href="<?php the_sub_field('section_i_button_box_link'); ?>" class="promo__btn btn btn-reset"><?php the_sub_field('section_i_button_box_text'); ?></a>
					<?php endwhile;
					endif; ?>
				</div>
		<?php endwhile;
		endif; ?>
	</div>
</section>
<?php if (have_rows('section_ii')) : while (have_rows('section_ii')) : the_row(); ?>
		<section class="cat">
			<div class="container">
				<div class="cat__wrap">
					<div class="cat__title title"><?php the_sub_field('section_ii_title'); ?></div>
					<div class="cat__subtitle"><?php the_sub_field('section_ii_description'); ?></div>
					<div class="cat__items">
						<?php if (have_rows('section_ii_category_box')) : while (have_rows('section_ii_category_box')) : the_row(); ?>
								<div class="cat__item">
									<img src="<?php the_sub_field('section_ii_category_box_image'); ?>" alt="img" class="cat__img">
									<div class="cat__content">
										<div class="cat__name"><?php the_sub_field('section_ii_category_box_name'); ?></div>
										<div class="cat__text"><?php the_sub_field('section_ii_category_box_description'); ?></div>
									</div>
								</div>
						<?php endwhile;
						endif; ?>
					</div>
				</div>
			</div>
		</section>
<?php endwhile;
endif; ?>
<?php if (have_rows('section_iii')) : while (have_rows('section_iii')) : the_row(); ?>
		<section class="perf-class">
			<div class="container">
				<div class="perf-class__wrap">
					<div class="perf-class__item">
						<div class="perf-class__img">
							<img src="<?php the_sub_field('section_iii_image'); ?>" alt="img">
						</div>
					</div>
					<div class="perf-class__item">
						<div class="perf-class__title title"><?php the_sub_field('section_iii_title'); ?></div>
						<div class="perf-class__text">
							<p><?php the_sub_field('section_iii_description'); ?></p>
						</div>
						<?php if (have_rows('section_iii_button')) : while (have_rows('section_iii_button')) : the_row(); ?>
						<a href="<?php the_sub_field('section_iii_button_link'); ?>" class="perf-class__btn btn-outline btn-reset"><?php the_sub_field('section_iii_button_name'); ?></a>
						<?php endwhile;
						endif; ?>
					</div>
				</div>
			</div>
		</section>
<?php endwhile;
endif; ?>
<?php if (have_rows('teacher')) : while (have_rows('teacher')) : the_row(); ?>
		<?php
		$count = count(get_sub_field('teacher_item'));
		if ($count == 1) { ?>
			<section class="teacher2">
				<div class="container">
					<div class="teacher2__wrap">
						<div class="teacher2__item">
							<h2 class="teacher2__title title"><?php the_sub_field('teacher_title'); ?></h2>
							<?php if (have_rows('teacher_item')) : while (have_rows('teacher_item')) : the_row(); ?>
								<div class="teacher2__text"><?php the_sub_field('teacher_item_description'); ?></div>
						</div>
						<div class="teacher2__item">
							<div class="teacher2__img"><img src="<?php the_sub_field('teacher_item_image'); ?>" alt=""></div>
						</div>
				<?php endwhile;
							endif; ?>
					</div>
				</div>
			</section>
		<?php } elseif ($count == 4) { ?>
			<section class="teacher">
				<div class="container">
					<div class="teacher__wrap">
						<div class="teacher__title title"><?php the_sub_field('teacher_title'); ?></div>
						<div class="teacher__items">
							<?php if (have_rows('teacher_item')) : while (have_rows('teacher_item')) : the_row(); ?>
									<div class="teacher__item">
										<div class="teacher__img"><img src="<?php the_sub_field('teacher_item_image'); ?>" alt="img"></div>
										<div class="teacher__descr">
											<div class="teacher__name"><?php the_sub_field('teacher_item_name'); ?></div>
											<div class="teacher__prof"><?php the_sub_field('teacher_item_profession'); ?></div>
										</div>
									</div>
							<?php endwhile;
							endif; ?>
						</div>
					</div>
				</div>
			</section>
		<?php } ?>
<?php endwhile;
endif; ?>
<?php if (have_rows('join_section')) : while (have_rows('join_section')) : the_row(); ?>
		<section class="join">
			<div class="container">
				<div class="join__wrap">
					<div class="join__title title"><?php the_sub_field('join_section_title'); ?></div>
					<div class="join__subtitle"><?php the_sub_field('join_section_description'); ?></div>
					<?php if (have_rows('prices', 'option')) : while (have_rows('prices', 'option')) : the_row(); ?>
							<div class="join__items">
								<?php if (have_rows('price_box_month', 'option')) : while (have_rows('price_box_month', 'option')) : the_row(); ?>
										<div class="join__item">
											<div class="join__info">
												<div class="join__prices">
													<div class="join__month">MONTHLY</div>
													<div class="join__price"><?php the_sub_field('price_month'); ?><br>
														<span>/month</span>
													</div>
												</div>
												<ul class="join__list">
													<?php if (have_rows('price_month_list', 'option')) : while (have_rows('price_month_list', 'option')) : the_row(); ?>
															<li><?php the_sub_field('price_month_list_item'); ?></li>
													<?php endwhile;
													endif; ?>
												</ul>
											</div>
											<?php if (have_rows('price_month_link_box', 'option')) : while (have_rows('price_month_link_box', 'option')) : the_row(); ?>
													<a href="<?php the_sub_field('price_month_link_box_link'); ?>" class="join__btn btn-outline btn-reset"><?php the_sub_field('price_month_link_box_text'); ?></a>
											<?php endwhile;
											endif; ?>
										</div>
								<?php endwhile;
								endif; ?>
								<?php if (have_rows('price_box_year', 'option')) : while (have_rows('price_box_year', 'option')) : the_row(); ?>
										<div class="join__item">
											<div class="join__info">
												<div class="join__prices">
													<div class="join__month">ANNUAL</div>
													<div class="join__price"><?php the_sub_field('price_year'); ?><br>
														<span>/year</span>
													</div>
												</div>
												<ul class="join__list">
													<?php if (have_rows('price_year_list', 'option')) : while (have_rows('price_year_list', 'option')) : the_row(); ?>
															<li><?php the_sub_field('price_year_list_item'); ?></li>
													<?php endwhile;
													endif; ?>
												</ul>
											</div>
											<?php if (have_rows('price_year_link_box', 'option')) : while (have_rows('price_year_link_box', 'option')) : the_row(); ?>
													<a href="<?php the_sub_field('price_year_link_box_link'); ?>" class="join__btn btn-outline btn-reset"><?php the_sub_field('price_year_link_box_text'); ?></a>
											<?php endwhile;
											endif; ?>
										</div>
								<?php endwhile;
								endif; ?>
							</div>
					<?php endwhile;
					endif; ?>
				</div>
			</div>
		</section>
<?php endwhile;
endif; ?>
<?php if (have_rows('review_section')) : while (have_rows('review_section')) : the_row(); ?>
		<section class="members">
			<div class="container">
				<div class="members__wrap">
					<div class="members__title title"><?php the_sub_field('review_section_title'); ?></div>
					<div class="members__slider swiper mySwiper">
						<div class="members__slider_wrap swiper-wrapper">
							<?php if (have_rows('review_item')) : while (have_rows('review_item')) : the_row(); ?>
									<div class="members__slide swiper-slide">
										<?php $rating = get_sub_field('review_item_stars'); ?>
										<div class="members__raiting">
											<img style="
											height: 20px;
											object-position: left;
											object-fit: none;
											<?php
											if ($rating == 1) {
												echo 'width: 22px;';
											}
											if ($rating == 2) {
												echo 'width: 54px;';
											}
											if ($rating == 3) {
												echo 'width: 83px;';
											}
											if ($rating == 4) {
												echo 'width: 114px;';
											}
											if ($rating == 5) {
												echo 'width: 142px;';
											}
											?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/rating.png" alt="img">
										</div>
										<div class="members__text"><?php the_sub_field('review_item_text'); ?></div>
										<div class="members__author">
											<div class="members__img"><img src="<?php the_sub_field('review_item_photo'); ?>" alt="img"></div>
											<div class="members__name"><?php the_sub_field('review_item_name'); ?></div>
										</div>
									</div>
							<?php endwhile;
							endif; ?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>
		</section>
<?php endwhile;
endif; ?>
<section class="info">
	<div class="container">
		<div class="info__wrap">
			<?php if (have_rows('section_info')) : while (have_rows('section_info')) : the_row(); ?>
					<div class="info__item">
						<div class="info__img"><img src="<?php the_sub_field('section_info_image'); ?>" alt="img"></div>
						<div class="info__name"><?php the_sub_field('section_info_title'); ?></div>
						<div class="info__descr"><?php the_sub_field('section_info_text'); ?></div>
					</div>
			<?php endwhile;
			endif; ?>
		</div>
	</div>
</section>
<?php get_footer('newsletter');
