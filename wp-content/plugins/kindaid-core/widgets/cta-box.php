<?php
class Kindaid_Cta_Box extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_cta_box';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Cta Box', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'cta_box' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {

		// Services List 
		$this->start_controls_section(
			'cta_box',
			[
				'label' => esc_html__( 'Cta Box', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		   );

			$this->add_control(
				'icon_style',
				[
					'label' => esc_html__( 'Icon Style', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'fontawesome',
					'options' => [
						'fontawesome' => esc_html__( 'Fontawesome Icon', 'textdomain' ),
						'svg' => esc_html__( 'SVG Icon', 'textdomain' ),
						'img' => esc_html__( 'Image Icon', 'textdomain' ),
					],
				]
			);  
			$this->add_control(
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
			$this->add_control(
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
			$this->add_control(
				'svg',
				[
					'label' => esc_html__( 'Svg', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'condition' => [
						'icon_style' => 'svg',
					],
				]
			);

			// title 
			$this->add_control(
				'title',
				[
					'label' => esc_html__( 'Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__('Feedbacks','kindaid-core'),
					'label_block' => true,
				],
			);
			// title 
			$this->add_control(
				'content',
				[
					'label' => esc_html__( 'Content', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__('Speak to our Friendly team.','kindaid-core'),
				],
			);

			// cta 
			$this->add_control(
				'cta',
				[
					'label' => esc_html__( 'CTA', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__('Support@gmail.com','kindaid-core'),
				],
			);

			$this->add_control(
				'url_option',
				[
					'label' => esc_html__( 'URL Option', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'mailto',
					'options' => [
						'mailto' => esc_html__( 'mailto:', 'textdomain' ),
						'tel' => esc_html__( 'tel:', 'textdomain' ),
					],
				]
			);	

			// cta_url 
			$this->add_control(
				'cta_url',
				[
					'label' => esc_html__( 'CTA Url', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__('#','kindaid-core'),
				],
			);



		$this->end_controls_section();
		// Services List 
	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
		?>
			<div class="tp-contact-item icon-anime-wrap text-center wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
				<span class="tp-contact-icon icon-anime mb-45 d-inline-block">
					<?php if($settings['icon_style'] == 'fontawesome'):?>
						<?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
					<?php elseif($settings['icon_style'] == 'img'):?>
						<?php echo wp_get_attachment_image( $settings['image_icon']['id'], 'full' );?>
					<?php else:?>
						<?php echo kd_kses($settings['svg']);?>
					<?php endif;?>
				</span>
				<div class="tp-contact-content">
				<?php if(!empty($settings['title'])):?>
				  <h5><?php echo esc_html($settings['title']);?></h5>
				<?php endif;?>
				<?php if(!empty($settings['content'])):?>
				  <span class="d-block mb-35"><?php echo esc_html($settings['content']);?></span>
				<?php endif;?>
				<?php if(!empty($settings['cta'])):?>
					<a class="common-underline" href="<?php echo esc_attr($settings['url_option']).':'. esc_attr($settings['cta_url']);?>"><?php echo esc_html($settings['cta']);?></a>
				<?php endif;?>
				</div>
			</div>
		<?php

	}

}
$widgets_manager->register( new Kindaid_Cta_Box() );