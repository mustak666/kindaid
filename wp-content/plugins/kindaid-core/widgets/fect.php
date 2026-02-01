<?php
class Kindaid_Fect extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_fect';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Fect', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'fect' ];
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
			$repeater = new \Elementor\Repeater();

			$repeater->add_control(
				'number',
				[
					'label' => esc_html__( 'Number', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( '64', 'kindaid-core' ),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'sep',
				[
					'label' => esc_html__( 'Separator', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( '+', 'kindaid-core' ),
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
			$this->add_control(
				'fect_list',
				[
					'label' => esc_html__( 'Fect List', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
							'title' => esc_html__( 'Children & families served', 'textdomain' ),
						],
						[
							'title' => esc_html__( 'Successful Campaigns', 'textdomain' ),
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
		<div class="tp-fact-area tp-bg-mulberry pt-40 pb-35">
			<?php if(!empty($settings['fect_list'])):?>
				<div class="container container-1424">
					<div class="row fect-border">
						<?php foreach($settings['fect_list'] as $list):?>
							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
								<div class="tp-fact-item tp-fact-item-border text-center pt-20 pb-25">
									<?php if(!empty($list['number'])):?>
									<h2 class="tp-fact-title mb-5"><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="64"><?php echo esc_html($list['number']);?></span><?php echo esc_html($list['sep']);?></h2>
									<?php endif;?>
									<?php if(!empty($list['title'])):?>
									<p class="tp-fact-dec mb-0"><?php echo esc_html($list['title']);?></p>
									<?php endif;?>
								</div>
							</div>
						<?php endforeach;?>
					</div>
				</div>
			<?php endif;?>
		</div>
		<?php
	}

}
$widgets_manager->register( new Kindaid_Fect() );