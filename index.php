<?php

require 'model/model.php';

$messages = findall();
  //content = 'aaaaaaa';


if (isset($_POST['pseudo']) && isset($_POST['content']))

{
    var_dump($_POST['content']);
    create($_POST['pseudo'],$_POST['content']);
 }
require 'view/default.php';

?>
