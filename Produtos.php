 <!-- Conexões com PHP -->
 <?php require ("includes/cabeçalho.php"); ?>
 <?php require ("includes/conexão.php"); ?>
 <!-- Conexões com PHP -->
 <header>
     <div class="titulos_paginas">
         <h2>Produtos</h2>
     </div>
 </header>
 <hr id="style_hr">
 <main>
     <div id="principal">
         <section class="list_categorias">
             <div class="filtro">
                 <ul>
                     <h3>Categorias:</h3>
                     <li onclick="exibir_todos()">Todos (16)</li>
                     <li onclick="exibir_Categoria('Notebook')">Notebooks (8)</li>
                     <li onclick="exibir_Categoria('Placa de video')">Placa de Vídeo (4)</li>
                     <li onclick="exibir_Categoria('Processadores')">Processadores (2)</li>
                     <li onclick="exibir_Categoria('Memória RAM')">Memória RAM (1)</li>
                     <li onclick="exibir_Categoria('Monitor')">Monitor (1)</li>
                 </ul>
             </div>
         </section>
         <br><br>

         <section class="produtos">

         <?php
                 $sql = "SELECT * FROM produto";
                 $result = $conn->query($sql);

             if ($result->num_rows > 0) {
                 // output data of each row
                 while ($row = $result->fetch_assoc()) {
                
         ?>
            <div class="box_produtos" id="<?php echo $row["categoria"]; ?>" style="display:table;">
                 <img src="<?php echo $row["imagem"]; ?>" title="Notebook Acer 15,6 A315-54-53M1 i5-10ª 8GB 1TB+128SSD Linux"
                     onmouseout="destaque(this)" onmousemove="normal(this)">
                 <br>
                 <img id="stars" src="./img/stars1.png">
                 <p class="descricao_dos_produtos"><?php echo $row["descricao"]; ?> </p>
                 <hr id="style_hr">
                 <p class="descricao_dos_produtos"><strike>R$<?php echo $row["valor_sem_desconto"]; ?></strike></p>
                 <p class="preco">R$<?php echo $row["valor_com_desconto"]; ?></p>

             </div>
         
         <?php
                }
             } else {
             echo "0 results";
             }
             $conn->close();
         ?>

             

         </section>
     </div>

     <hr class="linhas2">
     <div id="posicao_videos">
         <div>
             <h2 id="titulos_dos_videos"> Intel 10th Gen CPU: Official Trailer </h2>
             <video controls class="video_intel">
                 <source src="./img/Videos/Intel 10th Gen CPU- Official Trailer.mp4" type="video/mp4">
                 <source src="./img/Videos/Intel 10th Gen CPU- Official Trailer.mp4" type="video/ogg">
             </video>
         </div>

         <hr class="linhas2">

         <h2 id="titulos_dos_videos"> 3rd Gen AMD Ryzen™ Technology</h2>
         <video controls class="video_intel">
             <source src="./img/Videos/3rd Gen AMD Ryzen Technology.mp4" type="video/mp4">
             <source src="./img/Videos/3rd Gen AMD Ryzen Technology.mp4" type="video/ogg">
         </video>

         <hr class="linhas2">
 </main>
 </div>
 <img src="./img/i9 back.jpg" width=100%>

 <?php require ("includes/rodape.php");?>