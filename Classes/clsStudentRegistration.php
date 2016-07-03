<?php
include_once 'config/include.php';
class clsStudentRegistration
{
  // Class object


  /* private region*/
  private $nUserId_SR;
  private $vUserName_SR = 'abc';
  private $vPassword_SR;
  private $vEmail_SR;
  private $vInstitute_SR;
  private $nStatus_SR;
  private $dtCreatedDate_SR;
  /*end of private region*/
  /* public region*/
  public function getUserId(){
    return $this->nUserId_SR;
  }
  public function setUserId($value){
    $this->nUserId_SR=$value;

  }
  /*End of public region*/

  public function getUser(){
    return $this->vUserName_SR;
  }
}

 ?>
