<?php
add_action('woocommerce_subscription_date_updated', 'subscription_date_update', 10, 3);

function subscription_date_update($subscription, $date_type, $datetime)
{
  //Do your stuff here...
}
