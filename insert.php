<?php


$name = $_POST["name"];
$category = $_POST["category"];
$naiyou = $_POST["naiyou"];


try {
    $pdo = new PDO('mysql:dbname=a;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}


$stmt = $pdo->prepare("INSERT INTO a_table(id, name, category, naiyou,
indate )VALUES(NULL, :name, :category, :naiyou, sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  
$stmt->bindValue(':category', $category, PDO::PARAM_STR); 
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);  
$status = $stmt->execute();


if ($status==false) {

    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {

    header("Location: index.php");
    exit;
}
