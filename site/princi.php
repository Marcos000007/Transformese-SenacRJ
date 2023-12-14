<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Design Bootstrap-->  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
    <!-- Icone da página--><link rel="shortcut icon" href="../site/imagens/icons/logodeluxunipro.ico" type="image/x-icon">
   <!-- Design W3schools--> <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 
 
 
 <style>
/* Style Geral*/
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}


/* Style Header*/
.headertop{
    background-color: green;
    height: 10px;
  }

  .headersub{
    background: rgb(106,255,111);
    background: linear-gradient(0deg, rgba(106,255,111,1) 0%, green);
    direction:initial;
    height: 250px;
  }

.divBusca{
border-radius:3px;
width:290px;
height: 32px;
border: transparent;
background-color: white;
}
.txtBusca{
float:left;
background-color:transparent;
font-style:italic;
border:green;
height:35px;
width:260px;
}


.bgimg-1 {
      background-position: left;
      background-size: cover;
      background-image: url("../site/imagens/img_ref/atual/imgheader.jpeg");
      min-height: 100%;
    
    }


/* Style Footer*/
    .bgfooter{
    background: rgb(0,128,0);
 background: linear-gradient(0deg, rgba(0,128,0,1) 10%, rgba(106,255,111,1) 79%);
 }


 

  </style>
    <title>DeLux Uniformes Profissionais</title>
</head>

<body>
  <!--============================================Header==================================================================-->
<!--Aqui é onde fica o primeiro cabeçalho onde fica os contatos  -->
    <header class="headertop">
        <div class="container-fluid">
              <div class="pb-md-1 text-light">Atendimento ao Cliente(+55 21 96860-3959)
                <a href="https://www.instagram.com/deluxuniformesprofissionais/" target="_blank"><i class="fa fa-instagram w3-hover-opacity w3-large"></i></a>
                <a href="https://wa.me/5521968603959"><i class="fa fa-whatsapp w3-hover-opacity w3-large"></i></a>
              </div>
              <hr>    
            </div>
     </header>



<!-- Aqui é onde fica o segundo cabeçalho com barra de pesquisa, logo e algumas opções-->
<header class="headersub">
  <nav class="navbar navbar-expand-md">
    <div class="container-fluid" style="font-size: 16px;">
      
      <a href="#" target="_self"> <img src="../site/imagens/img_ref/atual/deluxpro-semmaquina-removebg-preview.png"  width="350" height="350" alt="logo"> </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> 
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a href="#Sobre" class="nav-link active" aria-current="page">Sobre</a>
          </li>


          <li class="nav-item dropdown">
              <a href="#Produtos" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-usd"></i> Produtos</a>    
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Feminino</a></li>
              <li><a class="dropdown-item" href="#">Masculino</a></li>
            </ul>
          </li>

          
          <li class="nav-item dropdown">
            <a href="#CadastrLogin" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-current="false"><i class="fa fa-user"></i> Cadastro/Login</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#Login"><i class="fa fa-users"></i>Login</a></li>
              <li><a class="dropdown-item" href="#Cadastro"><i class="fa fa-key"></i>Cadastro</a></li>
            </ul>
          </li>

        </ul>
      </div>
    <!-- Barra de Pesquisa-->
      <div class="divBusca">
        <input type="search" class="txtBusca" placeholder="  Buscar..."/>
        <a href="#Pesquisa"><img src="../site/imagens/icons/atuais/lupa.png" height="30" width="30" alt="Buscar"/></a>
      </div>
    
  </nav>
</header>
        


    </header>
    <!--Imagem do header-->
    <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home"></header>
    <hr>


    <!--========================================================= Main ======================================================-->
    <main>
      <div class="w3-row w3-grayscale">
        <div class="w3-col l3 s6">
          <div class="w3-container">
            <img src="../site/imagens/img_ref/img_produtos/produto3.jpg" style="width:100%">
            <p>jaleco<br><b>R$50,00</b></p>
          </div>
          <div class="w3-container">
            <img src="https://www.w3schools.com/w3images/jeans2.jpg" style="width:100%">
            <p>Brasão<br><b>R$35,00</b></p>
          </div>
        </div>
    </main>


<!--==================================================Footer=======================================================================-->
<!-- Aqui vai ser o fim da página!-->
 <br>
 <br>   
<nav class="bgfooter navbar navbar-expand-md d-flex justify-content-center">
    <p>&copy; 2023 - Todos os direitos reservados.</p>
  </nav>


















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>   
</body>
</html>