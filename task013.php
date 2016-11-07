<?php
//Create array.
$browsers=array(
    "Firefox",
    "Chrome",
    "Internet Explorer",
    "Safari",
    "Opera",
    "Other"
  );

class Select{
  //Property
  private $name;   //String variable.
  private $value;  //Array variable.

  //settor method for string name
  public function setName($name){
     $this->name = $name;
  }
  //getter mehod
  public function getName(){
     return $this->name;
  }
  //settor method for an array of values
  public function setValue($value){
     if (!is_array($value)){
        die("Error: value is not an array.");
     }
     $this->value = $value;
   }
   //get values
  public function getValue(){
     return $this->value;
  }

  //This method creates the actual select options. It is private,
  //since there is no need for it outside the operations of the class.
  private function makeOptions($value){
     foreach($value as $v){
        echo "<option value=\"$v\">" .ucwords($v). "</option>\n";
      }
  }

  //This method puts it all together to create the select field.
  public function makeSelect(){
     echo "<select name=\"" .$this->getName(). "\">\n";
     //Create options.
     $this->makeOptions($this->getValue());
     echo "</select>" ;
  }
}//end class

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Classes , methods and array</title>
</head>
<body>
<h2>User Registration<br /></h2>

<?php
  if(!isset($_POST['submit'])){
?>
<form method="post" action="">
<p>Name:<br />
<input type="text" name="name" size="60" />  </p>
<p>Username:<br />
<input type="text" name="username" size="60" /></p>
<p>Email:<br />
<input type="text" name="email" size="60" /></p>
<p>Browser:


<?php
//Instantiate object.
$browser = new Select();
//Set properties.
$browser->setName('browser');
$browser->setValue($browsers);
$browser->makeSelect();
?>
</p>
<input type="submit" name="submit" value="Go" />

</form>

<?php
  //If form submitted, process input.
  }else{
    //Could include code to send data to database here.
    //Retrieve user responses.
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    //The following variable has an altered name to avoid confusion.
    $Browser=$_POST['browser'];
    if(empty($name) || empty($username) || empty($email) || empty($Browser)){
      header("Location: task013.php");
    }else{
    //Confirm responses to user.
    echo "Data collected about  $name: <br />";
    echo "Username: $username<br />";
    echo "Email: $email<br />";
    echo "Browser: $Browser<br />";
  }

}
?>

</body>
</html>
