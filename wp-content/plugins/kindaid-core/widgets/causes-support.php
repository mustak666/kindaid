<?php
class Kindaid_Causes_Support extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_causes_support';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Causes Support', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'causes-support' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {


		$this->start_controls_section(
			'support_layout',
			[
				'label' => esc_html__( 'Support Layout', 'kindaid-core' ),
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
						'layout_proggress' => esc_html__( 'Layout Proggress', 'textdomain' ),
						'layout_default' => esc_html__( 'Layout Default', 'textdomain' ),
					],
				]
			);
		$this->end_controls_section();



		// hero content
		$this->start_controls_section(
			'support_content',
			[
				'label' => esc_html__( 'Support Content', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' =>[
					'layout_style' => 'layout_default',
				],
			]
	     	);

			$this->add_control(
				'support_title',
				[
					'label' => esc_html__( 'Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'Support our mission', 'kindaid-core' ),
				]
			);
			$this->add_control(
				'support_description',
				[
					'label' => esc_html__( 'Support Description', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'Since 1994, we have supported more than 1,000 local
					partners to reach more than 15 million children,
					and we’re working with new organizations
					all the time.', 'kindaid-core' ),
				]
			);
			$this->add_control(
				'btn_url',
				[
					'label' => esc_html__( 'Btn URL', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::URL,
					'options' => [ 'url', 'is_external', 'nofollow' ],
					'default' => [
						'url' => '#',
						'is_external' => true,
						'nofollow' => true,
					],
					'label_block' => true,
				]
			);
			$this->add_control(
				'btn_text',
				[
					'label' => esc_html__( 'Btn Text', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'Get Help', 'kindaid-core' ),
				]
			);
		$this->end_controls_section();
		//  hero content
		// hero content
		$this->start_controls_section(
			'causes',
			[
				'label' => esc_html__( 'Causes Post', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
	     	);
			$this->add_control(
				'title',
				[
					'label' => esc_html__( 'Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'Support our Couse', 'kindaid-core' ),
					'condition' =>[
						'layout_style' => 'layout_default',
					],
				]
			);
			$this->add_control(
				'content',
				[
					'label' => esc_html__( 'Content', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'Help our organization by donating today! Donations go to making a difference for our cause.', 'kindaid-core' ),
					'condition' =>[
						'layout_style' => 'layout_default',
					],
				]
			);

			$this->add_control(
				'post_include',
				[
					'label' => esc_html__( 'Post Include', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'label_block' => true,
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


		$this->end_controls_section();
		//  hero content
	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
		$args = array(
			'post_type' => 'campaign',
			'order' => (!empty($settings['order'])) ? $settings['order'] : '',
			'orderby' => (!empty($settings['order_by'])) ? $settings['order_by'] : '',
			'posts_per_page' =>  1,
			'post__in' => !empty($settings['post_include'])
			? array_map('intval', (array) $settings['post_include'])
			: [],
		);
		$query = new \WP_Query( $args );

		if ( ! empty( $settings['btn_url']['url'] ) ) {
			$this->add_link_attributes( 'btn_args', $settings['btn_url'] );
			$this->add_render_attribute( 'btn_args', 'class' , 'tp-btn tp-btn-nopading tp-btn-animetion' );
		}
		
		?>
		<?php if($settings['layout_style'] == 'layout_proggress'): ?>

			<div class="tp-help-progress">
				<?php if( $query->have_posts() ):?>
					<?php while($query->have_posts()): $query->the_post();
					$campaign = charitable_get_campaign( get_the_id() );
					if(!empty($campaign)){
						$goal = charitable_format_money($campaign->get_goal());
						$raised = charitable_format_money($campaign->get_donated_amount ());
						$button_text = $campaign->get('donate_button_text',true);
						$percentage = ($campaign->get_donated_amount () > 0) ? round(($campaign->get_donated_amount () / $campaign->get_goal ()) * 100 ): 0;
					}
				?>	
				<div class="tp-progress tp-cta-progress mb-15">
					<h3 class="tp-cta-counter mb-5" data-color="#F8F3E7"><?php echo esc_html($percentage);?>%</h3>
					<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo esc_attr($percentage);?>" aria-valuemin="0" aria-valuemax="100">
						<div class="progress-bar wow slideInLeft" data-wow-duration="2s" data-wow-delay=".1s" style="width: <?php echo esc_attr($percentage);?>%"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="tp-help-amount">
						<h4><span>Collection - </span><?php echo esc_html($raised);?></h4>
						</div>
					</div>
					<div class="col-6">
						<div class="tp-help-amount text-end">
						<h4><span>Goal - </span><?php echo esc_html($goal);?></h4>
						</div>
					</div>
				</div>
				<?php endwhile ; wp_reset_postdata(); endif;?>
			</div>

		<?php else:?>
		<div class="tp-mission-area">
			<div class="container container-1424">
				<div class="tp-mission-spacing" data-bg-color="#ffca24">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<div class="tp-mission-content mr-50">
							<?php if(!empty($settings['support_title'])):?>
							  <h2 class="tp-mission-title mb-20"><?php echo kd_kses($settings['support_title']);?></h2>
							<?php endif;?>
							<?php if(!empty($settings['support_description'])):?>
							  <p class="mb-45"><?php echo kd_kses($settings['support_description']);?></p>
							<?php endif;?>
							<?php if(!empty($settings['btn_text'])):?>
								<a <?php $this->print_render_attribute_string( 'btn_args' ); ?>>
									<span class="btn-text"><?php echo esc_html($settings['btn_text']);?></span>
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
					<div class="col-lg-5">
						<?php if( $query->have_posts() ):?>
							<?php while($query->have_posts()): $query->the_post();
							$campaign_id = get_the_id();
							$campaign = charitable_get_campaign( get_the_id() );

							if(!empty($campaign)){
								$goal = charitable_format_money($campaign->get_goal());
								$raised = charitable_format_money($campaign->get_donated_amount ());
								$button_text = $campaign->get('donate_button_text',true);
								$percentage = ($campaign->get_donated_amount () > 0) ? round(($campaign->get_donated_amount () / $campaign->get_goal ()) * 100 ): 0;
							}
							if ( ! function_exists('get_campaign_total_donations_count') ) {
							function get_campaign_total_donations_count($campaign_id) {
								global $wpdb;

								// Charitable donation table
								$table_name = $wpdb->prefix . 'charitable_campaign_donations';

								// Total donations count query
								$total = $wpdb->get_var(
									$wpdb->prepare(
										"SELECT COUNT(*) FROM $table_name WHERE campaign_id = %d",
										$campaign_id
									)
								);

								return $total;
							}
							}
							$total_donation = get_campaign_total_donations_count($campaign_id);
						?>	
						<div class="tp-custom-donate-wrap" data-bg-color="#fcf8ec">
							<div class="tp-custom-donate-content text-center">
								<?php if(!empty($settings['title'])):?>
								  <h3 class="tp-custom-donate-title mb-10"><?php echo esc_html($settings['title']);?></h3>
								<?php endif;?>
								<?php if(!empty($settings['content'])):?>
								  <p class="tp-custom-donate-dec mb-30"><?php echo kd_kses($settings['content']);?></p>
								<?php endif;?>
							</div>
							<div class="tp-custom-donate-inner">
								<div class="tp-custom-donate-count">
									<ul>
										<li>
											<b><?php echo esc_html($raised);?></b>
											<span><?php echo esc_html__('Raised','kindaid-core');?></span>
										</li>
										<li>
											<b><?php echo esc_html($total_donation);?></b>
											<span><?php echo esc_html__('Donations','kindaid-core');?></span>
										</li>
										<li>
											<b><?php echo esc_html($goal);?></b>
											<span><?php echo esc_html__('Goal','kindaid-core');?></span>
										</li>
									</ul>
								</div>
							</div>
							<div class="tp-custom-donate-progress mb-20">
								<div class="tp-progress mb-10">
									<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo esc_attr($percentage);?>" aria-valuemin="0" aria-valuemax="100">
										<div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s" style="width: <?php echo esc_attr($percentage);?>%"></div>
									</div>
								</div>
							</div>
							<div class="tp-custom-donate-button text-center">
								<a class="tp-btn tp-btn-animetion tp-btn-mulberry w-100 justify-content-center mb-10" href="<?php the_permalink();?>">
									<span class="btn-text"><?php echo esc_html($button_text);?></span>
									<span class="btn-icon">
										<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</span>
								</a>
							<span class="tp-custom-donate-secure"><?php echo esc_html__('100% Secure Donation','kindaid-core');?></span>
							</div>
						</div>
						<?php endwhile ; wp_reset_postdata(); endif;?>
					</div>       
				</div>
				</div>
			</div>
		</div>
		<?php endif;?>
		<?php
		}

}
$widgets_manager->register( new Kindaid_Causes_Support() );