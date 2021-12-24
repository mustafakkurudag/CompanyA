<!DOCTYPE html>
<html>
<head>
  <style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
  </style>
</head>

<body>

  <h1>Gelen Mesajlar</h1>

  <table id="customers">
    <tr>
      <th>Ad Soyad</th>
      <th>E-Posta</th>
      <th>Telefon</th>
      <th>Konu</th>
      <th>Mesaj</th>
    </tr>

    <?php
    session_start();
    if (empty($_SESSION['user'])) {
      //header('location:login.php');

      echo "<script>window.location.href='logout.php'</script>";
    } else {
        echo 'Kullanıcı adınız: ' . $_SESSION['user'] . '<br>';
        echo "<a href = 'logout.php'>Çıkış Yap</a>";
        include('dbconnection.php');

        $select = "SELECT * FROM contact";
        $result = $connect->query($select);

        if ($result->num_rows > 0) {
            while ($fetch = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $fetch['name'] . "</td>
                    <td>" . $fetch['email'] . "</td>
                    <td>" . $fetch['phone'] . "</td>
                    <td>" . $fetch['subject'] . "</td>
                    <td>" . $fetch['message'] . "</td>
                </tr>";
            }
        } else {
            echo "No record in database";
        }
    }

    ?>

  </table>

</body>

</html>