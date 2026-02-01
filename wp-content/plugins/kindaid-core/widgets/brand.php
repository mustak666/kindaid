<?php
class Kindaid_Brand extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_brand';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Brand', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'brand' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {

		// fect content
		$this->start_controls_section(
			'brand_layout',
			[
				'label' => esc_html__( 'Brand Layout', 'kindaid-core' ),
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
						'layout_auto_slider' => esc_html__( 'Layout Auto Slider', 'textdomain' ),
						'layout_slider_long' => esc_html__( 'Layout Slider Long', 'textdomain' ),
						'layout_default' => esc_html__( 'Layout Default', 'textdomain' ),
					],
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'brand_section',
			[
				'label' => esc_html__( 'Brand Section', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
	     	);
			$this->add_control(
				'des',
				[
					'label' => esc_html__( 'Designation', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'Trusted by 2400+ founders & organization', 'kindaid-core' ),
					'condition' =>[
						'layout_style' => 'layout_slider_long',
					],
				],
			);

			$repeater = new \Elementor\Repeater();

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
				'url',
				[
					'label' => esc_html__( 'Url', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( '#', 'kindaid-core' ),
				]
			);
			$this->add_control(
				'brand_list',
				[
					'label' => esc_html__( 'Brand List', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
				]
			);
		$this->end_controls_section();
		//  fect content

	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
	?>
		<?php if($settings['layout_style'] == 'layout_auto_slider'):?>
			<div class="tp-brand-area fix">
				<?php if(!empty($settings['brand_list'])):?>
					<div class="swiper-container tp-brand-2-slider-active">
						<div class="swiper-wrapper slide-transtion">
							<?php foreach($settings['brand_list'] as $item):?>
								<div class="swiper-slide">
									<div class="tp-brand-2-item">
										<a href="<?php echo esc_url($item['url']);?>">
											<?php echo wp_get_attachment_image( $item['image']['id'], 'full' );?>
										</a>
									</div>
								</div>
							<?php endforeach;?>
						</div>
					</div>
				<?php endif;?>
			</div>
		<?php elseif($settings['layout_style'] == 'layout_slider_long'):?>
			<div class="tp-brand-area fix">
				<div class="container-fluid container-1790">
					<div class="row">
					<div class="col-12">
						<div class="tp-brand-3-wrap text-center">
							<?php if(!empty($settings['des'])):?>
							  <span class="tp-brand-3-title mb-30 d-inline-block"><?php echo kd_kses($settings['des']);?></span>
							<?php endif;?>
						<?php if(!empty($settings['brand_list'])):?>
								<div class="swiper-container tp-brand-3-slider-active">
									<div class="swiper-wrapper slide-transtion">
									<?php foreach($settings['brand_list'] as $item):?>
											<div class="swiper-slide">
												<div class="tp-brand-2-item">
													<a href="<?php echo esc_url($item['url']);?>"><?php echo wp_get_attachment_image( $item['image']['id'], 'full' );?></a>
												</div>
											</div>
										<?php endforeach;?>
									</div>
								</div>
						<?php endif;?>
						</div>
					</div>
					</div>
				</div>
			</div>
		<?php else:?>
			<div class="tp-brand-area pb-100">
				<div class="container container-1790">
					<?php if(!empty($settings['brand_list'])):?>
						<div class="swiper-container tp-brand-slider-active">
							<div class="swiper-wrapper slide-transtion">
								<?php foreach($settings['brand_list'] as $item):?>
								<div class="swiper-slide">
									<?php if(!empty($item['image']['id'])):?>
										<div class="tp-brand-item">
											<a class="tp-brand-logo" href="<?php echo esc_url($item['url']);?>">
												<?php echo wp_get_attachment_image( $item['image']['id'], 'full' );?>
											</a>
										</div>
									<?php endif;?>
								</div>
								<?php endforeach;?>
							</div>
						</div>
					<?php endif;?>
				</div>
			</div>
		<?php endif;?>
		<?php
	}

}
$widgets_manager->register( new Kindaid_Brand() );