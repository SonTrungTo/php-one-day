<?php
$dsn  = 'mysql:host=127.0.0.1;dbname=pawszone';
$username = 'pz_admin';
$password = 'ABCD';

try {
    $pdo = new PDO($dsn, $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e) {
    echo 'Connection failed: '.$e->getMessage();
}

# Create SQL using placeholders
$sqlUnnamed = "SELECT * FROM pets WHERE owner = ? AND petname = ?";
$sqlNamed = "SELECT * FROM pets WHERE owner = :owner AND petname = :pname";
# Prepare the statements
$prepareUnnamed = $pdo->prepare($sqlUnnamed);
$prepareNamed = $pdo->prepare($sqlNamed);
# Binding values to placeholders
## bindValue() or bindParam()
$prepareUnnamed->bindValue(2, $myPet);
$prepareNamed->bindValue(':pname', $myPet);
# Execute the statement
$prepareUnnamed->execute();
$prepareNamed->execute();
# Fetch the data returned, if any
## fetch() vs fetchAll()
## FETCH_NUM vs FETCH_ASSOC
while ($row = $prepareUnnamed->fetch(PDO::FETCH_NUM)) {
    echo 'Pet = '.$row[1].'<BR>';
    echo 'Owner = '.$row[0].'<BR><BR>';
}

while ($row = $prepareUnnamed->fetch(PDO::FETCH_ASSOC)) {
    echo 'Pet = '.$row['petname'].'<BR>';
    echo 'Owner = '.$row['owner'].'<BR><BR>';
}
