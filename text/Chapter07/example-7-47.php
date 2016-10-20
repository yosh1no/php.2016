require 'DB.php';
$db = DB::connect('mysql://hunter:w)mp3s@db.example.com/restaurant');

// Change the fetch mode to objects
$db->setFetchMode(DB_FETCHMODE_OBJECT);

print "With query() and fetchRow(): \n";
// get each row with query() and fetchRow();
$q = $db->query("SELECT dish_name, price FROM dishes");
while($row = $q->fetchRow()) {
    print "The price of $row->dish_name is $row->price \n";
}


print "With getAll(): \n";
// get all the rows with getAll();
$dishes = $db->getAll('SELECT dish_name, price FROM dishes');
foreach ($dishes as $dish) {
    print "The price of $dish->dish_name is $dish->price \n";
}

print "With getRow(): \n";
$cheap = $db->getRow('SELECT dish_name, price FROM dishes
    ORDER BY price LIMIT 1');
print "The cheapest dish is $cheap->dish_name with price $cheap->price";