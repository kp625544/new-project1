<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NewPage</title>
  </head>
  <body>
    <?php
require_once('/opt/lampp/htdocs/new-project1/Classes/clsStudentRegistration.php');
$objStudentRegistration= new clsStudentRegistration();
$objStudentRegistration->setUserId("newStudent");

     ?>
     bdaljcdljca
     dakcmvdvs
     <?php
echo $objStudentRegistration->getUserId();
echo $objStudentRegistration->getUser();
      ?>
  </body>
</html>
