<?php
function getDBConnection():PDO{ 
    $user="root"; 
    $pass="";
    $dbname="view_form";
    $host="localhost";  
    $options=array(     PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",     PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION         );
    $dns= 'mysql:host='.$host.';dbname='.$dbname; 
    $dbh = new PDO($dns, $user, $pass,$options);  
    return $dbh;      }
/**
 * Récupérer les messages dans la base de données
 */
function findAll(): array
{
$db = getDBConnection();
$request = $db->query('SELECT * from message');
$request->setFetchMode(PDO::FETCH_ASSOC);
$messages=$request->fetchAll();
$request->closeCursor();
return $messages;
}

function create($pseudo,$content) : void {
$dbh = getDBConnection();
$req = $dbh->prepare("INSERT INTO MESSAGE (pseudo,content) VALUES (:pseudo, :content)");
$req->bindParam(':pseudo',$pseudo);
$req->bindParam(':content',$content);
$req->execute();}
?>
