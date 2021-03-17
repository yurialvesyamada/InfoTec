 <!-- Conexões com PHP -->
 <?php require("includes/cabecalho.php"); ?>
 <?php require("includes/conexao.php"); ?>
 <!-- Conexões com PHP -->

 <header>
     <h1 class="titles">Pedidos</h1>
 </header>
 
 <div class="formulario_contatos">
     <form method="post" action="">
         <h2>Dados Pessoais</h2>
         <h3>Nome</h3>
         <input type="text" name="cliente" placeholder="Digite seu nome:" required>
         <br>
         <h3>Data de Nascimento</h3>
         <input type="date" name="nascimento" required>
         <br>
         <h3>Endereço</h3>
         <input type="text" name="endereço" placeholder="Endereço:" required>
         <br><br>
         <hr id="line">
         <h2>Escolha o Produto</h2>
         <select name="categoria" id="<?php echo $row["categoria"]; ?>" required>
             <option value="" default>Selecione a Categoria</option>
             <option value="Notebook">Notebooks</option>
             <option value="Processadores">Processadores</option>
             <option value="Placa de video">Placa de Vídeo</option>
             <option value="Memória RAM">Memória RAM</option>
             <option value="Monitor">Monitores</option>
         </select>
         <br><br><br>
         <select name="descricao" id="descricao" required>
             <option value="" default>Modelo/Marca</option> <?php echo $row["descricao"]; ?>

         </select>
         <br><br><br>
         <input type="submit" name="submit" value="Enviar" required>
         <br><br>
         <hr id="line">
     </form>

 </div>


 <?php require("includes/rodape.php"); ?>