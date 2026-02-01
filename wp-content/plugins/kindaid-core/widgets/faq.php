<?php
class Kindaid_Faq extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_faq';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Faq', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'faq' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {

		// fect content
		$this->start_controls_section(
			'faq_content',
			[
				'label' => esc_html__( 'Faq Content', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
	     	);

			$repeater = new \Elementor\Repeater();
			$repeater->add_control(
				'title',
				[
					'label' => esc_html__( 'Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'Being life saver for someone', 'kindaid-core' ),
				]
			);
			$repeater->add_control(
				'content',
				[
					'label' => esc_html__( 'Content', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'It is a long established fact that a reader will be distracted by the readable the a content of a page when looking at its layout. Many desktop publishing packages.', 'kindaid-core' ),
					'label_block' => true,
				]
			);
			$this->add_control(
				'faq_list',
				[
					'label' => esc_html__( 'Faq List', 'textdomain' ),
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
		  <div class="tp-faq">
			<?php if(!empty($settings['faq_list'])):?>
				<div class="accordion" id="accordionExample">
				<?php foreach($settings['faq_list'] as $key => $item):
					$active = ($key == 0) ? 'active' : '';
					$show = ($key == 0) ? 'show' : '';
					$number = $key + 1;
					$collapsed = (!empty($show)) ? '' : 'collapsed';
					$value = ($number >= 10) ? $number : '0'.$number;
				?>
					<div class="tp-faq-item <?php echo esc_attr($active);?> wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
						<?php if(!empty($item['title'])):?>
							<h2 class="accordion-header">
								<button class="tp-faq-button <?php echo esc_attr($collapsed);?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-<?php echo esc_attr($key);?>" aria-expanded="true" aria-controls="collapseOne">
									<span><?php echo esc_html($value);?></span>
									<?php echo esc_html($item['title']);?>
								</button>
							</h2>
						<?php endif;?>
						<div id="collapseOne-<?php echo esc_attr($key);?>" class="tp-faq-collapse collapse <?php echo esc_attr($show);?>" data-bs-parent="#accordionExample">
							<?php if(!empty($item['content'])):?>
								<div class="tp-faq-body">
									<p><?php echo esc_html($item['content']);?></p>
								</div>
							<?php endif;?>
						</div>
					</div>
				<?php endforeach;?>
				</div>
			<?php endif;?>
		 </div>
		<?php
	}

}
$widgets_manager->register( new Kindaid_Faq() );