<!DOCTYPE html>
<html>
  <head>
    <title>Student Details Form Output</title>
  </head>
  <body>
    <?php
    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $namePattern = '/^([a-zA-Z]+ ){3}[a-zA-Z]+$/';
    $matricsPattern = '/^[0-9]{7}$/';
    $addressPattern = '/^[0-9]{1,3},?[ ]?[A-Za-z0-9./ ]+,[ ]?[A-Za-z0-9./ ]+,[ ]?\d{5}[ ,]+[A-Za-z0-9./-]+$/';
    $emailPattern = '/^[a-zA-Z0-9._%+-]+@gmail\.com$/';
    $mphonePattern = '/^(?:\+?6?01)[0-46-9]-*[0-9]{7,8}$/';
    $hphonePattern = '/^0[3-9][0-9]{1,2}-*[0-9]{7,8}$/';

    $name = $_POST["name"];
    $matrics = $_POST["matrics"];
    $caddress = $_POST["caddress"];
    $haddress = $_POST["haddress"];
    $email = $_POST["email"];
    $mphone = $_POST["mphone"];
    $hphone = $_POST["hphone"];

    if (empty($name) || empty($matrics) || empty($caddress) || empty($haddress) || empty($email) || empty($hphone) || empty($mphone)) {
        echo "Please fill in all required fields.";
        exit;
    }

    /*if (preg_match($namePattern, $name)) {
        echo "Name is not according to pattern";
        exit;
    }

    if (preg_match($matricsPattern, $matrics)) {
        echo "Matrics number is not according to pattern";
        exit;
    }

    if (preg_match($addressPattern, $caddress)) {
        echo "Current address is not according to pattern";
        exit;
    }

    if (preg_match($addressPattern, $haddress)) {
        echo "Home address is not according to pattern";
        exit;
    }

    if (preg_match($emailPattern, $email)) {
        echo "Email is not according to pattern";
        exit;
    }

    if (preg_match($mphonePattern, $mphone)) {
        echo "Mobile Phone is not according to pattern";
        exit;
    }

    if (preg_match($hphonePattern, $hphone)) {
        echo "Home Phone is not according to pattern";
        exit;
    }*/
      
      echo "<h2>Form Submitted Successfully</h2>";
      echo "<p>Name: $name</p>";
      echo "<p>Matric Number: $matrics</p>";
      echo "<p>Current Address: $caddress</p>";
      echo "<p>Home Address: $haddress</p>";
      echo "<p>Email: $email</p>";
      echo "<p>Mobile Phone Number: $mphone</p>";
      echo "<p>Home Phone Number: $hphone</p>";
    } else {
        echo "<h2>Error: Invalid Request</h2>";
      }
    ?>
  </body>
</html>