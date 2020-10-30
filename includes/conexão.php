<?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "infotec";
      // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
      // Acertando UTF 8 //
          $conn->query("set names utf8");
      
      // Check connection
      if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT * FROM produto";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                  echo "id: " . $row["idproduto"] . " - Categoria: " . $row["categoria"] . " - Descricao: " . $row["descricao"] . "<br>";
            }
      } else {
            echo "0 results";
      }
       $conn->close();
      ?>
<!-- Fim de Conexão com Banco de Dados -->

  