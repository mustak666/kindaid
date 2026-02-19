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
        $this->register_style_controls();
	}
	protected function ragister_tab_controls(): void {

		// fect content
		$this->start_controls_section(
			'heading',
			[
				'label' => esc_html__( 'Heading', 'kindaid-core' ),
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

			$this->add_control(
				'content',
				[
					'label' => esc_html__( 'Content', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
				]
			);
		$this->end_controls_section();
		//  fect content

	}
	protected function register_style_controls(){
		$this->start_controls_section(
			'section_area_style',
			[
				'label' => esc_html__( 'Section Style', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
			);

			$this->add_control(
				'bg_color',
				[
					'label' => esc_html__( 'Sub Title Color', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .el-bg' => 'background-color: {{VALUE}};',
					],
				]
			);

			$this->add_control(
				'bg_margin',
				[
					'label' => esc_html__( 'Margin', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'custom' ],
					'default' => [
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => '',
						'unit' => 'px',
						'isLinked' => false,
					],
					'selectors' => [
						'{{WRAPPER}} .el-bg' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			$this->add_control(
				'bg_padding',
				[
					'label' => esc_html__( 'Padding', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'custom' ],
					'default' => [
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => '',
						'unit' => 'px',
						'isLinked' => false,
					],
					'selectors' => [
						'{{WRAPPER}} .el-bg' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

		$this->end_controls_section();


		$this->start_controls_section(
			'section_sub_title_style',
			[
				'label' => esc_html__( 'Sub Title', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
			);

			$this->add_control(
				'sub_title_color',
				[
					'label' => esc_html__( 'Sub Title Color', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .el-sub-title' => 'color: {{VALUE}};',
					],
				]
			);

			$this->add_control(
				'sub_title_margin',
				[
					'label' => esc_html__( 'Margin', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'custom' ],
					'default' => [
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => '',
						'unit' => 'px',
						'isLinked' => false,
					],
					'selectors' => [
						'{{WRAPPER}} .el-sub-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			$this->add_control(
				'sub_title_padding',
				[
					'label' => esc_html__( 'Padding', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'custom' ],
					'default' => [
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => '',
						'unit' => 'px',
						'isLinked' => false,
					],
					'selectors' => [
						'{{WRAPPER}} .el-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			
			$this->add_control(
				'sub_title_alignment',
				[
					'label' => esc_html__( 'Alignment', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::CHOOSE,
					'options' => [
						'left' => [
							'title' => esc_html__( 'Left', 'textdomain' ),
							'icon' => 'eicon-text-align-left',
						],
						'center' => [
							'title' => esc_html__( 'Center', 'textdomain' ),
							'icon' => 'eicon-text-align-center',
						],
						'right' => [
							'title' => esc_html__( 'Right', 'textdomain' ),
							'icon' => 'eicon-text-align-right',
						],
					],
					'default' => 'left',
					'toggle' => true,
					'selectors' => [
						'{{WRAPPER}} .el-sub-title' => 'text-align: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'sub_title_typography',
					'selector' => '{{WRAPPER}} .el-sub-title',
				]
			);


		$this->end_controls_section();

		$this->start_controls_section(
			'section_title_style',
			[
				'label' => esc_html__( 'Title', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
			);

			$this->add_control(
				'title_color',
				[
					'label' => esc_html__( 'Title Color', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .el-title' => 'color: {{VALUE}};',
					],
				]
			);

			$this->add_control(
				'title_mark_color',
				[
					'label' => esc_html__( 'Title Mark Color', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .el-title span' => 'color: {{VALUE}};',
					],
				]
			);

			$this->add_control(
				'title_margin',
				[
					'label' => esc_html__( 'Margin', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'custom' ],
					'default' => [
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => '',
						'unit' => 'px',
						'isLinked' => false,
					],
					'selectors' => [
						'{{WRAPPER}} .el-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			$this->add_control(
				'title_padding',
				[
					'label' => esc_html__( 'Padding', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'custom' ],
					'default' => [
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => '',
						'unit' => 'px',
						'isLinked' => false,
					],
					'selectors' => [
						'{{WRAPPER}} .el-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			$this->add_control(
				'title_alignment',
				[
					'label' => esc_html__( 'Alignment', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::CHOOSE,
					'options' => [
						'left' => [
							'title' => esc_html__( 'Left', 'textdomain' ),
							'icon' => 'eicon-text-align-left',
						],
						'center' => [
							'title' => esc_html__( 'Center', 'textdomain' ),
							'icon' => 'eicon-text-align-center',
						],
						'right' => [
							'title' => esc_html__( 'Right', 'textdomain' ),
							'icon' => 'eicon-text-align-right',
						],
					],
					'default' => 'left',
					'toggle' => true,
					'selectors' => [
						'{{WRAPPER}} .el-title' => 'text-align: {{VALUE}};',
					],
				]
			);

			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'title_typography',
					'selector' => '{{WRAPPER}} .el-title',
				]
			);


		$this->end_controls_section();


		$this->start_controls_section(
			'section_content_style',
			[
				'label' => esc_html__( 'Content', 'kindaid-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
			);

			$this->add_control(
				'content_color',
				[
					'label' => esc_html__( 'Color', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .el-content' => 'color: {{VALUE}};',
					],
				]
			);


			$this->add_control(
				'content_margin',
				[
					'label' => esc_html__( 'Margin', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'custom' ],
					'default' => [
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => '',
						'unit' => 'px',
						'isLinked' => false,
					],
					'selectors' => [
						'{{WRAPPER}} .el-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			$this->add_control(
				'content_padding',
				[
					'label' => esc_html__( 'Padding', 'kindaid-core' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'custom' ],
					'default' => [
						'top' => '',
						'right' => '',
						'bottom' => '',
						'left' => '',
						'unit' => 'px',
						'isLinked' => false,
					],
					'selectors' => [
						'{{WRAPPER}} .el-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			$this->add_control(
				'content_alignment',
				[
					'label' => esc_html__( 'Alignment', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::CHOOSE,
					'options' => [
						'left' => [
							'title' => esc_html__( 'Left', 'textdomain' ),
							'icon' => 'eicon-text-align-left',
						],
						'center' => [
							'title' => esc_html__( 'Center', 'textdomain' ),
							'icon' => 'eicon-text-align-center',
						],
						'right' => [
							'title' => esc_html__( 'Right', 'textdomain' ),
							'icon' => 'eicon-text-align-right',
						],
					],
					'default' => 'left',
					'toggle' => true,
					'selectors' => [
						'{{WRAPPER}} .el-content' => 'text-align: {{VALUE}};',
					],
				]
			);

			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'content_typography',
					'selector' => '{{WRAPPER}} .el-content',
				]
			);


		$this->end_controls_section();
	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
		?>
		<?php if(!empty($settings['sub_title']) || !empty($settings['title'])):?>
			<div class="tp-section-wrap p-relative el-bg">
				<?php if(!empty($settings['sub_title'])):?>
				  <span class="tp-section-subtitle el-sub-title d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s"><?php echo esc_html($settings['sub_title']);?></span>
				<?php endif;?>
				<?php if(!empty($settings['title'])):?>
				  <h2 class="tp-section-title mb-20 el-title wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s"><?php echo kd_kses($settings['title']);?></h2>   
				<?php endif;?>
				<?php if(!empty($settings['content'])):?>
				  <p class="tp-section-dec el-content"><?php echo kd_kses($settings['content']);?></p>
				<?php endif;?>
			</div>
		<?php endif;?>
		<?php
	}

}
$widgets_manager->register( new Kindaid_Section_Title() );