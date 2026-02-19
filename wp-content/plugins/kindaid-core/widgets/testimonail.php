<?php
class Kindaid_Testimonail extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_testimonail';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Testimonail', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'testimonail' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {

		$this->start_controls_section(
			'testi_layout',
			[
				'label' => esc_html__( 'Testimonail Layout', 'kindaid-core' ),
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
						'layout_with_img' => esc_html__( 'Layout With Image', 'textdomain' ),
						'layout_default' => esc_html__( 'Layout Default', 'textdomain' ),
					],
				]
			);
		$this->end_controls_section();
		// hero content

		// fect content
		$this->start_controls_section(
			'heading',
			[
				'label' => esc_html__( 'Heading', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'layout_style' => 'layout_with_img',
				],
			]
	     	);
			$this->add_control(
				'sub_title',
				[
					'label' => esc_html__( 'Sub Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'type sub title hear', 'kindaid-core' ),
				]
			);
			$this->add_control(
				'title',
				[
					'label' => esc_html__( 'Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'type title hear', 'kindaid-core' ),
				]
			);
		$this->end_controls_section();
		//  fect content

		// fect content
		$this->start_controls_section(
			'thumb',
			[
				'label' => esc_html__( 'Thumb Image', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'layout_style' => 'layout_with_img',
				],
			]
	     	);
			$this->add_control(
				'thumb_image',
				[
					'label' => esc_html__( 'Thumb Image', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
			$this->add_control(
				'bg_img',
				[
					'label' => esc_html__( 'BG Image', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
		$this->end_controls_section();
		//  fect content

		$this->start_controls_section(
			'testimonail',
			[
				'label' => esc_html__( 'Testimonail', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
	     	);

			$repeater = new \Elementor\Repeater();

			$repeater->add_control(
				'icon',
				[
					'label' => esc_html__( 'Icon', 'donacion-core' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
				]
			);
			// content 
			$repeater->add_control(
				'sub_title',
				[
					'label' => esc_html__( 'Sub Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Helping others improves!', 'kindaid-core' ),
					'label_block' => true,
					'condition' => [
						'layout_style' => 'layout_default',
					],
				],
			);

			$repeater->add_control(
				'description',
				[
					'label' => esc_html__( 'Description', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( '“Their transparency and commitment to making
							a real difference is unmatched. I’m proud to support a cause that brings hope”!', 'kindaid-core' ),
				]
			);

			$repeater->add_control(
				'image',
				[
					'label' => esc_html__( 'Choose Image', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
			$repeater->add_control(
				'name',
				[
					'label' => esc_html__( 'Name', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Arc Joan', 'kindaid-core' ),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'post',
				[
					'label' => esc_html__( 'Post', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Verified Buyer', 'kindaid-core' ),
					'label_block' => true,
				]
			);

			$this->add_control(
				'slider_list',
				[
					'label' => esc_html__( 'Slider Item', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
							'sub_title' => esc_html__( 'Helping others improves!', 'textdomain' ),
							'description' => esc_html__( 'Hempel Foundation is the majority owner of the KindAid.', 'textdomain' ),
						],
						[
							'sub_title' => esc_html__( 'Helping others improves!', 'textdomain' ),
							'description' => esc_html__( 'Hempel Foundation is the majority owner of the KindAid.', 'textdomain' ),
						],
					],
					'title_field' => '{{{ sub_title }}}',
				]
			);


		$this->end_controls_section();
	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
			if(!empty($settings['thumb_image'])){
				$thumb_image_url = (!empty( $settings['thumb_image']['id'])) ? wp_get_attachment_image_url( $settings['thumb_image']['id'], 'full' ) :  $settings['thumb_image']['url'];
				$thumb_image_alt = get_post_meta( $settings['thumb_image']['id'], '_wp_attachment_image_alt', true );
			}
		?>
		<?php if($settings['layout_style'] == 'layout_with_img'):?>
			<div class="tp-testimonial-area tp-testimonal-3-style fix p-relative">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-xl-3">
							<div class="tp-about-2-thumb">
								<img class="tp-about-2-map" src="<?php echo esc_url($thumb_image_url);?>" alt="<?php echo esc_attr($thumb_image_alt);?>">
							</div>
						</div>
						<div class="col-xl-9">
							<div class="tp-about-2-content-wrap ml-30 pt-195 pb-195 tp-bg-mulberry p-relative">
								<?php echo wp_get_attachment_image($settings['bg_img']);?>
								<div class="row">
									<div class="offset-xxl-4 col-xxl-6 offset-xl-4 col-xl-7">
										<div class="tp-about-2-content-inner mr-50">
											<?php if(!empty($settings['sub_title']) || !empty($settings['title'])):?>
												<div class="tp-about-2-info mb-60">
													<?php if(!empty($settings['sub_title'])):?>
														<span class="tp-section-subtitle tp-section-subtitle-yellow d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s"><?php echo esc_html($settings['sub_title']);?></span>
													<?php endif;?>
													<?php if(!empty($settings['title'])):?>
														<h2 class="tp-section-title tp-section-title-white mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">Trusted by <span data-color="#FFCA24"><?php echo kd_kses($settings['title']);?></h2>   
													<?php endif;?>
												</div>
											<?php endif;?>
											<?php if(!empty($settings['slider_list'])):?>
												<div class="tp-testimonal-3-wrap">
													<div class="swiper-container tp-testimonal-3-slider-active">
														<div class="swiper-wrapper">
														<?php foreach($settings['slider_list'] as $list):
															if(!empty($list['image'])){
																$image_url = (!empty( $list['image']['id'])) ? wp_get_attachment_image_url( $list['image']['id'], 'full' ) :  $list['image']['url'];
																$image_alt = get_post_meta( $list['image']['id'], '_wp_attachment_image_alt', true );
															}
															?>
															<div class="swiper-slide">
																<div class="tp-testimonal">
																	<div class="tp-testimonal-star mb-20">
																		<?php
																			$stars = min($list['icon'], 5);
																			if(!empty($stars)){
																				for ( $i = 1; $i <= $stars; $i++ ) {
																					echo '<i class="fas fa-star"></i>';
																				}
																			}else{
																				echo 'no review yet';
																			}
																		?>
																	</div>
																	<?php if(!empty($list['description'])):?>
																	<h4 class="tp-testimonal-dec" data-color="#fcf8ec"><?php echo kd_kses($list['description']);?></h4>
																	<?php endif;?>
																	<div class="tp-testimonal-user mt-50">
																		<div class="tp-testimonal-img">
																		<img src="<?php echo esc_url($image_url);?>" alt="<?php echo esc_attr($image_alt);?>">
																		</div>
																		<div class="tp-testimonal-bio">
																			<?php if(!empty($list['name'])):?>
																			<h4 class="tp-testimonal-name"><?php echo esc_html($list['name']);?></h4>
																			<?php endif;?>
																			<?php if(!empty($list['post'])):?>
																			<span><?php echo esc_html($list['post']);?></span>
																			<?php endif;?>

																		</div>
																	</div>
																</div>
															</div>
															<?php endforeach;?>
														</div>
													</div>
													<div class="tp-testimonal-3-pagination mt-70"></div>
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
			<div class="tp-testimonial-area pt-115 pb-120">
				<div class="container container-1324 p-relative">
					<div class="row justify-content-center">

					<div class="col-xl-9 col-lg-10 col-md-11 text-center">
						<div class="swiper-container tp-testimonal-slider-active">
							<div class="swiper-wrapper">
								<?php foreach($settings['slider_list'] as $list):
									if(!empty($list['image'])){
										$image_url = (!empty( $list['image']['id'])) ? wp_get_attachment_image_url( $list['image']['id'], 'full' ) :  $list['image']['url'];
										$image_alt = get_post_meta( $list['image']['id'], '_wp_attachment_image_alt', true );
									}
									?>
									<div class="swiper-slide">
										<div class="tp-testimonal">
											<div class="tp-testimonal-star mb-5">
												<?php
													$stars = min($list['icon'], 5);
													if(!empty($stars)){
														for ( $i = 1; $i <= $stars; $i++ ) {
															echo '<i class="fas fa-star"></i>';
														}
													}else{
														echo 'no review yet';
													}
												?>
											</div>
											<?php if(!empty($list['sub_title'])):?>
											<span class="tp-testimonal-label mb-20 d-inline-block"><?php echo esc_html($list['sub_title']);?></span>
											<?php endif;?>
											<?php if(!empty($list['description'])):?>
											<h4 class="tp-testimonal-dec"><?php echo kd_kses($list['description']);?></h4>
											<?php endif;?>

											<div class="tp-testimonal-user mt-40">
												<div class="tp-testimonal-img">
													<img src="<?php echo esc_url($image_url);?>" alt="<?php echo esc_attr($image_alt);?>">
												</div>

												<div class="tp-testimonal-bio">

													<?php if(!empty($list['name'])):?>
													<h4 class="tp-testimonal-name"><?php echo esc_html($list['name']);?></h4>
													<?php endif;?>

													<?php if(!empty($list['post'])):?>
													<span><?php echo esc_html($list['post']);?></span>
													<?php endif;?>

												</div>
											</div>
										</div>
									</div>
								<?php endforeach;?>
							</div>
						</div>
					</div>
					</div>
					<div class="tp-testimonial-arrow text-start text-md-end">
					<button class="tp-test-arrow-prev tp-test-arrow">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13 7H1" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<button class="tp-test-arrow-next tp-test-arrow">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1.00049 7H13.0005" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M7.00049 1L13.0005 7L7.00049 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					</div>
				</div>
			</div>
		<?php endif;?>
		<?php
	}

}
$widgets_manager->register( new Kindaid_Testimonail() );