<?php
class Kindaid_Hero_Video extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_hero_video';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Hero Video', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'hero-video' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {

		// hero content
		$this->start_controls_section(
			'hero_content',
			[
				'label' => esc_html__( 'Hero Content', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
	     	);

			$this->add_control(
				'video_url',
				[
					'label' => esc_html__( 'Video URL', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( '#', 'kindaid-core' ),
				]
			);

			$this->add_control(
				'title',
				[
					'label' => esc_html__( 'Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'Your Donation Helps Others.', 'kindaid-core' ),
				]
			);

		$this->end_controls_section();
		//  hero content

		// hero btn
		$this->start_controls_section(
			'hero_btn',
			[
				'label' => esc_html__( 'Hero Btn,s', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
			$this->add_control(
				'btn_url_2',
				[
					'label' => esc_html__( 'Btn URL 02', 'textdomain' ),
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
				'btn_text_2',
				[
					'label' => esc_html__( 'Btn Text 02', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'Donation', 'kindaid-core' ),
				]
			);

		$this->end_controls_section();
		// hero btn
		
		// hero image 
		$this->start_controls_section(
			'hero_popup',
			[
				'label' => esc_html__( 'Hero Popup Video', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		   );
			$this->add_control(
				'popup_video_title',
				[
					'label' => esc_html__( 'Popup Video Title', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'Feature Who are you', 'kindaid-core' ),
				]
			);
			$this->add_control(
				'popup_video_url',
				[
					'label' => esc_html__( 'Popup Video URL', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( '#', 'kindaid-core' ),
				]
			);

		$this->end_controls_section();
		// hero image 


	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();

		if ( ! empty( $settings['btn_url']['url'] ) ) {
			$this->add_link_attributes( 'btn_args', $settings['btn_url'] );
			$this->add_render_attribute( 'btn_args', 'class' , 'tp-btn tp-btn-animetion mr-5 mb-10' );
		}
		if ( ! empty( $settings['btn_url_2']['url'] ) ) {
			$this->add_link_attributes( 'btn_args_2', $settings['btn_url_2'] );
			$this->add_render_attribute( 'btn_args_2', 'class' , 'tp-btn tp-btn-secondary tp-btn-animetion mb-10' );
		}

		?>
		
      <div class="tp-hero-area tp-hero-3-style fix">
         <div class="tp-hero-3-video-container">
			<?php if(!empty($settings['video_url'])):?>
				<video loop="" muted="" autoplay="" playsinline="">
				<source src="<?php echo esc_url($settings['video_url']);?>" type="video/mp4">
				</video>
			<?php endif;?>
         </div> 
         <div class="container-fluid container-1790">
            <div class="row align-items-end">
               <div class="col-lg-7">
                  <div class="tp-hero-content p-relative z-index-2 mb-30">
					<?php if(!empty($settings['title'])):?>
                      <h2 class="tp-hero-title mb-40 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s"><?php echo kd_kses($settings['title']);?></h2>
					<?php endif;?>

                     <div class="tp-hero-btn wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
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
						<?php if(!empty($settings['btn_text_2'])):?>
							<a <?php $this->print_render_attribute_string( 'btn_args_2' ); ?>>
								<span class="btn-text"><?php echo esc_html($settings['btn_text_2']);?></span>
								<span class="btn-icon">
									<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</span>
							</a>
						<?php endif;?>
                     </div>

                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="d-flex justify-content-lg-end">
                     <div class="tp-hero-3-video-wrap mb-40 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
						<?php if(!empty($settings['popup_video_title'])):?>
                          <span class="tp-hero-3-video-text mr-25"><?php echo kd_kses($settings['popup_video_title']);?></span>
						<?php endif;?>
                          <a class="tp-hero-3-video-btn popup-video" href="<?php echo esc_url($settings['popup_video_url']);?>">
                           <span>
                              <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M0.660254 1.73205C0.660254 0.962251 1.49359 0.481125 2.16025 0.866025L14.1603 7.79423C14.8269 8.17913 14.8269 9.14138 14.1603 9.52628L2.16025 16.4545C1.49359 16.8394 0.660254 16.3583 0.660254 15.5885L0.660254 1.73205Z" fill="currentColor" />
                              </svg>
                           </span>
                        </a>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
		<?php

	}

}
$widgets_manager->register( new Kindaid_Hero_Video() );