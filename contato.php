 <?php require("includes/cabecalho.php"); ?>
 <?php require("includes/conexao.php"); ?>

 <?php
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['msg'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

        $sql = "insert into comentarios (nome, email, msg) values ('$nome', '$email', '$msg')";
        $result = $conn->query($sql);
    }
    ?>

 <header>
     <h1 class="titles">Contato</h1>
 </header>


 <main>

     <div class="table">
         <div>
             <img src="img/logo-email.png" width="130px">
             <h3>Lojas@infotec.com</h3>
         </div>

         <div>
             <img src="img/logo-instagram.jpg" width="130px">
             <h3><a href="http://infotec.infinityfreeapp.com/">Novo InfoTec</a></h3>
         </div>

         <div>
             <img src="img/infotec.png" width="130px" style="border-radius: 8px;">
             <h3><a href="http://infotec.infinityfreeapp.com/">Novo InfoTec</a></h3>
         </div>

         <div>
             <img src="img/logo-whatspp.png" width="130px">
             <h3>(11) 94875-6799</h3>
         </div>
     </div>



     <div class="form">
         <h1 class="titles">Fale Conosco</h1>
         <form method="post" action="" class="form-styles">
             <h3>Nome Completo</h3>
             <input type="text" name="nome" placeholder="Nome Completo" type="namespace" required>
             <h3>E-Mail</h3>
             <input type="email" name="email" placeholder="E-Mail" type="email" required>
             <h3>Mensagem</h3>
             <textarea name="msg"></textarea>
             <div style="margin-top: 20px; margin-bottom: 25px;">
                 <button name="submit" value="Enviar" class="btn-style" required>
                     Enviar
                 </button>
             </div>
         </form>
     </div>

 </main>
 <?php require("includes/rodape.php"); ?>