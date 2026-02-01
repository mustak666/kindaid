<?php
class Kindaid_Misson extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_misson';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Misson', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'misson' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {

		// fect content
		$this->start_controls_section(
			'misson_content',
			[
				'label' => esc_html__( 'Misson Content', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
	     	);

			$this->add_control(
				'shape_image',
				[
					'label' => esc_html__( 'Shape Image', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);

			$repeater = new \Elementor\Repeater();
			$repeater->add_control(
				'title',
				[
					'label' => esc_html__( 'Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'Our Mission', 'kindaid-core' ),
				]
			);
			$repeater->add_control(
				'content',
				[
					'label' => esc_html__( 'Content', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'To share the love of Christ through worship, discipleship, and service.', 'kindaid-core' ),
					'label_block' => true,
				]
			);
			$this->add_control(
				'misson_list',
				[
					'label' => esc_html__( 'Misson List', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
							'title' => esc_html__( 'Our Mission', 'textdomain' ),
						],
						[
							'title' => esc_html__( 'Our Vision', 'textdomain' ),
						],
					],
					'title_field' => '{{{ title }}}',
				]
			);
		$this->end_controls_section();
		//  fect content

	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
		?>
		<div class="tp-mission-area">
			<div class="container container-1424">
				<div class="tp-mission-3-wrap position-relative">
					<?php if(!empty($settings['misson_list'])):?>
						<div class="row">
							<?php foreach($settings['misson_list'] as $item):?>
								<div class="col-lg-4 col-md-6">
									<?php if(!empty($item['title'])):?>
										<div class="tp-mission-3-item tp-mission-3-border mb-30 text-center">
											<h4 class="tp-mission-3-title mb-15"><?php echo esc_html($item['title']);?></h4>
											<?php if(!empty($item['content'])):?>
											<p class="tp-mission-3-dec"><?php echo kd_kses($item['content']);?></p>
											<?php endif;?>
										</div>
									<?php endif;?>
								</div>
							<?php endforeach;?>
						</div>
					<?php endif;?>
					<div class="tp-mission-3-text">
						<?php echo wp_get_attachment_image( $settings['shape_image']['id']);?>
					</div>
				</div>
			</div>
		</div>
		<?php
	}

}
$widgets_manager->register( new Kindaid_Misson() );