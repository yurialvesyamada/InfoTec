 <!-- Conexões com PHP -->
 <?php require ("includes/cabeçalho.php"); ?>
 <?php require ("includes/conexao.php"); ?>
 <!-- Conexões com PHP -->
   <?php
        if(isset($_POST['nome']) && isset($_POST['msg']) && isset($_POST['email'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $msg = $_POST['msg'];
            
            $sql = "insert into comentarios (nome, email, msg) values ('$nome' . '$email' . '$msg')";
            $result = $conn->query($sql);
            
        }
   ?>
    
 <body class="backgroundpadrao">
     <header>
         <div class="titulos_paginas">
             <h2>Contato</h2>
             <hr id="line">
             <br>
     </header>

     <main>

         <div class="enderecos">
             <div class="colunas_enderecos">
                 <div class="contato">
                     <img src="./img/email-logo2.png" width="100px">
                     <p>Lojas@infotec.com</p>
                 </div>
             </div>

             <div class="colunas_enderecos">
                 <div class="contato">
                     <img src="./img/instagram_transparent2.jpg" width="100px">
                     <p>@InfoTec</p>
                 </div>
             </div>

             <div class="colunas_enderecos">
                 <div class="contato">
                     <img src="./img/novologo.png" width="100px">
                     <p>InfoTec</p>
                 </div>
             </div>


             <div class="colunas_enderecos">
                 <div class="contato">
                     <img src="./img/wpp_transparent.png" width="100px">
                     <p>(11) 94875-6799</p>
                 </div>
             </div>

         </div>
         <hr id="line">

         <div class="formulario_contatos">

             <form method="post" action="">
                 <h2>Fale Conosco:</h2>
                 <label for="comments">Sobre</label>
                 <select id="comments" name="comments">
                     <option value="dicas">Dicas</option>
                     <option value="opiniões" selected>Opiniões/Avaliações</option>
                     <option value="produtos_desejados">Produtos Desejados</option>
                     <option value="erro">Relatar Erros/Bugs</option>
                     <option value="outros">Outros</option>
                 </select>
             </form>
             <form method="post" action="">
                 <h3>Nome Completo:</h3>
                 <input type="text" name="nome" placeholder="Digite seu nome" required>
                 <br>
                 <h3>E-Mail:</h3>
                 <input type="text" name="email" placeholder="Digite seu E-Mail" required>
                 <br>
                 <h3>Mensagem:</h3>
                 <textarea name="msg"></textarea>
                 <br><br>
                 <input type="submit" name="submit" value="Enviar" required>
                 <br><br>
                 <hr id="line">
             </form>

         </div>

     </main>
     <?php require("includes/rodape.php");?>