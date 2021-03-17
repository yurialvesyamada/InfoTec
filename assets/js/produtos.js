function exibir_Categoria(categoria) {

    let elementos = document.getElementsByClassName("box_produtos")
    console.log(elementos);

    for(var i=0; i<elementos.length; i++) {

        console.log(elementos[i].id);
        if(categoria == elementos[i].id)
        elementos[i].style = "display:block";
        else 
        elementos[i].style = "display:none";
    }
    
};

     let exibir_todos = () => {
     let elementos = document.getElementsByClassName("box_produtos")
        
         for(var i=0; i<elementos.length; i++) {
             elementos[i].style = "display:block";
           
                
         }  
        };



     /* let destaque = (imagem) => {
        imagem.style = "padding:0px";
        imagem.getElementsByTagName("img")[0].style = "height: 70%";
      };
      
      let normal = (imagem) => {
        imagem.style = "padding:10px";
        imagem.getElementsByTagName("img")[0].style = "height: 45%";"width: 85%";
      };
     
     
      let zoom = (titulo) => {
            titulo.style = "padding:0px";
            titulo.getElementsByTagName ("title") [0].style = "width: 120px"; 
        
        };

        let normal1 = (titulo) => {
            titulo.style = "width: 110px";
            titulo.getElementsByTagName ("title") [0].style = "width: 80px"; 
        
        };
       */