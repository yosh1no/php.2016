// First, do normal quoting of the value
$dish = $db->quoteSmart($_POST['dish_name']);
// Then, put backslashes before underscores and percent signs
$dish = strtr($dish, array('_' => '\_', '%' => '\%'));
// Now, $dish is sanitized and can be interpolated right into the query
$db->query("UPDATE dishes SET price = 1 WHERE dish_name LIKE $dish");