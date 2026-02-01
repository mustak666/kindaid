<?php
class Kindaid_Hero_Slider extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_hero_slider';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Hero Slider', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'hero-slider' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {

		// hero content
		$this->start_controls_section(
			'hero_slider',
			[
				'label' => esc_html__( 'Hero Slider', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
	     	);

			$repeater = new \Elementor\Repeater();

			// bg Image 
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
			// bg Image 

			// content 
				$repeater->add_control(
					'sub_title',
					[
						'label' => esc_html__( 'Sub Title', 'kindaid-core' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( 'Need Help...', 'kindaid-core' ),
						'label_block' => true,
					]
				);
				$repeater->add_control(
					'title',
					[
						'label' => esc_html__( 'Title', 'kindaid-core' ),
						'type' => \Elementor\Controls_Manager::TEXTAREA,
						'default' => esc_html__( 'Being life saver for someone', 'kindaid-core' ),
					]
				);
				$repeater->add_control(
					'description',
					[
						'label' => esc_html__( 'Description', 'kindaid-core' ),
						'type' => \Elementor\Controls_Manager::TEXTAREA,
						'default' => esc_html__( 'Hempel Foundation is the majority owner of the Kindaid Group!', 'kindaid-core' ),
					]
				);
			// content 

			// btn 
				$repeater->add_control(
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
				$repeater->add_control(
					'btn_text',
					[
						'label' => esc_html__( 'Btn Text', 'kindaid-core' ),
						'type' => \Elementor\Controls_Manager::TEXTAREA,
						'default' => esc_html__( 'Get Help', 'kindaid-core' ),
					]
				);
				$repeater->add_control(
					'btn_url_2',
					[
						'label' => esc_html__( 'Btn URL 02', 'textdomain' ),
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
				$repeater->add_control(
					'btn_text_2',
					[
						'label' => esc_html__( 'Btn Text 02', 'kindaid-core' ),
						'type' => \Elementor\Controls_Manager::TEXTAREA,
						'default' => esc_html__( 'Donation', 'kindaid-core' ),
					]
				);
			// btn 
		
			$this->add_control(
				'slider_list',
				[
					'label' => esc_html__( 'Slider Item', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
							'title' => esc_html__( 'Type Your Title Hear', 'textdomain' ),
							'description' => esc_html__( 'Hempel Foundation is the majority owner of the KindAid.', 'textdomain' ),
						],
						[
							'title' => esc_html__( 'Type Your Title Hear', 'textdomain' ),
							'description' => esc_html__( 'Hempel Foundation is the majority owner of the KindAid.', 'textdomain' ),
						],
					],
					'title_field' => '{{{ title }}}',
				]
			);


		$this->end_controls_section();
	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
		?>
		<div class="tp-hero-area fix p-relative">
			<div class="swiper tp-hero-2-slider-active">
				<div class="swiper-wrapper">
				<?php foreach($settings['slider_list'] as $item):
					$image_url = (!empty( $item['image']['id'])) ? wp_get_attachment_image_url( $item['image']['id'], 'full' ) :  $item['image']['url'];

					if ( ! empty( $item['btn_url']['url'] ) ) {
						$this->add_link_attributes( 'btn_args', $item['btn_url'] );
						$this->add_render_attribute( 'btn_args', 'class' , 'tp-btn tp-btn-animetion mr-5 mb-10' );
					}
					if ( ! empty( $item['btn_url_2']['url'] ) ) {
						$this->add_link_attributes( 'btn_args_2', $item['btn_url_2'] );
						$this->add_render_attribute( 'btn_args_2', 'class' , 'tp-btn tp-btn-secondary tp-btn-animetion mb-10' );
					}
				?>
				<div class="swiper-slide">
					<div class="tp-hero-2-wrap p-relative z-index-1">
						<div class="tp-hero-2-thumb bg-position" style="background-image: url(<?php echo esc_url($image_url);?>);"></div>
						<div class="container-fluid container-1790">
							<div class="row">
							<div class="col-12">
								<div class="tp-hero-2-content">
									<?php if(!empty($item['title'])):?>
									  <h2 class="tp-hero-2-title mb-20"><?php echo kd_kses($item['title']);?></h2>
									<?php endif;?>
									<?php if(!empty($item['btn_text']) || !empty($item['btn_text_2'])):?>
										<div class="tp-hero-btn tp-hero-2-btn mb-155">
											<?php if(!empty($item['btn_text'])):?>
												<a <?php $this->print_render_attribute_string( 'btn_args' ); ?>>
													<span class="btn-text"><?php echo esc_html($item['btn_text']);?></span>
													<span class="btn-icon">
														<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
														</svg>
													</span>
												</a>
											<?php endif;?>
											<?php if(!empty($item['btn_text_2'])):?>
												<a <?php $this->print_render_attribute_string( 'btn_args_2' ); ?>>
													<span class="btn-text"><?php echo esc_html($item['btn_text_2']);?></span>
													<span class="btn-icon">
														<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
														</svg>
													</span>
												</a>
											<?php endif;?>
										</div>
									<?php endif;?>
									<h4 class="tp-hero-2-dec"><?php echo kd_kses($item['description']);?></h4>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach;?>
				</div>
			</div>
			<div class="tp-hero-2-pagination d-flex gap-2">
				<span class="tp-hero-2-prev">
				<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M13 7H1" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
				</span>
				<span class="tp-hero-2-next">
				<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1.00049 7H13.0005" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M7.00049 1L13.0005 7L7.00049 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
				</span>
			</div>
		</div>

		<?php
	}

}
$widgets_manager->register( new Kindaid_Hero_Slider() );