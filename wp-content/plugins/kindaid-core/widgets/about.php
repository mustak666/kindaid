<?php
class Kindaid_About extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_about';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid About', 'kindaid-core' );
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


		// fect content
		$this->start_controls_section(
			'about_layout',
			[
				'label' => esc_html__( 'About Layout', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
	     	);
			$this->add_control(
				'layout_style',
				[
					'label' => esc_html__( 'Layout Style', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'about_1',
					'options' => [
						'about_1' => esc_html__( 'About Style 01', 'textdomain' ),
						'about_2' => esc_html__( 'About Style 02', 'textdomain' ),
					],
				]
			);
		$this->end_controls_section();

		// about content
		$this->start_controls_section(
			'about_content',
			[
				'label' => esc_html__( 'About Content', 'kindaid-core' ),
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
					'default' => esc_html__( 'Discover More', 'kindaid-core' ),
				]
			);
		$this->end_controls_section();
		//  about content

		// about_list
		$this->start_controls_section(
			'about_services_list',
			[
				'label' => esc_html__( 'About Services List', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		   );
			$repeater = new \Elementor\Repeater();

			$repeater->add_control(
				'icon_style',
				[
					'label' => esc_html__( 'Icon Style', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'img',
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
				'list_title',
				[
					'label' => esc_html__( 'List Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'label_block' => true,
					'default' => esc_html('Fundraising','kindaid-core'),
				]
			);
			$repeater->add_control(
				'list_deg',
				[
					'label' => esc_html__( 'List Description', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html("Discover the inspiring stories of individuals and communities transformed by our programs.",'kindaid-core'),
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
				'about_list',
				[
					'label' => esc_html__( 'About List', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
							'list_title' => esc_html__( 'Fundraising', 'textdomain' ),
							'list_deg' => esc_html__( 'Discover the inspiring stories of individuals and communities transformed by our programs.', 'textdomain' ),
						],
						[
							'list_title' => esc_html__( 'Fundraising', 'textdomain' ),
							'list_deg' => esc_html__( 'Discover the inspiring stories of individuals and communities transformed by our programs.', 'textdomain' ),
						],
					],
					'title_field' => '{{{ list_title }}}',
				]
			);
		$this->end_controls_section();
		// about_list

		// about_img
		$this->start_controls_section(
			'about_img',
			[
				'label' => esc_html__( 'About Image', 'kindaid-core' ),
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
				'bg_image',
				[
					'label' => esc_html__( 'Bg Image', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
		$this->end_controls_section();
		// about_img

		// about_user
		$this->start_controls_section(
			'about_user',
			[
				'label' => esc_html__( 'About User', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' =>[
					'layout_style' => 'about_1',
				],
			],
		   );
			// content 
			$this->add_control(
				'user_title',
				[
					'label' => esc_html__( 'User Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( '50k', 'kindaid-core' ),
					'label_block' => true,
				]
			);
			$this->add_control(
				'user_deg',
				[
					'label' => esc_html__( 'User Description', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'Trust by Clients and Organizations', 'kindaid-core' ),
				]
			);
			$this->add_control(
				'user_img',
				[
					'label' => esc_html__( 'User Image', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
		$this->end_controls_section();
		// about_user


	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();

		if(!empty($settings['image'])){
			$image_url = (!empty( $settings['image']['id'])) ? wp_get_attachment_image_url( $settings['image']['id'], 'full' ) :  $settings['image']['url'];
			$image_alt = get_post_meta( $settings['image']['id'], '_wp_attachment_image_alt', true );
		}

		if(!empty($settings['user_img'])){
			$user_image_url = (!empty( $settings['user_img']['id'])) ? wp_get_attachment_image_url( $settings['user_img']['id'], 'full' ) :  $settings['user_img']['url'];
			$user_image_alt = get_post_meta( $settings['user_img']['id'], '_wp_attachment_image_alt', true );
		}

		if(!empty($settings['bg_image'])){
			$bg_image_url = (!empty( $settings['bg_image']['id'])) ? wp_get_attachment_image_url( $settings['bg_image']['id'], 'full' ) :  '';
			$bg_image_alt = get_post_meta( $settings['bg_image']['id'], '_wp_attachment_image_alt', true );
		}

		if ( ! empty( $settings['btn_url']['url'] ) ) {
			$this->add_link_attributes( 'btn_args', $settings['btn_url'] );
			if($settings['layout_style'] == 'about_2'){
			   $this->add_render_attribute( 'btn_args', 'class' , 'tp-btn tp-btn-animetion tp-btn-secondary-white' );
			}else{
			   $this->add_render_attribute( 'btn_args', 'class' , 'tp-btn tp-btn-secondary tp-btn-animetion' );
			}

		}

		?>


		<?php if($settings['layout_style'] == 'about_2'):?>
		<div class="tp-about-area fix p-relative">
			<div class="container-fluid p-0">
				<div class="row">
				<div class="col-xl-3">
					<div class="tp-about-2-thumb">
						<img src="<?php echo esc_url($image_url);?>" alt="<?php echo esc_attr($image_alt);?>">
					</div>
				</div>
				<div class="col-xl-9">
					<div class="tp-about-2-content-wrap ml-30 pt-165 pb-170 tp-bg-mulberry p-relative">
						<img class="tp-about-2-map" src="<?php echo esc_url($bg_image_url);?>" alt="<?php echo esc_attr($bg_image_alt);?>">
						<div class="row">
							<div class="offset-xxl-5 col-xxl-5 offset-xl-4 col-xl-7">
							<div class="tp-about-2-content-inner mr-30">
								<div class="tp-about-2-info mb-40">
									<?php if(!empty($settings['sub_title'])):?>
									  <span class="tp-section-subtitle tp-section-subtitle-yellow d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s"><?php echo esc_html($settings['sub_title']);?></span>
									<?php endif;?>
									<?php if(!empty($settings['title'])):?>
									  <h2 class="tp-section-title tp-section-title-white mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s"><?php echo kd_kses($settings['title']);?></h2>
									<?php endif;?>
									<?php if(!empty($settings['description'])):?>
									  <p class="tp-about-2-dec wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s"><?php echo esc_html($settings['description']);?></p>
									<?php endif;?>
								</div>
								<div class="tp-about-list-wrapper wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">
								  <?php foreach($settings['about_list'] as $list):?>
									<div class="tp-about-list mb-15">
										<div class="tp-about-list-icon">
											<?php if($list['icon_style'] == 'fontawesome'):?>
												<?php \Elementor\Icons_Manager::render_icon( $list['icon'], [ 'aria-hidden' => 'true' ] ); ?>
											<?php elseif($list['icon_style'] == 'img'):?>
												<?php echo wp_get_attachment_image( $list['image_icon']['id'], 'full' );?>
											<?php else:?>
												<?php echo kd_kses($list['svg']);?>
											<?php endif;?>
										</div>
										<div class="tp-about-list-text">
											<?php if(!empty($list['list_title'])):?>
											  <h3 class="tp-about-list-title"><?php echo esc_html($list['list_title']);?></h3>
											<?php endif;?>
											<?php if(!empty($list['list_deg'])):?>
											  <p><?php echo esc_html($list['list_deg']);?></p>
											<?php endif;?>
										</div>
									</div>
								  <?php endforeach;?>
								</div>

								<?php if(!empty($settings['btn_text'])):?>
									<div class="tp-about-btn mt-40 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".7s">
										<a <?php $this->print_render_attribute_string( 'btn_args' ); ?>>
											<span class="btn-text"><?php echo esc_html($settings['btn_text']);?></span>
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
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		<?php else:?>
		<div class="tp-about-area fix">
			<div class="container-fluid p-0">
				<div class="row">
					<div class="col-xxl-6 col-xl-6">
						<div class="tp-about-thumb mr-80 h-100">
							<img class="w-100" src="<?php echo esc_url($image_url);?>" alt="<?php echo esc_attr($image_alt);?>">
						</div>
					</div>
				<div class="col-xxl-5 col-xl-6">
					<div class="tp-about-content tp-about-2-text pt-80 pb-80 mr-100">
						<?php if(!empty($settings['sub_title'])):?>
						  <span class="tp-section-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s"   data-wow-delay=".3s"><?php echo esc_html($settings['sub_title']);?></span>
						<?php endif;?>
						<?php if(!empty($settings['title'])):?>
						  <h2 class="tp-section-title mb-35 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s"><?php echo kd_kses($settings['title']);?></h2>
						<?php endif;?>
						<div class="tp-about-dec-wrap wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
							<div class="row">
								<div class="col-lg-8 col-md-8">
									<div class="tp-about-dec">
										<?php if(!empty($settings['description'])):?>
										<p class="mb-40"><?php echo esc_html($settings['description']);?></p>
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
								<div class="col-lg-4 col-md-4">
									<div class="tp-about-user pl-20">
										<?php if(!empty($settings['user_title'])):?>
										  <h4><?php echo esc_html($settings['user_title']);?></h4>
										<?php endif;?>
										<?php if(!empty($settings['user_deg'])):?>
										  <p class="mb-20"><?php echo kd_kses($settings['user_deg']);?></p>
										<?php endif;?>
										<img src="<?php echo esc_url($user_image_url);?>" alt="<?php echo esc_url($user_image_alt);?>">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		<?php endif;?>
		<?php
	}

}
$widgets_manager->register( new Kindaid_About() );