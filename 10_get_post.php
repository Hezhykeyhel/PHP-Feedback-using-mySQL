<?php
/**
 * $GET & POST SuperGlobals
 * We can pass data through urls forms using the $_GET and $_POST superGlobals

 */

if(isset($_POST['submit'])){
    echo $_POST["name"];
    echo $_POST["age"];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>? 
name=Brad&& age=30">Click</a>

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