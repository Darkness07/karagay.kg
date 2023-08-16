<?php
if (isset($_POST['update_button'])) {
  $servername = "176.126.165.65";
  $username = "user105050_root";
  $password = "nJ9xZ9rK2u";
  $dbname = "user105050_planirovka_a";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $new_value = $_POST['new_value'];
  $id = $_POST['id'];

  $sql = "UPDATE dollar_som SET dollar = '$new_value'";

  if ($conn->query($sql) === TRUE) {
    echo "Подключение прошло успешно";
  } else {
    echo "Ошибка подлючения ";
  }

  $conn->close();
}

?>

<form method="post">
<p>Изменить курс валют</p>
  <input type="text" name="new_value">
  <!-- <input type="hidden" name="id" value="<?php echo $id; ?>"> -->
  <input type="submit" value='Изменить' name="update_button">
</form>