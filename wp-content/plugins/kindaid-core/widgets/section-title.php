<?php
class Kindaid_Section_Title extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_section_title';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Section Title', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'section-title' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {

		// fect content
		$this->start_controls_section(
			'fect_content',
			[
				'label' => esc_html__( 'Fect Content', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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

	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
		?>
		<?php if(!empty($settings['sub_title']) || !empty($settings['title'])):?>
			<div class="tp-section-wrap p-relative">
				<?php if(!empty($settings['sub_title'])):?>
				  <span class="tp-section-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s"><?php echo esc_html($settings['sub_title']);?></span>
				<?php endif;?>
				<?php if(!empty($settings['title'])):?>
				  <h2 class="tp-section-title mb-20 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s"><?php echo kd_kses($settings['title']);?></h2>   
				<?php endif;?>
			</div>
		<?php endif;?>
		<?php
	}

}
$widgets_manager->register( new Kindaid_Section_Title() );