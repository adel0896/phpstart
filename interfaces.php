<?php
interface Newsletter
{
  public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{

public function subscribe($email) {
  die('subscribing with Campaign');
}
}
class Drip implements Newsletter
{
  public function subscribe($email) {
  die('subscribing with drip');
  var_dump($email);
  }
}

class NewsletterSubscriptionController
{
  public function store(Newsletter $newsletter)
  {
    $email = 'ade@example.com';
    $newsletter->subscribe($email);
  }
}
$controller = new NewsletterSubscriptionController();
$controller->store(new CampaignMonitor());



 ?>
