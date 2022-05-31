<?php
/**
 * $GET & POST SuperGlobals
 * We can pass data through urls forms using the $_GET and $_POST superGlobals

 */

if(isset($_POST['submit'])){
    // Most used and understandable sanitizer
    // $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    // Another method of sanitizing our inputs
    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);

    echo $name;
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" placeholder="Name" name="name">
    </div>
    <div>
        <label for="name">Age</label>
        <input type="text" placeholder="age" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>