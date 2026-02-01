<?php
class Kindaid_Gallery extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'kindaid_gallery';
	}

	public function get_title(): string {
		return esc_html__( 'Kindaid Gallery', 'kindaid-core' );
	}

	public function get_icon(): string {
		return 'eicon-code';
	}

	public function get_categories(): array {
		return [ 'kindaid_core' ];
	}

	public function get_keywords(): array {
		return [ 'kindaid', 'gallery' ];
	}


    // controls here 
	protected function register_controls(): void {
        $this->ragister_tab_controls();
	}
	protected function ragister_tab_controls(): void {

		$this->start_controls_section(
			'gallery_section',
			[
				'label' => esc_html__( 'Gallery Section', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
	     	);
			$repeater = new \Elementor\Repeater();

			$repeater->add_control(
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
				'gallery_list',
				[
					'label' => esc_html__( 'Gallery List', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
				]
			);
		$this->end_controls_section();
		//  fect content

	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
	?>
      <div class="tp-gallery-area">
         <div class="container-fluid container-1790">
			<?php if(!empty($settings['gallery_list'])):?>
            <div class="swiper-container tp-gallery-slider-active">
               <div class="swiper-wrapper">
				<?php foreach($settings['gallery_list'] as $list):
						if(!empty($list['image'])){
							$image_url = (!empty( $list['image']['id'])) ? wp_get_attachment_image_url( $list['image']['id'], 'full' ) :  $list['image']['url'];
							$image_alt = get_post_meta( $list['image']['id'], '_wp_attachment_image_alt', true );
						}
					?>
                  <div class="swiper-slide">
                     <div class="tp-gallery p-relative fix">
                        <img src="<?php echo esc_url($image_url);?>" alt="<?php echo esc_attr($image_alt);?>">
                        <a class="popup-image" href="<?php echo esc_url($image_url);?>">
                           <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8 1V15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M1 8H15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </a>
                     </div>
                  </div>
				<?php endforeach;?>
               </div>
            </div>
			<?php endif;?>
         </div>
      </div>
		<?php
	}

}
$widgets_manager->register( new Kindaid_Gallery() );