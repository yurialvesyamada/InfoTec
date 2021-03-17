 <?php require("includes/cabecalho.php"); ?>
 <?php require("includes/conexao.php"); ?>

 <header>
     <h1 class="titles">Produtos</h1>
 </header>

 <main>
     <div class="display">
         <section class="categorias">
             <div class="list">
                 <ul>
                     <h1 class="title-list-items">Categorias</h1>
                     <li onclick="exibir_todos()" class="list-items">Todos (16)</li>
                     <li onclick="exibir_Categoria('Notebook')" class="list-items">Notebooks (8)</li>
                     <li onclick="exibir_Categoria('Placa de Vídeo')" class="list-items">Placa de Vídeo (4)</li>
                     <li onclick="exibir_Categoria('Processadores')" class="list-items">Processadores (2)</li>
                     <li onclick="exibir_Categoria('Memória RAM')" class="list-items">Memória RAM (1)</li>
                     <li onclick="exibir_Categoria('Monitores')" class="list-items">Monitor (1)</li>
                 </ul>
             </div>
         </section>

         <section class="produtos">

             <?php
                $sql = "SELECT * FROM produto";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {

                ?>
                     <div class="box_produtos" id="<?php echo $row["categoria"]; ?>">
                         <img src="./img/<?php echo $row["imagem"]; ?>" onmouseout="destaque(this)" onmousemove="normal(this)">
                         <img src="./img/avaliacoes.png" style="width: 50%;">
                         <h3 class="description"> <?php echo $row["descricao"]; ?> </h3>
                         <hr>
                         <p style="color: red;"><del>R$<?php echo $row["preco"]; ?></del></p>
                         <h2>R$<?php echo $row["preco_final"]; ?></h2>
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

 </main>

 <div style="padding-top: 5rem">
     <img src="./img/i9-back.jpg" width=100%>
 </div>

 <?php require("includes/rodape.php"); ?>