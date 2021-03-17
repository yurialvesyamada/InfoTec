 <?php require("includes/cabecalho.php"); ?>
 <?php require("includes/conexao.php"); ?>

 <header>
     <h1 class="titles">Pedidos</h1>
 </header>

 <div class="form">

     <form method="post" action="" class="form-styles">
         <h3>Nome Completo</h3>
         <input type="text" name="cliente" placeholder="Nome Completo" type="namespace" required>
         <h3>Data de Nascimento</h3>
         <input type="date" name="nascimento" required>
         <h3>Endereço</h3>
         <input type="text" name="endereço" placeholder="Endereço" required>
         <hr style="margin-top: 40px; margin-bottom: 40px;">
         <h2>Escolha o Produto</h2>

         <div>
             <select name="categoria" id="<?php echo $row["categoria"]; ?>" required>
                 <option default>Selecione a Categoria</option>
                 <option value="Notebook">Notebooks</option>
                 <option value="Processadores">Processadores</option>
                 <option value="Placa de video">Placa de Vídeo</option>
                 <option value="Memória RAM">Memória RAM</option>
                 <option value="Monitor">Monitores</option>
             </select>
         </div>

         <div>
             <select name="descricao" id="descricao" required>
                 <option value="" default>Modelo/Marca</option> <?php echo $row["descricao"]; ?>
             </select>
         </div>


         <button name="submit" value="Enviar" class="btn-style" required>
             Enviar
         </button>
     </form>

 </div>


 <?php require("includes/rodape.php"); ?>