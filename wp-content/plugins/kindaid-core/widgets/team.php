<?php
class Kindaid_Team extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_team';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Team', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'team' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {

		// fect content
		$this->start_controls_section(
			'team_content',
			[
				'label' => esc_html__( 'Team Content', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
	     	);
			$this->add_control(
				'image',
				[
					'label' => esc_html__( 'Choose Image', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
			$this->add_control(
				'sub_title',
				[
					'label' => esc_html__( 'Sub Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Volunteer', 'kindaid-core' ),
				]
			);
			$this->add_control(
				'title',
				[
					'label' => esc_html__( 'Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'Rosalina Willaim', 'kindaid-core' ),
				]
			);
			$this->add_control(
				'url',
				[
					'label' => esc_html__( 'URL', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( '#', 'kindaid-core' ),
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'team_social',
			[
				'label' => esc_html__( 'Team Social', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
	     	);
			$this->add_control(
				'fb_url',
				[
					'label' => esc_html__( 'Facbook URL', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( '#', 'kindaid-core' ),
				]
			);
			$this->add_control(
				'lin_url',
				[
					'label' => esc_html__( 'Linkedin URL', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( '#', 'kindaid-core' ),
				]
			);
			$this->add_control(
				'tw_url',
				[
					'label' => esc_html__( 'Twitter URL', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( '#', 'kindaid-core' ),
				]
			);
			$this->add_control(
				'ins_url',
				[
					'label' => esc_html__( 'Instragram URL', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( '#', 'kindaid-core' ),
				]
			);
			$this->add_control(
				'yt_url',
				[
					'label' => esc_html__( 'Youtube URL', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( '', 'kindaid-core' ),
				]
			);
			$this->add_control(
				'be_url',
				[
					'label' => esc_html__( 'Behance URL', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( '', 'kindaid-core' ),
				]
			);

		$this->end_controls_section();
		//  fect content

	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
		?>
			<div class="tp-team-item text-center mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
				<?php if(!empty($settings['image']['id'])):?>
					<div class="tp-team-thumb mb-30">
						<?php echo wp_get_attachment_image( $settings['image']['id'], 'full' );?>
					</div>
				<?php endif;?>
				<div class="tp-team-content">
					<?php if(!empty($settings['sub_title'])):?>
					  <span class="mb-10 d-block"><?php echo esc_html($settings['sub_title']);?></span>
					<?php endif;?>
					<?php if(!empty($settings['title'])):?>
					<h3 class="tp-team-title mb-10">
						<a href="<?php echo esc_url($settings['url']);?>"><?php echo esc_html($settings['title']);?></a>
					</h3>
					<?php endif;?>
					<div class="tp-team-social">
						<?php if(!empty($settings['fb_url'])):?>
						<a href="<?php echo esc_url($settings['fb_url']);?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="12" height="18" viewBox="0 0 12 18" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M1.62839 7.77713C0.911363 7.77713 0.761719 7.91782 0.761719 8.59194V9.81416C0.761719 10.4883 0.911363 10.629 1.62839 10.629H3.36172V15.5179C3.36172 16.192 3.51136 16.3327 4.22839 16.3327H5.96172C6.67874 16.3327 6.82839 16.192 6.82839 15.5179V10.629H8.77466C9.31846 10.629 9.45859 10.5296 9.60798 10.038L9.97941 8.81579C10.2353 7.97368 10.0776 7.77713 9.14609 7.77713H6.82839V5.74009C6.82839 5.29008 7.21641 4.92527 7.69505 4.92527H10.1617C10.8787 4.92527 11.0284 4.78458 11.0284 4.11046V2.48083C11.0284 1.80671 10.8787 1.66602 10.1617 1.66602H7.69505C5.30182 1.66602 3.36172 3.49004 3.36172 5.74009V7.77713H1.62839Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
							</svg>
						</a>
						<?php endif;?>

						<?php if(!empty($settings['tw_url'])):?>
						<a href="<?php echo esc_url($settings['tw_url']);?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M5.28884 0.714844H0.666992L6.14691 7.9153L1.01754 13.9556H3.38746L7.26697 9.38713L10.7118 13.9136H15.3337L9.69453 6.50391L9.70451 6.51669L14.5599 0.798959H12.19L8.58427 5.04503L5.28884 0.714844ZM3.21817 1.97588H4.65702L12.7825 12.6525H11.3436L3.21817 1.97588Z" fill="currentColor"/>
							</svg>
						</a>
						<?php endif;?>

						<?php if(!empty($settings['lin_url'])):?>
						<a href="<?php echo esc_url($settings['lin_url']);?>">
							<i class="fa-brands fa-linkedin-in"></i>
						</a>
						<?php endif;?>

						<?php if(!empty($settings['ins_url'])):?>
						<a href="<?php echo esc_url($settings['ins_url']);?>">
							<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.66602 8.99935C1.66602 5.54238 1.66602 3.8139 2.73996 2.73996C3.8139 1.66602 5.54238 1.66602 8.99935 1.66602C12.4563 1.66602 14.1848 1.66602 15.2587 2.73996C16.3327 3.8139 16.3327 5.54238 16.3327 8.99935C16.3327 12.4563 16.3327 14.1848 15.2587 15.2587C14.1848 16.3327 12.4563 16.3327 8.99935 16.3327C5.54238 16.3327 3.8139 16.3327 2.73996 15.2587C1.66602 14.1848 1.66602 12.4563 1.66602 8.99935Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
								<path d="M12.4747 9.00103C12.4747 10.9195 10.9195 12.4747 9.00103 12.4747C7.08256 12.4747 5.52734 10.9195 5.52734 9.00103C5.52734 7.08256 7.08256 5.52734 9.00103 5.52734C10.9195 5.52734 12.4747 7.08256 12.4747 9.00103Z" stroke="currentColor" stroke-width="1.5"/>
								<path d="M13.251 4.75391L13.242 4.75391" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>     
						</a>
						<?php endif;?>

						<?php if(!empty($settings['yt_url'])):?>
						<a href="<?php echo esc_url($settings['yt_url']);?>">
							<i class="fa-brands fa-youtube"></i>   
						</a>
						<?php endif;?>
						
						<?php if(!empty($settings['be_url'])):?>
						<a href="<?php echo esc_url($settings['be_url']);?>">
							<i class="fa-brands fa-behance"></i>     
						</a>
						<?php endif;?>
					</div>     
				</div>
			</div>
		<?php
	}

}
$widgets_manager->register( new Kindaid_Team() );