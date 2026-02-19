<?php
use Etn\Core\Event\Event_Model;
class Kindaid_Event_Post_Long extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_event_post_long';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Event Post Long', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'event-post-long' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {

		$this->start_controls_section(
			'events_layout',
			[
				'label' => esc_html__( 'Events Layout', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
	     	);
			$this->add_control(
				'layout_style',
				[
					'label' => esc_html__( 'Layout Style', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'events_layout_1',
					'options' => [
						'events_layout_1' => esc_html__( 'Events Layout 01', 'textdomain' ),
						'events_layout_2' => esc_html__( 'Events Layout 02', 'textdomain' ),
					],
				]
			);
		$this->end_controls_section();


		// hero content
		$this->start_controls_section(
			'event_content',
			[
				'label' => esc_html__( 'Event Post Long', 'kindaid-core' ),
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
					'options' => post_cat('etn_category'),
				]
			);
			$this->add_control(
				'cat_exclude',
				[
					'label' => esc_html__( 'Cat Exclude', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT2,
					'label_block' => true,
					'multiple' => true,
					'options' => post_cat('etn_category'),
				]
			);
			$this->add_control(
				'post_exclude',
				[
					'label' => esc_html__( 'Post Exclude', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT2,
					'label_block' => true,
					'multiple' => true,
					'options' => get_all_post('etn'),
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

		$this->end_controls_section();
		//  hero content
	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
		$style_2 = ($settings['layout_style'] == 'events_layout_2') ? 'tp-event-4-style' : '';
		$args = array(
			'post_type' => 'etn',
			'order' => (!empty($settings['order'])) ? $settings['order'] : '',
			'orderby' => (!empty($settings['order_by'])) ? $settings['order_by'] : '',
			'posts_per_page' => (!empty($settings['post_include'])) ? $settings['post_include'] : -1,
			'post__not_in'   =>  (!empty($settings['post_exclude'])) ? $settings['post_exclude'] : '',
		);
		if(!empty($settings['cat_include'])){
			$args['tax_query'] =  array(
				array(
					'taxonomy' => 'etn_category',
					'field' => 'slug',
					'terms' => (!empty($settings['cat_exclude'])) ? $settings['cat_exclude'] : $settings['cat_include'] ,
					'operator' => (!empty($settings['cat_exclude'])) ? 'NOT IN' : 'IN' ,
				),
			);
		}
		$query = new \WP_Query( $args );
		?>
			

      <div class="tp-events-area fix p-relative <?php echo esc_attr($style_2);?>">
         <div class="container container-1324">
            <div class="row align-items-end">
               <div class="col-lg-12">
                  <div class="tp-event-2-wrap">
					<?php if( $query->have_posts() ):?>
						<?php while($query->have_posts()): $query->the_post();
						$event_id = get_the_id();  
						$event = new Event_Model( $event_id );
						$event_start_time = $event->etn_start_time;
						$event_end_time = $event->etn_end_time;
						$start_date = get_post_meta( $event_id, 'etn_start_date', true );
						$location = \Etn\Core\Event\Helper::instance()->display_event_location(get_the_ID());
					?>
					<?php if($settings['layout_style'] == 'events_layout_2'):?>
						<div class="tp-event-2-item d-flex align-items-center justify-content-between flex-wrap position-relative wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
							<div class="tp-event-4-thumb bg-position"><?php the_post_thumbnail();?></div>
							<div class="tp-event-2-left d-flex align-items-center flex-wrap mr-30">
							<div class="tp-event-2-date mb-25 mr-130">
								<h4 class="mb-0"><?php echo esc_html(date('m',strtotime($start_date)));?></h4>
								<span><?php echo esc_html(date('M, Y',strtotime($start_date)));?></span>
							</div>
							<div class="tp-event-2-content mb-25">
								<h3 class="tp-event-2-title mb-5"><a href="<?php the_permalink();?>">Promoting the right of poor children</a></h3>
								<div class="tp-event-meta">
									<span class="mr-20">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
										<path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#454449" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M8 3.80005V8.00005L10.8 9.40005" stroke="#454449" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg> 
										<?php echo esc_html($event_start_time) . ' - ' . esc_html($event_end_time);?>
									</span>
									<span>
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
										<path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#454449" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M8 3.80005V8.00005L10.8 9.40005" stroke="#454449" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg> 
										<?php echo esc_html($location);?>
									</span>
								</div>
							</div>
							</div>
							<div class="tp-event-2-link mb-25">
							<a class="tp-event-2-btn tp-btn-animetion" href="<?php the_permalink();?>">
								<span class="btn-icon">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1 10H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M10 1L19 10L10 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</span>
							</a>
							</div>    
						</div>
					<?php else:?>
						<div class="tp-event-2-item mb-10 d-flex align-items-center justify-content-between flex-wrap wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
							<div class="tp-event-2-left d-flex align-items-center flex-wrap">
							<div class="tp-event-2-date mb-25 mr-45">
								<h4 class="mb-0"><?php echo esc_html(date('m',strtotime($start_date)));?></h4>
								<span><?php echo esc_html(date('M, Y',strtotime($start_date)));?></span>
							</div>
							<?php if(has_post_thumbnail()):?>
								<div class="tp-event-2-thumb mr-40 fix d-inline-block mb-25">
									<?php the_post_thumbnail();?>
								</div>
								<?php endif;?>
							<div class="tp-event-2-content mb-25">
								<h3 class="tp-event-2-title mb-5"><a href="<?php the_permalink();?>" class="common-underline"><?php the_title();?></a></h3>
								<div class="tp-event-meta">
									<span class="mr-20">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
										<path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#454449" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M8 3.80005V8.00005L10.8 9.40005" stroke="#454449" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg> 
										<?php echo esc_html($event_start_time) . ' - ' . esc_html($event_end_time);?>
									</span>
									<span>
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
										<path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#454449" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M8 3.80005V8.00005L10.8 9.40005" stroke="#454449" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg> 
									<?php echo esc_html($location);?>
									</span>
								</div>
							</div>
							</div>
							<div class="tp-event-2-link mb-25">
							<a class="tp-event-2-btn tp-btn-animetion" href="<?php the_permalink();?>">
								<span class="btn-icon">
									<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1 7H13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</span>
							</a>
							</div>    
						</div>
					 <?php endif;?>
					<?php endwhile ; wp_reset_postdata(); endif;?>
                  </div>
               </div>
            </div>
         </div>
      </div>
			<?php
		}

}
$widgets_manager->register( new Kindaid_Event_Post_Long() );