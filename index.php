<?php
/**
 * Created by PhpStorm.
 * User: mandy
 * Date: 2/11/2019
 * Time: 9:45 AM
 */
/*
 * Amanda Williams
 * February 11, 2019
 * 328/pdo/index.php
 */

#Connect to Database
require '/home/awilliam/config.php';
try {
    #Instantiate a database object
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    echo 'Connected to database!';
}
catch (PDOException $e) {
    echo $e->getMessage();
}

#Define the query
$sql ="INSERT INTO pets(type, name, color)
	VALUES (:type, :name, :color)";

#Prepare the statement
$statement = $dbh->prepare($sql);
/*
#Bind the Parameters
$type = 'kangaroo';
$name = 'Joey';
$color = 'purple';
$statement->bindParam(':type', $type, PDO::PARAM_STR);
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':color', $color, PDO::PARAM_STR);

#Execute
$statement->execute();

#Bind the parameters
$type = 'snake';
$name = 'Slytherin';
$color = 'green';
$statement->bindParam(':type', $type, PDO::PARAM_STR);
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':color', $color, PDO::PARAM_STR);


#Bind the Parameters
$type = 'dog';
$name = 'Spot';
$color = 'yellow';
$statement->bindParam(':type', $type, PDO::PARAM_STR);
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':color', $color, PDO::PARAM_STR);

#Execute
$statement->execute();
$id = $dbh->lastInsertId();
echo "<p>Pet $id inserted successfully.</p>";

#Bind the Parameters
$type = 'ferret';
$name = 'Squirrel';
$color = 'blue';
$statement->bindParam(':type', $type, PDO::PARAM_STR);
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':color', $color, PDO::PARAM_STR);

#Execute
$statement->execute();
$id = $dbh->lastInsertId();
echo "<p>Pet $id inserted successfully.</p>";
*/

#Define the query
$sql = "UPDATE pets SET name = :new 
    WHERE name = :old";

#Prepare the statement
$statement = $dbh->prepare($sql);

/*
#Bind the parameters
$old = "Joey";
$new = "Troy";
$statement->bindParam(':old', $old, PDO::PARAM_STR);
$statement->bindParam(':new', $new, PDO::PARAM_STR);

#Execute
$statement->execute();
*/

#Define the query
$sql = "UPDATE pets SET color = :color 
    WHERE name = :name";

#Prepare the statement
$statement = $dbh->prepare($sql);

/*
#Bind the parameters
$name = "Oscar";
$color = "brown";
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':color', $color, PDO::PARAM_STR);

#Execute
$statement->execute();
*/

#Define the query
$sql="DELETE FROM pets WHERE id = :id";

#Prepare the statement
$statement=$dbh->prepare($sql);

/*
#Bind the parameters
$id=1;
$statement->bindParam(':id', $id, PDO::PARAM_INT);

#Execute
$statement->execute();
*/

#Define the query
$sql="SELECT * FROM pets WHERE id = :id";

#Prepare the statement
$statement=$dbh->prepare($sql);

#Bind the parameters
$id=3;
$statement->bindParam(':id', $id, PDO::PARAM_INT);

#Execute
$statement->execute();

#Process the result
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo $row['name'].", ".$row['type'].", ".$row['color'];
