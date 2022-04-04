<?php
//inheriting
class CoffeeMaker
{
  public function brew()
  {
    var_dump('Brewing the coffee');
  }
}
// a specialty coffe maker is a coffee maker
(new CoffeeMaker())->brew();
class SpecialtyCoffeeMaker extends CoffeeMaker
{
  public function brewLatte(){
    var_dump('Brewing latte');

  }
}
(new SpecialtyCoffeeMaker())->brew();


//more about inheriting and mapping through arrays


class Collection
{
  protected array $items;
  public function __construct(array $items)
  {
    $this->items = $items;
  }
  public function sum($key){
    // with array_map it will give you 100 200 300 and if we put array_sum of the mapped array it will sum them up
    // and array_column goes through them and grabs the key
  return  array_sum(array_column($this->items, $key));
  }
}
class VideosCollection extends Collection
{
  public function length() {
    return $this->sum('length');
  }
}
class Video
{
  public $title;
  public $length;
  public function __construct($title, $length)
  {
    $this->title = $title;
    $this->length = $length;
  }
}
$videos = new VideosCollection([
  new Video('Some Video', 100),
  new Video('Some Video 2', 200),
  new Video('Some Video 3', 300)
]);
// var_dump($videos)
echo $videos->length('length')


 ?>
