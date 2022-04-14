<?php
$dsn  = 'mysql:host=localhost;dbname=pawszone';
$username = 'pz_admin';
$password = 'ABCD';

# Section A - Connect to DB
try {
    $pdo = new PDO($dsn, $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e) {
    echo 'Connection failed: '.$e->getMessage();
}

# Section B - CREATE TABLE
$sql = "DROP TABLE pets";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$sql = "CREATE TABLE IF NOT EXISTS pets(
    owner     VARCHAR(255) NOT NULL,
    petname   VARCHAR(255) NOT NULL,
    breed     VARCHAR(255) NOT NULL,
    microchip VARCHAR(20),
    PRIMARY KEY(owner, petname))";

$stmt = $pdo->prepare($sql);

$stmt->execute();

# Section C - INSERT DATA
$sql = "INSERT INTO pets (owner, petname, breed)
        VALUES (:owner, :petname, :breed)";

$stmt = $pdo->prepare($sql);

$owner = array("Ted", "Jamie", "En", "En");
$pname = array("Angel", "Max", "Boots", "Dora");
$breed = array("Labradoodle", "Domestic Shorthair",
"Domestic Shorthair", "Muchkin");

for ($i = 0; $i < 4; $i++) { 
    $stmt->bindValue(':owner', $owner[$i]);
    $stmt->bindValue(':petname', $pname[$i]);
    $stmt->bindValue(':breed', $breed[$i]);

    $stmt->execute();
}

# Section D - UPDATE DATA
$sql = "UPDATE pets SET microchip = :micro WHERE owner = :owner AND
petname = :petname";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':micro', '1232316546');
$stmt->bindValue(':owner', 'Jamie');
$stmt->bindValue(':petname', 'Max');

$stmt->execute();

# Section E - DELETE DATA
$sql = "DELETE FROM pets WHERE owner = :owner AND petname = :petname";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':owner', 'Ted');
$stmt->bindValue(':petname', 'Angel');

$stmt->execute();

# Section D - FETCH DATA
$sql = "SELECT petname, owner FROM pets";

$stmt = $pdo->prepare($sql);

$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
    echo 'Pet = '.$row[0].'<BR>';
    echo 'Owner = '.$row[1].'<BR><BR>';
}

// Different fetch method requires different execution
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo 'Pet = '.$row['petname'].'<BR>';
    echo 'Owner = '.$row['owner'].'<BR><BR>';
}
