<?php
$browsers = array(
  "None",
  "Firefox",
  "Chrome",
  "Internet Explorer",
  "Safari",
  "Opera",
  "Other"
);
$speed=array(
  'Unknown',
  'DSL',
  'T1',
  'Cable',
  'DialUp',
  'Other'
);
$os=array(
  'Windows',
  'Linux',
  'Macintosh',
  'Others'
);
class Select{
  private $name;
  private $value;

  public function __construct($name, $value)
  {
    $this->name = $name;
    $this->value =$value;
  }
  public function setName($name)
  {
    $this->name  = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setValue($value)
  {
    if(is_array($value)){
      $this->value = $value;
    }else{
      echo "<em>Not available options</em>";
    }
  }
}
 ?>
