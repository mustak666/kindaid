<?php
class Kindaid_Contect extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_contect';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Contect', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'contect' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {

		// Services List 
		$this->start_controls_section(
			'contect',
			[
				'label' => esc_html__( 'Contect', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		   );


			// content 
			$this->add_control(
				'title',
				[
					'label' => esc_html__( 'Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__('Send a Message','kindaid-core'),
					'label_block' => true,
				],
			);

			// content 
			$this->add_control(
				'shortcode',
				[
					'label' => esc_html__( 'Shortcode', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
				]
			);

		$this->end_controls_section();
		// Services List 
	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
		?>
			<?php if(!empty($settings['shortcode'])):?>
				<div class="tp-donation-form-info tp-contact-form tp-contact-form-main mr-110 ml-45 pt-80 pb-80">
					<?php if(!empty($settings['title'])):?>
					 <h6 class="tp-donation-form-label-title mb-25"><?php echo kd_kses($settings['title']);?></h6>
					<?php endif;?>
					<?php echo do_shortcode($settings['shortcode']);?>
				</div>
			<?php endif;?>
		<?php

	}

}
$widgets_manager->register( new Kindaid_Contect() );