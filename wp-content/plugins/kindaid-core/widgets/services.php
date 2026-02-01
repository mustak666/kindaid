<?php
class Kindaid_Services extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_services';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Services', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'services' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {

		// hero content
		$this->start_controls_section(
			'services_content',
			[
				'label' => esc_html__( 'Services Content', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
	     	);
			$this->add_control(
				'sub_title',
				[
					'label' => esc_html__( 'Sub Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Need Help...', 'kindaid-core' ),
					'label_block' => true,
				]
			);
			$this->add_control(
				'title',
				[
					'label' => esc_html__( 'Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'Being life saver for someone', 'kindaid-core' ),
				]
			);
			$this->add_control(
				'description',
				[
					'label' => esc_html__( 'Description', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'Hempel Foundation is the majority owner of the Kindaid Group!', 'kindaid-core' ),
				]
			);
		$this->end_controls_section();
		//  hero content

		// hero image 
		$this->start_controls_section(
			'services_img',
			[
				'label' => esc_html__( 'Services Image', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		   );
			$this->add_control(
				'image',
				[
					'label' => esc_html__( 'Choose Image', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
			$this->add_control(
				'shape_img',
				[
					'label' => esc_html__( 'Shape Image', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
		$this->end_controls_section();
		// hero image 

		// hero image 
		$this->start_controls_section(
			'services_main',
			[
				'label' => esc_html__( 'Services List', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		   );
		   $repeater = new \Elementor\Repeater();

			$repeater->add_control(
				'icon_style',
				[
					'label' => esc_html__( 'Icon Style', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'svg',
					'options' => [
						'fontawesome' => esc_html__( 'Fontawesome Icon', 'textdomain' ),
						'svg' => esc_html__( 'SVG Icon', 'textdomain' ),
						'img' => esc_html__( 'Image Icon', 'textdomain' ),
					],
				]
			);  
			$repeater->add_control(
				'icon',
				[
					'label' => esc_html__( 'Icon', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-smile',
						'library' => 'fa-solid',
					],
					'condition' => [
						'icon_style' => 'fontawesome',
					],
				]
			);
			$repeater->add_control(
				'image_icon',
				[
					'label' => esc_html__( 'Icon Image', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
					'condition' => [
						'icon_style' => 'img',
					],
				]
			);
			$repeater->add_control(
				'svg',
				[
					'label' => esc_html__( 'Svg', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'condition' => [
						'icon_style' => 'svg',
					],
				]
			);

			// content 
			$repeater->add_control(
				'title',
				[
					'label' => esc_html__( 'Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'deg',
				[
					'label' => esc_html__( 'Description', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
				]
			);
			$repeater->add_control(
				'url',
				[
					'label' => esc_html__( 'Url', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
				]
			);
			$this->add_control(
				'services_list',
				[
					'label' => esc_html__( 'Services List', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
							'title' => esc_html__( 'Healthy Food', 'textdomain' ),
							'deg' => esc_html__( 'Health care are essential for a child s growth.', 'textdomain' ),
						],
						[
							'title' => esc_html__( 'Medical Care', 'textdomain' ),
							'deg' => esc_html__( 'Health care are essential for a childs growth.', 'textdomain' ),
						],
					],
					'title_field' => '{{{ title }}}',
				]
			);


		$this->end_controls_section();
		// hero image 


	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
		$image_url = (!empty( $settings['image']['id'])) ? wp_get_attachment_image_url( $settings['image']['id'], 'full' ) :  $settings['image']['url'];
		$image_alt = get_post_meta( $settings['image']['id'], '_wp_attachment_image_alt', true );
		?>
		<div class="tp-service-area tp-bg-mulberry p-relative">
			<?php if(!empty($shape_image_url)):?>
			  <img class="tp-service-shape" src="<?php echo esc_url($shape_image_url);?>" alt="<?php echo esc_attr($shape_image_alt);?>">
			<?php endif;?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xxl-3 col-xl-4 d-none d-xl-block">
						<div class="tp-service-thumb">
							<img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt);?>">
						</div>
					</div>
					<div class="col-xxl-8 col-xl-8">
						<div class="tp-service-content-wrap pt-95 pb-90 pr-90">
							<?php if(!empty($settings['title']) || !empty($settings['sub_title'])):?>
								<div class="tp-service-title-wrap mb-40">
									<?php if(!empty($settings['sub_title'])):?>
									<span class="tp-section-subtitle tp-section-subtitle-yellow d-inline-block mb-10 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s"><?php echo esc_html($settings['sub_title']);?></span>
									<?php endif;?>
									<?php if(!empty($settings['title'])):?>
									<h2 class="tp-section-title tp-section-title-white wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s"><?php echo esc_html($settings['title']);?></h2>
									<?php endif;?>
									<?php if(!empty($settings['description'])):?>
									<p><?php echo esc_html($settings['description']);?></p>
									<?php endif;?>
								</div>
							<?php endif;?>
							<div class="row">
								<?php foreach($settings['services_list'] as $item):

								?>
								<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
									<div class="tp-service-item icon-anime-wrap mb-25 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
										<?php if(!empty($item['icon']) || !empty($item['image_icon']) || !empty($item['svg'])):?>
											<span class="tp-service-icon icon-anime mb-25 d-inline-block">
												<?php if($item['icon_style'] == 'fontawesome'):?>
													<?php \Elementor\Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] ); ?>
												<?php elseif($item['icon_style'] == 'img'):?>
													<?php echo wp_get_attachment_image( $item['image_icon']['id'], 'full' );?>
												<?php else:?>
													<?php echo kd_kses($item['svg']);?>
												<?php endif;?>
											</span>
										<?php endif;?>
										<?php if(!empty($item['title'])):?>
										  <h3 class="tp-service-title mb-10"><a href="<?php echo esc_url($item['url']);?>"><?php echo esc_html($item['title']);?></a></h3>
										<?php endif;?>
										<?php if(!empty($item['deg'])):?>
										  <p class="tp-service-dec"><?php echo esc_html($item['deg']);?>></p>
										<?php endif;?>
										<a class="tp-service-btn" href="<?php echo esc_url($item['url']);?>">
											<span class="btn-text"><?php echo esc_html__('Read more','kindaid-core');?></span>
											<span class="btn-icon">
												<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
												</svg>
											</span>
										</a>
									</div>
								</div> 
								<?php endforeach;?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}

}
$widgets_manager->register( new Kindaid_Services() );