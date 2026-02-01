<?php
class Kindaid_Join extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_join';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Join', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'join' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {

		// hero content
		$this->start_controls_section(
			'join_content',
			[
				'label' => esc_html__( 'Join Content', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
	     	);
			$this->add_control(
				'sub_title',
				[
					'label' => esc_html__( 'Sub Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Type Your Sub Title Hear', 'kindaid-core' ),
					'label_block' => true,
				]
			);
			$this->add_control(
				'title',
				[
					'label' => esc_html__( 'Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'Type Your Title Hear', 'kindaid-core' ),
				]
			);
			$this->add_control(
				'number',
				[
					'label' => esc_html__( 'Number', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( '120,859+', 'kindaid-core' ),
				]
			);

		$this->end_controls_section();
		//  hero content
		// hero btn
		$this->start_controls_section(
			'join_btn',
			[
				'label' => esc_html__( 'Join Btn', 'kindaid-core' ),
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
		$this->end_controls_section();
		// hero btn

		// hero image 
		$this->start_controls_section(
			'join_img',
			[
				'label' => esc_html__( 'Join Image', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		   );
			$this->add_control(
				'shapes_switch',
				[
					'label' => esc_html__( 'Shapes Switch', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'textdomain' ),
					'label_off' => esc_html__( 'Hide', 'textdomain' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			$this->add_control(
				'shape_1',
				[
					'label' => esc_html__( 'Shape 01', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
			$this->add_control(
				'shape_2',
				[
					'label' => esc_html__( 'Shape 02', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
			$this->add_control(
				'shape_3',
				[
					'label' => esc_html__( 'Shape 03', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
			$this->add_control(
				'shape_4',
				[
					'label' => esc_html__( 'Shape 04', 'textdomain' ),
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

		$shape_1_url = (!empty( $settings['shape_1']['id'])) ? wp_get_attachment_image_url( $settings['shape_1']['id'], 'full' ) :  $settings['shape_1']['url'];
		$shape_1_alt = get_post_meta( $settings['shape_1']['id'], '_wp_attachment_image_alt', true );

		$shape_2_url = (!empty( $settings['shape_2']['id'])) ? wp_get_attachment_image_url( $settings['shape_2']['id'], 'full' ) :  $settings['shape_2']['url'];
		$shape_2_alt = get_post_meta( $settings['shape_2']['id'], '_wp_attachment_image_alt', true );

		$shape_3_url = (!empty( $settings['shape_3']['id'])) ? wp_get_attachment_image_url( $settings['shape_3']['id'], 'full' ) :  $settings['shape_3']['url'];
		$shape_3_alt = get_post_meta( $settings['shape_3']['id'], '_wp_attachment_image_alt', true );

		$shape_4_url = (!empty( $settings['shape_4']['id'])) ? wp_get_attachment_image_url( $settings['shape_4']['id'], 'full' ) :  $settings['shape_4']['url'];
		$shape_4_alt = get_post_meta( $settings['shape_4']['id'], '_wp_attachment_image_alt', true );


		if ( ! empty( $settings['btn_url']['url'] ) ) {
			$this->add_link_attributes( 'btn_args', $settings['btn_url'] );
			$this->add_render_attribute( 'btn_args', 'class' , 'tp-join-btn tp-btn tp-btn-animetion' );
		}
		
		?>
		<div class="tp-join-area scene fix pt-115 pb-150">
			<div class="container container-1424">
				<div class="tp-join text-center p-relative" >
					<?php if(!empty($settings['shapes_switch'])):?>
					<div class="tp-join-shape d-none d-md-block">
						<img class="tp-join-shape-1 p-absolute d-none d-lg-block layer" data-depth="0.8" src="<?php echo esc_url($shape_1_url);?>" alt="<?php echo esc_attr($shape_1_alt);?>">
						<img class="tp-join-shape-2 p-absolute layer" data-depth="-0.8" src="<?php echo esc_url($shape_2_url);?>" alt="<?php echo esc_attr($shape_2_alt);?>">
						<img class="tp-join-shape-3 p-absolute d-none d-lg-block layer" data-depth="0.8" src="<?php echo esc_url($shape_3_url);?>" alt="<?php echo esc_attr($shape_3_alt);?>">
						<img class="tp-join-shape-4 p-absolute layer" data-depth="-0.8" src="<?php echo esc_url($shape_4_url);?>" alt="<?php echo esc_attr($shape_4_alt);?>">
					</div>
					<?php endif;?>
				<div class="row justify-content-center">
					<div class="col-xl-7 col-lg-8">
						<?php if(!empty($settings['sub_title']) || !empty($settings['title'])):?>
							<div class="tp-join-info mb-60 ml-10 mr-10">
								<?php if(!empty($settings['sub_title'])):?>
								   <span class="tp-section-subtitle d-block mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s"><?php echo esc_html($settings['sub_title']);?></span>
								<?php endif;?>
								<h3 class="tp-join-title mb-20 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s"><?php echo esc_html($settings['title']);?></h3 >   
							</div>
						<?php endif;?>
					</div>
				</div>
				<?php if(!empty($settings['number'])):?>
			    	<h2 class="tp-join-number mb-70 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s"><?php echo esc_html($settings['number']);?></h2>
				<?php endif;?>
				<?php if(!empty($settings['btn_text'])):?>
				<div class="tp-join-down wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">
					<p class="tp-join-down-tittle mb-15"><?php echo esc_html__('People already joining','kindaid-core');?></p>
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
		<?php
	}

}
$widgets_manager->register( new Kindaid_Join() );