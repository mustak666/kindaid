<?php
use Etn\Core\Event\Event_Model;
defined('ABSPATH') || exit;

$single_event_id = get_the_id();
$tickets = get_post_meta( get_the_ID(), 'etn_ticket_variations', true );
$ticket_status = ($tickets[0]['etn_ticket_price'] > 0) ? 'Paid' : 'Free';

$event = new Event_Model( $single_event_id );
$event_start_time = $event->etn_start_time;
$event_end_time = $event->etn_end_time;
$start_date = get_post_meta( $single_event_id, 'etn_start_date', true );
$location = \Etn\Core\Event\Helper::instance()->display_event_location(get_the_ID());

if( ( ETN_DEMO_SITE === false ) || ( ETN_DEMO_SITE == true && ETN_EVENT_TEMPLATE_TWO_ID != get_the_ID(  ) && ETN_EVENT_TEMPLATE_THREE_ID != get_the_ID(  )) ){
?>
<?php do_action("etn_before_single_event_details", $single_event_id); ?>

    <div class="tp-event-details-area pt-35">
        <div class="container container-1424">

            <div class="row align-items-end">
                <div class="col-lg-8 col-md-8">
                    <div class="tp-section-info mb-30">
                        <span class="tp-section-subtitle mb-15 d-inline-block">Discover Events</span>
                        <h2 class="tp-section-title"><?php echo esc_html( apply_filters('etn_single_event_content_title', get_the_title()) );?></h2>  
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="tp-event-price text-md-end mb-45">
                        <span><?php echo esc_html($ticket_status);?></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php if (has_post_thumbnail() && !post_password_required()) : ?>
                        <div class="tp-event-details-img mt-25 mb-60">
                            <?php echo get_the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <?php do_action("etn_before_single_event_content_wrap", $single_event_id); ?>
                        <div class="tp-event-details mb-30">
                            <?php the_content();?>
                            <div class="tp-event-map">
                            <h3 class="tp-event-inner-title mb-20">See Our Locations</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d29198.421867866567!2d90.3643136!3d23.8256128!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1747064210712!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" ></iframe>
                            </div>
                            <?php do_action("etn_after_single_event_details_rsvp_form", $single_event_id); ?>
                        </div>
                    <?php do_action("etn_after_single_event_content_wrap", $single_event_id); ?>   
                </div>
                
                <div class="col-xl-4 col-lg-5">
                    <div class="tp-event-sidebar ml-65">

                        <div class="tp-event-info mb-20">
                            <div class="tp-event-info-icon">
                                <i class="fal fa-calendar-alt"></i>
                            </div>
                            <div class="tp-event-info-text">
                                <h3 class="tp-event-info-title"><?php echo esc_html__('Event Date','kindaid-core');?></h3>
                                <span><?php echo esc_html( date('F j, Y', strtotime($start_date)) ); ?> <br> <?php echo esc_html($event_start_time) . ' - ' . esc_html($event_end_time);?></span>
                            </div>
                        </div>
                        
                        <div class="tp-event-info tp-event-info-2 mb-20" data-bg-color="#620035">
                            <div class="tp-event-info-icon">
                                <i class="far fa-map-marker-alt"></i>
                            </div>
                            <div class="tp-event-info-text">
                                <h3 class="tp-event-info-title"><?php echo esc_html__('Event Location','kindaid-core');?></h3>
                                <span><?php echo esc_html($location);?></span>
                            </div>
                        </div>
                            <?php dynamic_sidebar('event_sidebar');?>
                        </div>
                    </div>
                </div>
            </div>
            <?php  do_action("etn_after_single_event_container", $single_event_id); ?>
        </div>
    </div>

<?php do_action("etn_after_single_event_details", $single_event_id); ?>

<?php } ?>