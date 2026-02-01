<?php
class Kindaid_Buttons extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_buttons';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Buttons', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'buttons' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {

		// fect content
		$this->start_controls_section(
			'button',
			[
				'label' => esc_html__( 'Button', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
	     	);
			$this->add_control(
				'button_style',
				[
					'label' => esc_html__( 'Border Style', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'btn_squer',
					'options' => [
						'btn_squer' => esc_html__( 'Button Squer','textdomain' ),
						'btn_long' => esc_html__( 'Button Long','textdomain' ),
						'text_btn' => esc_html__( 'Text Button ','textdomain' ),
					],
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
		//  fect content

	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
		?>
			<?php if($settings['button_style'] == 'btn_long'):
				if ( ! empty( $settings['btn_url']['url'] ) ) {
					$this->add_link_attributes( 'btn_args', $settings['btn_url'] );
					$this->add_render_attribute( 'btn_args', 'class' , 'tp-join-btn tp-btn tp-btn-animetion' );
				}
			?>
				<div class="tp_button">
					<?php if(!empty($settings['btn_text'])):?>
						<a <?php $this->print_render_attribute_string( 'btn_args' ); ?>>
							<span class="btn-text"><?php echo esc_html($settings['btn_text']);?></span>
							<span class="btn-icon">
								<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
							</span>
						</a>
					<?php endif;?>
				</div>
			<?php elseif($settings['button_style']  == 'text_btn'):
				if ( ! empty( $settings['btn_url']['url'] ) ) {
					$this->add_link_attributes( 'btn_args', $settings['btn_url'] );
					$this->add_render_attribute( 'btn_args', 'class' , 'tp-btn-nopading tp-btn tp-btn-animetion' );
				}
			?>
				<div class="tp_button">
					<?php if(!empty($settings['btn_text'])):?>
						<a <?php $this->print_render_attribute_string( 'btn_args' ); ?>>
							<span class="btn-text"><?php echo esc_html($settings['btn_text']);?></span>
							<span class="btn-icon">
								<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
							</span>
						</a>
					<?php endif;?>
				</div>
			<?php else:
				if ( ! empty( $settings['btn_url']['url'] ) ) {
					$this->add_link_attributes( 'btn_args', $settings['btn_url'] );
					$this->add_render_attribute( 'btn_args', 'class' , 'tp-btn tp-btn-animetion mr-5 mb-10' );
				}
			?>
			<div class="tp_button">
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
			</div>
			<?php endif;?>
		<?php
	}

}
$widgets_manager->register( new Kindaid_Buttons() );