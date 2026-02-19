<?php
class Kindaid_Blog_Post extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_blog_post';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Blog Post', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'blog-post' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {

		// hero content
		$this->start_controls_section(
			'hero_content',
			[
				'label' => esc_html__( 'Blog Post', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
	     	);
			$this->add_control(
				'post_include',
				[
					'label' => esc_html__( 'Post Include', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'default' => 6,
				]
			);
			
			$this->add_control(
				'cat_include',
				[
					'label' => esc_html__( 'Cat Include', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT2,
					'label_block' => true,
					'multiple' => true,
					'options' => post_cat(),
				]
			);
			$this->add_control(
				'cat_exclude',
				[
					'label' => esc_html__( 'Cat Exclude', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT2,
					'label_block' => true,
					'multiple' => true,
					'options' => post_cat(),
				]
			);
			$this->add_control(
				'post_exclude',
				[
					'label' => esc_html__( 'Post Exclude', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT2,
					'label_block' => true,
					'multiple' => true,
					'options' => get_all_post(),
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

		$args = array(
			'post_type' => 'post',
			'order' => (!empty($settings['order'])) ? $settings['order'] : '',
			'orderby' => (!empty($settings['order_by'])) ? $settings['order_by'] : '',
			'posts_per_page' => (!empty($settings['post_include'])) ? $settings['post_include'] : -1,
			'post__not_in'   =>  (!empty($settings['post_exclude'])) ? $settings['post_exclude'] : '',
		);
		if(!empty($settings['cat_include'])){
			$args['tax_query'] =  array(
				array(
					'taxonomy' => 'category',
					'field' => 'slug',
					'terms' => (!empty($settings['cat_exclude'])) ? $settings['cat_exclude'] : $settings['cat_include'] ,
					'operator' => (!empty($settings['cat_exclude'])) ? 'NOT IN' : 'IN' ,
				),
			);
		}
		$query = new \WP_Query( $args );
		?>
			
			<!-- tp-blog-area start  -->
				<div class="tp-blog-area tp-blog-style fix p-relative">
					<div class="container container-1424">
						<div class="row">
							<?php if( $query->have_posts() ):?>
								<?php while($query->have_posts()): $query->the_post();
								$categories = get_the_category(get_the_ID());
								$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
							?>
							<div class="col-xl-4 col-md-6">
								<div class="tp-blog-item tp-event p-relative mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
									<?php if(has_post_thumbnail()):?>
										<div class="tp-blog-thumb tp-event-img fix mb-25">
											<?php the_post_thumbnail();?>
											<div class="tp-event-date">
												<span><?php echo get_the_date('M'); ?></span>
												<h4><?php echo wp_date('j'); ?></h4>
											</div>
										</div>
									<?php endif;?>
									<div class="tp-blog-content">
										<?php if(!empty($categories)):?>
											<div class="tp-blog-cat mb-5 d-flex">
											<span class="dvdr"><?php echo kd_kses(donacion_get_cat_data($categories,'<span class="dvdr"></span>','slug'));?></span>
											</div>
										<?php endif;?>
										<h3 class="tp-blog-title"><a href="<?php the_permalink();?>" class="common-underline"><?php the_title();?></a></h3>   
									</div>
								</div>
							</div>
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
			<!-- tp-blog-area end  -->

			<?php
		}

}
$widgets_manager->register( new Kindaid_Blog_Post() );