<?php
class Kindaid_Services_List extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_services_list';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Services List', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'services-list' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {

		// Services List 
		$this->start_controls_section(
			'services_list',
			[
				'label' => esc_html__( 'Services List', 'kindaid-core' ),
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

			// content 
			$this->add_control(
				'title',
				[
					'label' => esc_html__( 'Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'label_block' => true,
					'default' => esc_html('Crisis Response','kindaid-core'),
				]
			);
			$this->add_control(
				'deg',
				[
					'label' => esc_html__( 'Description', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html("Health care are essential for a child's growth.",'kindaid-core'),
				]
			);
			$this->add_control(
				'url',
				[
					'label' => esc_html__( 'Url', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
				]
			);
		$this->end_controls_section();
		// Services List 
	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
		?>
			<div class="tp-service-item tp-service-2-item icon-anime-wrap wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s" data-bg-color="#ffca24">
				<span class="tp-service-icon icon-anime mb-75 d-inline-block">
					<?php if($settings['icon_style'] == 'fontawesome'):?>
						<?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
					<?php elseif($settings['icon_style'] == 'img'):?>
						<?php echo wp_get_attachment_image( $settings['image_icon']['id'], 'full' );?>
					<?php else:?>
						<?php echo kd_kses($settings['svg']);?>
					<?php endif;?>
				</span>
				<?php if(!empty($settings['title'])):?>
				  <h3 class="tp-service-title mb-15"><a href="<?php echo esc_url($settings['url']);?>" class="common-underline"><?php echo kd_kses($settings['title']);?></a></h3>
				<?php endif;?>
				<?php if(!empty($settings['deg'])):?>
				  <p class="tp-service-dec mb-0"><?php echo esc_html($settings['deg']);?></p>
				<?php endif;?>
			</div>
		<?php
	}

}
$widgets_manager->register( new Kindaid_Services_List() );