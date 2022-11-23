<script src="js/bootstrap.js"></script>
<script>
    var url = windows.location.href;
    var navMenu = document.querySelector('menu');
    var nomeUrl = url.split('/')[6];
    var nomeArquivo = nomeUrl.split('.php')[0]

    if(nomeArquivo === "cadastrar_produto"){
        navMenu.children[1].classList.add("active");
    }else if(nomeArquivo ==='listar_produto'){
        navMenu.children[2].classList.add("active");
    }else if(nomeArquivo ==='cadastrar_categoria'){
        navMenu.children[3].classList.add("active");
    }else if(nomeArquivo ==='cadastrar_fornecedor'){
        navMenu.children[4].classList.add("active");
    }else if(nomeArquivo ==='cadastrar_usuario'){
        navMenu.children[5].classList.add("active");
    }else if(nomeArquivo ==='aprovar_usuario'){
        navMenu.children[6].classList.add("active");
    }

    var alert = document.querySelector('#alert');
    if(alert){
        var fadeEffect = setInterval(function(){
        if(!alert.style.opacity){
            alert.style.opacity = 1;
        }
        if(alert.style.opacity > 0){
            alert.style.opacity -= 0.3;
        } else{
            clearInterval(fadeEffect);
            alert.style.display="none";
        }
        }, 500);
    }
</script>