<?php require("includes/header.php"); ?>
<?php require("includes/conexao.php"); ?>

<header>
    <h1 class="p-5">Produtos</h1>
</header>

<main>
    <h2 class="p-1">Categorias</h2>
    <section class="categorias">
        <ul>
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
    </section>

    <div class="row">
        <section class="produtos col-12">
            <?php
            $sql = "SELECT * FROM produto";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <article class="cards-flex-container col-3">
                        <div class="cards-items" id="<?php echo $row["categoria"]; ?>">
                            <div class="card-header">
                                <img src="./img/<?php echo $row["imagem"]; ?>" title=" <?php echo $row["descricao"]; ?>">
                                <div class="avaliacoes p-5">
                                    <img src="./img/avaliacoes.png" title="Conferir Avaliações" alt="Conferir Avaliações">
                                </div>
                            </div>
                            <div class="card-body">
                                <h3> <?php echo $row["descricao"]; ?> </h3>
                                <p><del>R$<?php echo $row["preco"]; ?></del></p>
                                <h4>R$<?php echo $row["preco_final"]; ?></h4>
                            </div>
                            <div class="card-footer">
                                <div class="card-button col-12">
                                    <a href="pedidos.php">
                                        <button>Eu Quero</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>


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

    <?php require("includes/footer.php"); ?>