<?php
class Subscription

{
  protected Gateway ;
  public function __construct(Gateway $gateway) {
    $this->gateway = $gateway;
  }
  public function create()
  {

  }
  public function cancel()
  {
$customer = $this->gateway->findSubscriptionCustomer;
  }
  public function invoice()
  {

  }
  public function swap($newPlan)
  {

  }

}
interface  Gateway
{
  public function findCustomer();
  public function findSubscriptionCustomer();
}
class StripeGateway implements Gateway
{
  public function findCustomer()
  {

  }
  public function findSubscriptionCustomer()
  {

  }
}
class BraintreeGateway implements Gateway
{
  public function findCustomer()
  {

  }
  public function findSubscriptionCustomer()
  {

  }
}
new Subscription(new BraintreeGateway());
 ?>
