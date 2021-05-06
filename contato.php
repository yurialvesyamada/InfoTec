 <?php require("includes/cabecalho.php"); ?>
 <?php require("includes/conexao.php"); ?>

 <header>
     <h1>Contato</h1>
 </header>


 <main>

     <div class="contact">
         <a href="https://outlook.live.com/owa/" target="_blank" rel="noopener noreferrer">
             <img src="img/logo-email.png">
             <h3>yurialvesyamada@hotmail.com</h3>
         </a>

         <a href="http://infotec.infinityfreeapp.com/" target="_blank" rel="noopener noreferrer">
             <img src="img/logo-instagram.jpg">
             <h3>InfoTec 2021</h3>
         </a>

         <a href="http://infotec.infinityfreeapp.com/" target="_blank" rel="noopener noreferrer">
             <img src="img/infotec.png">
             <h3>InfoTec 2021</h3>
         </a>

         <a href="https://api.whatsapp.com/send?phone=5511948756799&text=Ol%C3%A1%2C%20tudo%20bem%3F%20Meu%20nome%20%C3%A9%20%5Bnome%5D%2C%20irei%20fazer%20o%20seu%20atendimento%20hoje.%20Me%20conta%20como%20posso%20ajudar%20voc%C3%AA%20hoje!" target="_blank" rel="noopener noreferrer">
             <img src="img/logo-whatspp.png">
             <h3>(11) 94875-6799</h3>
         </a>
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