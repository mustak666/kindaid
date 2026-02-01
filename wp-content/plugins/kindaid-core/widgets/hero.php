<?php
class Kindaid_Hero extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_hero';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Hero', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'hero' ];
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
				'label' => esc_html__( 'Hero Content', 'kindaid-core' ),
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

		// hero btn
		$this->start_controls_section(
			'hero_btn',
			[
				'label' => esc_html__( 'Hero Btn,s', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
			$this->add_control(
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
			$this->add_control(
				'btn_text_2',
				[
					'label' => esc_html__( 'Btn Text 02', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'Donation', 'kindaid-core' ),
				]
			);

		$this->end_controls_section();
		// hero btn
		
		// hero image 
		$this->start_controls_section(
			'hero_img',
			[
				'label' => esc_html__( 'Hero Image', 'kindaid-core' ),
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
		$this->end_controls_section();
		// hero image 


	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
		if(!empty( $settings['image'])){
			$image_url = (!empty( $settings['image']['id'])) ? wp_get_attachment_image_url( $settings['image']['id'], 'full' ) :  $settings['image']['url'];
			$image_alt = get_post_meta( $settings['image']['id'], '_wp_attachment_image_alt', true );
		}

		if ( ! empty( $settings['btn_url']['url'] ) ) {
			$this->add_link_attributes( 'btn_args', $settings['btn_url'] );
			$this->add_render_attribute( 'btn_args', 'class' , 'tp-btn tp-btn-animetion mr-5 mb-10' );
		}
		if ( ! empty( $settings['btn_url_2']['url'] ) ) {
			$this->add_link_attributes( 'btn_args_2', $settings['btn_url_2'] );
			$this->add_render_attribute( 'btn_args_2', 'class' , 'tp-btn tp-btn-secondary tp-btn-animetion mb-10' );
		}

		?>
		
		<div class="tp-hero-area fix">
			<div class="container-fluid p-0">
				<div class="row">
				<div class="col-xxl-6 col-xl-7 col-lg-6 offset-xxl-1">
					<div class="tp-hero-content tp-hero-spacing">
						<?php if(!empty($settings['sub_title'])):?>
				   		  <span class="tp-hero-subtitle d-inline-block mb-25 ml-5  wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s"><?php echo esc_html($settings['sub_title']);?></span>
						<?php endif;?>
						<?php if(!empty($settings['title'])):?>
							<h2 class="tp-hero-title mb-80 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
								<?php echo kd_kses($settings['title']);?>
							</h2>
						<?php endif;?>
						<div class="tp-hero-btn-wrap">
							<?php if(!empty($settings['description'])):?>
								<div class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">
									<p class="tp-hero-dec mb-30"><?php echo kd_kses($settings['description']);?></p>
								</div>
							<?php endif;?>
							<div class="tp-hero-btn wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".7s">
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
							<?php if(!empty($settings['btn_text_2'])):?>
								<a <?php $this->print_render_attribute_string( 'btn_args_2' ); ?>>
									<span class="btn-text"><?php echo esc_html($settings['btn_text_2']);?></span>
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
				</div>
				<div class="col-xxl-5 col-xl-5 col-lg-6">
					<div class="tp-hero-thumb ml-20">
						<img class="w-100" src="<?php echo esc_url($image_url);?>" alt="<?php echo esc_attr($image_alt);?>">
					</div>
				</div>
				</div>
			</div>
		</div>
		<?php
	}

}
$widgets_manager->register( new Kindaid_Hero() );