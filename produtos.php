 <?php require("includes/cabecalho.php"); ?>
 <?php require("includes/conexao.php"); ?>

 <header>
     <h1>Produtos</h1>
 </header>

 <main>
     <div class="display row">
         <section class="categorias col-2">
             <div class="list">
                 <ul>
                     <h1 class="title-list-items">Categorias</h1>
                     <li onclick="exibir_todos()">Todos (23)</li>
                     <li onclick="exibir_Categoria('Notebook')">Notebooks</li>
                     <li onclick="exibir_Categoria('Placa de Vídeo')">Placa de Vídeo</li>
                     <li onclick="exibir_Categoria('Processadores')">Processadores</li>
                     <li onclick="exibir_Categoria('Memória RAM')">Memória RAM</li>
                     <li onclick="exibir_Categoria('Monitores')">Monitor</li>
                     <li onclick="exibir_Categoria('Pc Gamer')">Pc Gamer</li>
                     <li onclick="exibir_Categoria('SSD')">SSD</li>
                     <li onclick="exibir_Categoria('Headset Gamer')">Headset Gamer</li>
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
                         <div class="description">
                             <h3> <?php echo $row["descricao"]; ?> </h3>
                         </div>
                         <hr>
                         <p style="color: red;"><del>R$<?php echo $row["preco"]; ?></del></p>
                         <h1 style="font-size: 30px;">R$<?php echo $row["preco_final"]; ?></h1>
                         <div>
                             <a href="pedidos.php">
                                 <button>Comprar</button>
                             </a>
                         </div>
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

 <div class="images-index">
     <img src="./img/i9-back.jpg">
 </div>

 <?php require("includes/rodape.php"); ?>