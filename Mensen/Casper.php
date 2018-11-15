<?php
    $name = $email = $gender = $comment = $phone = "";
    $i = 1;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $i = 1;
        $name = input($_POST["name"]);
        $email = input($_POST["email"]);
        $phone = input($_POST["phone"]);
        $comment = input($_POST["comment"]);
        $gender = input($_POST["gender"]);
    }

    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div>
            <h2>Comment?</h2>
            <span class="col12">Name:</span>
            <span><input size="42" type="text" placeholder="John" name="name" required></span>
        </div>
        <div>
            <span class="col12">E-mail:</span>
            <span><input size="42" type="text" placeholder="Example@Example.com" name="email" pattern=".+@+.+.com" required title="Must be an email address"></span>
        </div>
        <div>
            <span class="col12">phone number (optional)</span>
            <span><input size="42" type="text" name="phone" placeholder="Telephone Number"></span>
        </div>
        <div>
            <span class="col12">Comment:</span>
            <span><textarea required name="comment" rows="5" cols="40" required></textarea></span>
        </div>
        <div>
            <span class="col12">Gender:</span>
            <span>
                <input required type="radio" name="gender" value="female">Female
                <input required type="radio" name="gender" value="male">Male
                <input required type="radio" name="gender" value="other">Other
            </span>
        </div>
        <input type="submit" value="versturen">
    </form>
    