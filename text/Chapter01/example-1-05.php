
<?php
// Print a greeting if the form was submitted
if (isset($_POST['user'])) {
    print "Hello, ";
    // Print what was submitted in the form parameter called 'user'
    print $_POST['user'];
    print "!";
} else {
    // Otherwise, print the form
    print <<<_HTML_
<form method="post" action="{$_SERVER['SCRIPT_NAME']}">
Your Name: <input type="text" name="user">
<br/>
<input type="submit" value="Say Hello">
</form>
_HTML_;
}
?>