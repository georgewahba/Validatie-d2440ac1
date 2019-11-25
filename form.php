<?php

if (isset($_REQUEST['email']) && !empty($_REQUEST['email'])){
    //validate email

    if (filter_var(($_REQUEST['email']), FILTER_VALIDATE_EMAIL )) {
      echo "<h1>deze email is geldig</h1>";
    }
    else {
      echo "<h1>deze email is niet geldig</h1>";
    }
}

?>
<form action='form.php' method="post">
email : <input type='text' name='email'/>
<input type='submit' value='submit'/>
</form>
