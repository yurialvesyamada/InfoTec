 <?php require("includes/cabecalho.php"); ?>
 <?php require("includes/conexao.php"); ?>

 <header>
     <h1>Produtos</h1>
 </header>

 <main>
     <div class="row">
         <section class="categorias">
             <div class="list">
                 <ul>
                     <h2 class="title-list-items">Categorias</h2>
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

         <section class="produtos">
             <?php
                $sql = "SELECT * FROM produto";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                ?>
                     <div class="cards" id="<?php echo $row["categoria"]; ?>">
                         <div class="card-header">
                             <img src="./img/<?php echo $row["imagem"]; ?>" title=" <?php echo $row["descricao"]; ?>">
                             <div class="avaliacoes">
                                 <img src="./img/avaliacoes.png" title="Conferir Avaliações" alt="Conferir Avaliações">
                             </div>
                         </div>
                         <div class="card-body">
                             <h3> <?php echo $row["descricao"]; ?> </h3>
                             <p><del>R$<?php echo $row["preco"]; ?></del></p>
                             <h4>R$<?php echo $row["preco_final"]; ?></h4>
                         </div>

                         <div class="row card-footer">
                             <div class="btn">
                                 <a href="pedidos.php">
                                     <button>Eu Quero</button>
                                 </a>
                             </div>
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

     <!--  <a href="pedidos.php">
         <img src="./img/formas-de-pagamento.png" alt="Formas de Pagamento" title="Formas de Pagamento" class="pay">
     </a>
 </main>

 <div class="images-index">
     <img src="./img/i9-back.jpg">
 </div> -->

     <?php require("includes/rodape.php"); ?>