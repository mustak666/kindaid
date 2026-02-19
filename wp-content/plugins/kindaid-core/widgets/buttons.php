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
						'btn_long2' => esc_html__( 'Button Long 02','textdomain' ),
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


			<?php if($settings['button_style'] == 'btn_long2'):
				if ( ! empty( $settings['btn_url']['url'] ) ) {
					$this->add_link_attributes( 'btn_args', $settings['btn_url'] );
					$this->add_render_attribute( 'btn_args', 'class' , 'tp-btn tp-btn-secondary-white tp-btn-animetion w-100 justify-content-center' );
				}
			?>
			<div class="tp-cta-btn text-center">
				<?php if(!empty($settings['btn_text'])):?>
					<a <?php $this->print_render_attribute_string( 'btn_args' ); ?>>
						<span class="btn-icon">
							<svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.15195 0.500138C6.71895 0.517281 7.26794 0.6157 7.79984 0.79554H7.85294C7.88894 0.812539 7.91594 0.831328 7.93394 0.848328C8.13283 0.911853 8.32093 0.983431 8.50093 1.08185L8.84293 1.23395C8.97793 1.30553 9.13992 1.43884 9.22992 1.49342C9.31992 1.54621 9.41892 1.60079 9.49992 1.66253C10.4998 0.902906 11.7139 0.491334 12.9649 0.500138C13.5328 0.500138 14.0998 0.579912 14.6389 0.759751C17.9607 1.83342 19.1577 5.45704 18.1578 8.62436C17.5908 10.2429 16.6638 11.7201 15.4498 12.9271C13.7119 14.6002 11.8048 16.0854 9.75192 17.3649L9.52692 17.5L9.29292 17.3559C7.23284 16.0854 5.31496 14.6002 3.56088 12.9181C2.3549 11.7111 1.42701 10.2429 0.851011 8.62436C-0.165978 5.45704 1.03101 1.83342 4.38887 0.740961C4.64987 0.651489 4.91897 0.588859 5.18897 0.553965H5.29696C5.54986 0.517281 5.80096 0.500138 6.05296 0.500138H6.15195ZM14.1709 3.3276C13.8019 3.20145 13.3969 3.39918 13.2619 3.77496C13.1359 4.15075 13.3339 4.56232 13.7119 4.69563C14.2888 4.91037 14.6749 5.47494 14.6749 6.10035V6.12808C14.6578 6.33297 14.7199 6.53071 14.8459 6.68281C14.9719 6.83491 15.1609 6.92349 15.3589 6.94228C15.7279 6.93244 16.0428 6.63807 16.0698 6.2614V6.15492C16.0968 4.90142 15.3328 3.76602 14.1709 3.3276Z" fill="currentColor" />
							</svg>
						</span>
						<span class="btn-text"><?php echo esc_html($settings['btn_text']);?></span>
					</a>
				<?php endif;?>
			</div>
			<?php elseif($settings['button_style'] == 'btn_long'):
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