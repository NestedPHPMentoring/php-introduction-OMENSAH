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
<p>Work Access:<br></p>
<p> Primary Browser :
<?php
//Instantiate object.
$select = new Select();
//Set properties.
$select->setName('browser');
$select->setValue($browsers);
$select->makeSelect();
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Speed:
<?php
//set propeties
$select ->setName('speed');
$select->setValue($speed);
$select->makeSelect();

?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
os:
<?php
//set propeties
$select ->setName('os');
$select->setValue($os);
$select->makeSelect();

?>
</p>

<p>Home Access:<br></p>
<p> Primary Browser :
<?php
//Instantiate object.
$select = new Select();
//Set properties.
$select->setName('browser_home');
$select->setValue($browsers);
$select->makeSelect();
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Speed:
<?php
//set propeties
$select ->setName('speed_home');
$select->setValue($speed);
$select->makeSelect();

?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
os:
<?php
//set propeties
$select ->setName('os_home');
$select->setValue($os);
$select->makeSelect();
unset($select);
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
    $OS  = $_POST['os'];
    $Speed = $_POST['speed'];

    $Browser_home=$_POST['browser_home'];
    $OS_home  = $_POST['os_home'];
    $Speed_home = $_POST['speed_home'];


    //Confirm responses to user.
    echo "Data collected about  $name: <br />";
    echo "Username: $username<br />";
    echo "Email: $email<br /> <br>";
    echo "Work internet details<br>";
    echo "Browser: $Browser<br />";
    echo "OS: $OS <br>";
    echo "Speed: $Speed<br><br>";
    echo "Home internet details<br>";
    echo "Browser: $Browser_home<br />";
    echo "OS: $OS_home<br>";
    echo "Speed: $Speed_home<br>";
  }
?>

</body>
</html>
