 <?php require("includes/cabecalho.php"); ?>
 <?php require("includes/conexao.php"); ?>

 <header>
     <h1 class="titles">Produtos</h1>
 </header>

 <main>
     <div class="display row">
         <section class="categorias col-2">
             <div class="list">
                 <ul>
                     <h1 class="title-list-items">Categorias</h1>
                     <li onclick="exibir_todos()" class="list-items">Todos (23)</li>
                     <li onclick="exibir_Categoria('Notebook')" class="list-items">Notebooks</li>
                     <li onclick="exibir_Categoria('Placa de Vídeo')" class="list-items">Placa de Vídeo</li>
                     <li onclick="exibir_Categoria('Processadores')" class="list-items">Processadores</li>
                     <li onclick="exibir_Categoria('Memória RAM')" class="list-items">Memória RAM</li>
                     <li onclick="exibir_Categoria('Monitores')" class="list-items">Monitor</li>
                     <li onclick="exibir_Categoria('Pc Gamer')" class="list-items">Pc Gamer</li>
                     <li onclick="exibir_Categoria('SSD')" class="list-items">SSD</li>
                     <li onclick="exibir_Categoria('Headset Gamer')" class="list-items">Headset Gamer</li>
                 </ul>
             </div>
         </section>

         <section class="produtos col-9">

             <?php
                $sql = "SELECT * FROM produto";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                ?>
                     <div class="box_produtos" id="<?php echo $row["categoria"]; ?>">
                         <img src="./img/<?php echo $row["imagem"]; ?>" title=" <?php echo $row["descricao"]; ?>">
                         <img src="./img/avaliacoes.png" title="Conferir Avaliações" alt="Conferir Avaliações" style="width: 50%;">
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

     <a href="pedidos.php">
         <img src="./img/formas-de-pagamento.png" alt="Formas de Pagamento" title="Formas de Pagamento" class="pay">
     </a>
 </main>


 <div>
     <img src="./img/i9-back.jpg" style="width: 100%;">
 </div>

 <?php require("includes/rodape.php"); ?>