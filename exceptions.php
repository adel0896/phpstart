<?php
// function add($one,$two){
//   if(! is_float($one) || ! is_float($two)) {
//     throw new InvalidArgumentException('please provide a float');
//   }
//   return $one+ $two;
// }
// try {
// echo add(2,[]);
// } catch(InvalidArgumentException $e){
//   echo 'oh well';
// }
//
// class Video{
//
//
// }
// class User {
//   public function download(Video $video)
//   {
//     if(! $this->subscribed()){
//       throw new Exception('you must be subscribed to download videos');
//     }
//   }
//   public function subscribed()
//   {
//     return false;
//   }
// }
// (new User)->download(new Video);
//       (new User)->download(new Video);


class Member {
  public $name;
  public function __construct($name)
  {
    $this->name = $name;
  }
}
class Team {
  protected $members = [];
  public function add(Member $member){
    if(count($this->members) === 3)
    {
      throw new Exception('you may not add more than 3 mebmbers');
    }
$this->members[] = $member;
  }
  public function members()
  {
    return $this->members;
  }
}

class TeamMembersController{
  public function store()
  {
try {

  $team = new Team; // has a maximum of 3 members
  $team->add(new Member('Jane Doe'));
  $team->add(new Member('John Doe'));
  $team->add(new Member('Frank Doe'));
  $team->add(new Member('Susane Doe'));
  var_dump($team->members());
} catch (Exception $e) {
  var_dump($e->getMessage());
}
  }
}
(new TeamMembersController())->store();
 ?>
