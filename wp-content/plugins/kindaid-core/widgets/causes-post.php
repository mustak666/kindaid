<?php
class Kindaid_Causes_Post extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_causes_post';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Causes Post', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'causes-post' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {


		$this->start_controls_section(
			'causes_layout',
			[
				'label' => esc_html__( 'Causes Layout', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
	     	);
			$this->add_control(
				'layout_style',
				[
					'label' => esc_html__( 'Layout Style', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'layout_default',
					'options' => [
						'layout_bg' => esc_html__( 'Layout Bg', 'textdomain' ),
						'layout_border' => esc_html__( 'Layout Border', 'textdomain' ),
						'layout_default' => esc_html__( 'Layout Default', 'textdomain' ),
					],
				]
			);
		$this->end_controls_section();
		// hero content
		$this->start_controls_section(
			'causes',
			[
				'label' => esc_html__( 'Causes Post', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
	     	);
			$this->add_control(
				'post_include',
				[
					'label' => esc_html__( 'Post Include', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'default' => '6',
				]
			);
			
			$this->add_control(
				'cat_include',
				[
					'label' => esc_html__( 'Cat Include', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT2,
					'label_block' => true,
					'multiple' => true,
					'options' => post_cat('campaign_category'),
				]
			);
			$this->add_control(
				'cat_exclude',
				[
					'label' => esc_html__( 'Cat Exclude', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT2,
					'label_block' => true,
					'multiple' => true,
					'options' => post_cat('campaign_category'),
				]
			);
			$this->add_control(
				'post_exclude',
				[
					'label' => esc_html__( 'Post Exclude', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT2,
					'label_block' => true,
					'multiple' => true,
					'options' => get_all_post('campaign'),
				]
			);

			$this->add_control(
				'order',
				[
					'label' => esc_html__( 'Order', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'ASC',
					'options' => [
						'ASC' => esc_html__( 'ASC', 'textdomain' ),
						'DSC'  => esc_html__( 'DSC', 'textdomain' ),
					],
				]
			);

			$this->add_control(
				'order_by',
				[
					'label' => esc_html__( 'Order', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'name',
					'options' => [
						'name' => esc_html__( 'Name', 'textdomain' ),
						'date'  => esc_html__( 'Date', 'textdomain' ),
						'title'  => esc_html__( 'Title', 'textdomain' ),
						'rand'  => esc_html__( 'Rand', 'textdomain' ),
					],
				]
			);

			$this->add_control(
				'pagination_switch',
				[
					'label' => esc_html__( 'Paginaion Switch', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'textdomain' ),
					'label_off' => esc_html__( 'Hide', 'textdomain' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);	


		$this->end_controls_section();
		//  hero content
	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
	    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
		$args = array(
			'post_type' => 'campaign',
			'order' => (!empty($settings['order'])) ? $settings['order'] : '',
			'orderby' => (!empty($settings['order_by'])) ? $settings['order_by'] : '',
			'posts_per_page' => (!empty($settings['post_include'])) ? $settings['post_include'] : -1,
			'post__not_in'   =>  (!empty($settings['post_exclude'])) ? $settings['post_exclude'] : '',
		);

		if(!empty($settings['cat_include'])){
			$args['tax_query'] =  array(
				array(
					'taxonomy' => 'campaign_category',
					'field' => 'slug',
					'terms' => (!empty($settings['cat_exclude'])) ? $settings['cat_exclude'] : $settings['cat_include'] ,
					'operator' => (!empty($settings['cat_exclude'])) ? 'NOT IN' : 'IN' ,
				),
			);
		}
		$query = new \WP_Query( $args );
		?>
			<div class="tp-causes-area pt-120 pb-130 fix p-relative">
				<div class="container container-1424">
					<div class="row">
						<?php if( $query->have_posts() ):?>
							<?php while($query->have_posts()): $query->the_post();
							$campaign = charitable_get_campaign( get_the_id() );
							$goal = charitable_format_money($campaign->get_goal());
							$raised = charitable_format_money($campaign->get_donated_amount ());
							$button_text = $campaign->get('donate_button_text',true);
							$percentage = ($campaign->get_donated_amount () > 0) ?($campaign->get_donated_amount () / $campaign->get_goal ()) * 100 : 0;
						?>
							<?php if($settings['layout_style'] == 'layout_bg') : ?>
								<div class="col-xl-4 col-lg-6 col-md-6">
									<div class="tp-causes-wrap tp-causes-2-style">
										<div class="tp-causes-inner">
											<div class="tp-causes-thumb fix mb-25">
												<?php the_post_thumbnail();?>
											</div>
											<div class="tp-causes-content">
												<h3 class="tp-causes-title mb-10"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
												<p class="tp-causes-dec mb-0"><?php echo wp_trim_words(get_the_content(),10);?></p>
											</div>
										</div>
										<div class="tp-causes-button">
											<div class="tp-progress mb-10">
												<div class="tp-progress-top d-flex justify-content-between mb-5">
													<span><?php echo esc_html__('Donation','kindaid-core');?></span>
													<label><?php echo esc_html($percentage);?>%</label>
												</div>
												<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo esc_attr($percentage);?>" aria-valuemin="0" aria-valuemax="100">
												<div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s" style="width: <?php echo esc_attr($percentage);?>%"></div>
												</div>
											</div>
											<div class="row">
												<div class="col-6">
													<div class="tp-causes-amount">
														<label><?php echo esc_html__('Goals:','kindaid-core');?></label>
														<span><?php echo esc_html($goal);?></span>
													</div>
												</div>
												<div class="col-6">
													<div class="tp-causes-amount text-end">
														<label><?php echo esc_html__('Raised:','kindaid-core');?></label>
														<span><?php echo esc_html($raised);?></span>
													</div>
												</div>
											</div>
											<?php if(!empty($button_text)):?>
												<a class="tp-btn tp-btn-animetion mt-20 tp-btn-mulberry w-100 justify-content-center" href="<?php the_permalink();?>">
													<span class="btn-text"><?php echo esc_html($button_text);?></span>
													<span class="btn-icon">
													<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
														<path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
													</svg>
													</span>
												</a>
											<?php endif;?>
										</div>
									</div>
								</div>
							<?php elseif($settings['layout_style'] == 'layout_border'):?>
								<div class="col-xl-4 col-lg-6 col-md-6">
									<div class="tp-causes-wrap mb-30 tp-causes-3-style">
										<div class="tp-causes-inner">
											<div class="tp-causes-thumb fix mb-25">
												<?php the_post_thumbnail();?>
											</div>
											<div class="tp-causes-content">
												<div class="tp-causes-border">
												  <h3 class="tp-causes-title mb-10"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
												  <p class="tp-causes-dec mb-20"><?php echo wp_trim_words(get_the_content(),10);?></p>
												</div>
												<div class="tp-progress mb-10 mt-20">
												<div class="tp-progress-top d-flex justify-content-between mb-5">
													<span><?php echo esc_html__('Donation','kindaid-core');?></span>
													<label><?php echo esc_html($percentage);?>%</label>
												</div>
												<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo esc_attr($percentage);?>%" aria-valuemin="0" aria-valuemax="100">
													<div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s" style="width: <?php echo esc_attr($percentage);?>%"></div>
												</div>
												</div>
												<div class="row">
													<div class="col-6">
														<div class="tp-causes-amount">
															<label><?php echo esc_html__('Goals:','kindaid-core');?></label>
															<span><?php echo esc_html($goal);?></span>
														</div>
													</div>
													<div class="col-6">
														<div class="tp-causes-amount text-end">
															<label><?php echo esc_html__('Raised:','kindaid-core');?></label>
															<span><?php echo esc_html($raised);?></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<?php if(!empty($button_text)):?>
											<div class="tp-causes-button">
												<a class="tp-btn tp-btn-animetion tp-btn-mulberry w-100 justify-content-center" href="<?php the_permalink();?>">
													<span class="btn-text"><?php echo esc_html($button_text);?></span>
													<span class="btn-icon">
													<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
														<path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
													</svg>
													</span>
												</a>
											</div>
										<?php endif;?>
									</div>
								</div>
							<?php else:?>
								<div class="col-xl-4 col-lg-6 col-md-6">
									<div class="tp-causes-wrap mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
										<div class="tp-causes-thumb fix mb-25">
											<?php the_post_thumbnail();?>
										</div>
										<div class="tp-causes-content mb-35">
											<div class="tp-causes-border">
												<h3 class="tp-causes-title mb-10"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
												<p class="tp-causes-dec mb-20"><?php echo wp_trim_words(get_the_content(),10);?></p>
											</div>
											<div class="tp-progress mb-10 mt-20">
												<div class="tp-progress-top d-flex justify-content-between mb-5">
													<span><?php echo esc_html__('Donation','kindaid-core');?></span>
													<label><?php echo esc_html($percentage);?>%</label>
												</div>
												<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo esc_attr($percentage);?>" aria-valuemin="0" aria-valuemax="100">
													<div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s" style="width: <?php echo esc_attr($percentage);?>%"></div>
												</div>
											</div>
											<div class="row">
												<div class="col-6">
													<div class="tp-causes-amount">
														<label><?php echo esc_html__('Goals:','kindaid-core');?></label>
														<span><?php echo esc_html($goal);?></span>
													</div>
												</div>
												<div class="col-6">
													<div class="tp-causes-amount text-end">
														<label><?php echo esc_html__('Raised:','kindaid-core');?></label>
														<span><?php echo esc_html($raised);?></span>
													</div>
												</div>
											</div>
										</div>
										<?php if(!empty($button_text)):?>
											<div class="tp-causes-button">
												<a class="tp-btn tp-btn-animetion tp-btn-mulberry w-100 justify-content-center" href="<?php the_permalink();?>">
												<span class="btn-text"><?php echo esc_html($button_text);?></span>
												<span class="btn-icon">
													<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
														<path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
													</svg>
												</span>
												</a>
											</div>
										<?php endif;?>
									</div>
								</div>
							<?php endif;?>
						<?php endwhile ; wp_reset_postdata(); endif;?>
						<?php if(!empty($settings['pagination_switch'])):?>
							<div class="col-12">
								<div class="tp-pagination text-center mt-20 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
								<?php 
									echo paginate_links( array(
										'total'     => $query->max_num_pages,
										'current'   => $paged,
										'type'      => 'list',
										'prev_text' => '<i class="far fa-arrow-left"></i>',
										'next_text' => '<i class="far fa-arrow-right"></i>',
										'end_size'  => 1, 
										'mid_size'  => 1,
									) );
								?>
								</div>
							</div>
						<?php endif;?>
					</div>
				</div>
			</div>
		<?php
		}

}
$widgets_manager->register( new Kindaid_Causes_Post() );