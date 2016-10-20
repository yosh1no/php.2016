require 'DB.php';
// Connect to the database
$db = DB::connect('mysql://hunter:w)mp3s@db.example.com/restaurant');
// Open the CSV file for writing
$fh = fopen('dishes.csv','wb');

$dishes = $db->query('SELECT dish_name, price, is_spicy FROM dishes');
while ($row = $dishes->fetchRow()) {
    // Turn the array from fetchRow() into a CSV-formatted string
    $line = make_csv_line($row);
    // Write the string to the file. No need to add a newline on
    // the end since make_csv_line() does that already
    fwrite($fh, $line);
}
fclose($fh);