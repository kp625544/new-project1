   <?php
  require_once('config/config.php');
class clsDatabase{

  private $con=NULL;
  public $userArray;


  public function clsDatabase()
  {

  $dbServerName = dbServerName;
    $dbUsername = dbUsername;
    $dbPassword = dbPassword;
    $dbName = dbName;

    $con = mysqli_connect($dbServerName,$dbUsername,$dbPassword) or die("cannot connect");
    mysqli_select_db($con,dbName) or die("cannot connect");

    $this->con = $con;

  }
  /*private region*/
/*
private $vServerName_C = "localhost" ;
private $vUserName_C = "root" ;
private $vPassword_C = "" ;
private $vdb_C = "dbStudent";
*/
/*
public function __construct($vServerName_C,$vUserName_C,$vPassword_C,$vdb_C){
  $this->vServerName_C = $vServerName_C;
  $this->vUserName_C = $vUserName_C;
  $this->vPassword_C = $vPassword_C;
  $this->vdb_C = $vdb_C;
}
*/
/*
public function ConnectToDatabase(){
  global $vUserName_C;
  global $vServerName_C;
  global $vPassword_C;
  global $vdb_C;
  $vconn_C = mysqli_connect($vServerName_C,$vUserName_C,$vPassword_C,$vdb_C);
if(!$vconn_C){
  die("Connection failed".mysqli_connect_error());
}
}
*/
/*end of private region*/
/*public region*/
// Check connection



// Check connection
/*end of public region*/
}
?>
