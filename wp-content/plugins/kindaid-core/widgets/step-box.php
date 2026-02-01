<?php
class Kindaid_Step_Box extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_step_box';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Step Box', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'step_box' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {

		// Services List 
		$this->start_controls_section(
			'step_box',
			[
				'label' => esc_html__( 'Step Box', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		   );


			// content 
			$this->add_control(
				'number',
				[
					'label' => esc_html__( 'Number', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'label_block' => true,
					'default' => esc_html('01','kindaid-core'),
				]
			);
			// content 
			$this->add_control(
				'title',
				[
					'label' => esc_html__( 'Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'label_block' => true,
					'default' => esc_html('Join our website','kindaid-core'),
				]
			);
			$this->add_control(
				'deg',
				[
					'label' => esc_html__( 'Description', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html("Lorem ipsum is simply text the printing.",'kindaid-core'),
				]
			);
		$this->end_controls_section();
		// Services List 
	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
		?>
			<div class="tp-step text-center p-relative mb-40 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">

				<div class="tp-step-arrow d-none d-lg-block">
					<span>
						<svg width="21" height="14" viewBox="0 0 21 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M13.6793 0.260557C13.3033 0.617831 13.2915 1.20867 13.6531 1.58024L18.9277 7L13.6531 12.4198C13.2915 12.7913 13.3033 13.3822 13.6793 13.7394C14.0554 14.0967 14.6534 14.0851 15.015 13.7136L20.6044 7.97035C21.1319 7.4284 21.1319 6.5716 20.6044 6.02965L15.015 0.286433C14.6534 -0.0851318 14.0554 -0.0967169 13.6793 0.260557ZM1.16249 0.260557C0.786411 0.617831 0.774685 1.20867 1.1363 1.58024L6.41089 7L1.1363 12.4198C0.774685 12.7913 0.786409 13.3822 1.16249 13.7394C1.53856 14.0967 2.13658 14.0851 2.49819 13.7136L8.08758 7.97035C8.61502 7.4284 8.61501 6.5716 8.08758 6.02965L2.49819 0.286433C2.13658 -0.0851318 1.53856 -0.0967169 1.16249 0.260557Z" fill="currentColor" />
						</svg>
					</span>
				</div>

				<?php if(!empty($settings['number'])):?>
					<div class="tp-step-number mb-35">
						<h3><?php echo esc_html($settings['number']);?> <span></span></h3>
					</div>
				<?php endif;?>
				<div class="tp-step-content">
					<?php if(!empty($settings['title'])):?>
						<h3 class="tp-step-title"><?php echo esc_html($settings['title']);?></h3>
					<?php endif;?>

					<?php if(!empty($settings['deg'])):?>
						<p><?php echo kd_kses($settings['deg']);?></p>
					<?php endif;?>
				</div>
			</div>
		<?php
	}

}
$widgets_manager->register( new Kindaid_Step_Box() );