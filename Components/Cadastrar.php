<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadstrar Dinossauros</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />

</head>
<body>
    <div class="container text-center mt-5">
       <div class="row">
<div class="col">
    <div class="textoC">
    <img src="../img/Jurassic Park (15).png" alt="">
</div>
<div class="imgC">
<img src="" alt="">
</div>
<div class="black">

</div>
    <div class="logo_img">
        <img src="../img/Jurassic Park.png" alt="">
</div>
<div class="formulario">
        <form action="conexao.php" method="POST" enctype="multipart/form-data">



          <div class="form-floating mb-3 campo-especie-1">
  <input type="text" class="form-control ps-5" id="especie" placeholder="Espécie" name="especie" />
  <label for="especie">
    <img src="../img/Jurassic Park (18).png" alt="ícone" style="width: 60px; height: 30px; margin-right: 5px; vertical-align: middle;">
    Espécie
  </label>
</div>
<div class="form-floating mb-3 campo-Altura">
  <input type="text" class="form-control ps-5" id="altura" placeholder="" name="altura" />
  <label for="Altura">
    <img src="../img/Jurassic Park (17).png" alt="ícone" style="width: 60px; height: 30px; margin-right: 5px; vertical-align: middle;">
    Altura
  </label>
</div>
<div class="form-floating mb-3 campo-Dieta">
  <input type="text" class="form-control ps-5" id="dieta" placeholder="" name="dieta" />
  <label for="Dieta">
    <img src="../img/Jurassic Park (19).png" alt="ícone" style="width: 60px; height: 30px; margin-right: 5px; vertical-align: middle;">
    Dieta
  </label>
</div>

<div class="form-floating mb-3 campo-EV">
  <input type="text" class="form-control ps-5" id="EV" placeholder="" name="EV" />
  <label for="EV">
    <img src="../img/Jurassic Park (20).png" alt="ícone" style="width: 60px; height: 30px; margin-right: 5px; vertical-align: middle;">
    Expectativa de Vida
  </label>
</div>

<button type="submit" class="butão">Enviar</button>

</div>
</form>
</div>

        </div>
        </div>
        </div>

</body>
</html>

<style>

body{
    background-color: black;
}
.logo_img {
    position: absolute;
    z-index: -1;
    left: 700px;
    top: 150px ;
    height: 0px;
    img{
        width: 900px;
        
    }
   
}
.black {
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: black;
    opacity: 0.5;
    z-index: 1;
}
.formulario {
    position: absolute;
    z-index: 2;
    left: 60px;
    top: 70px;
    width: 900px;
    height: 650px;
    background-color: rgb(255, 255, 255);    
    padding: 5px;
}
.form-control {
  background-color: #a8a18f;
  width: 850px;
  border-radius: 0px;
  border: none;
  height: 60px;              /* controla a altura do input */
  padding-top: 1.5rem;       /* garante espaço para o label flutuante */
  padding-bottom: 0.5rem;
  line-height: normal;
  font-size: 1rem;
}

.formulario label {
  color: rgb(0, 0, 0);
  font-family: Georgia, 'Times New Roman', Times, serif;
}
.textoC {
    position: absolute;
    z-index: 7;
    left: 60px;
    top: -10px;
    pointer-events: none;
}

.textoC img {
    
    width: 400px;
    height: 250px;
}

   
.campo-especie-1 {
    position: absolute;
    top: 150px;
    left: 30px;
    width: 850px;
    
}

.campo-Altura {
    position: absolute;
    top: 250px;
    left: 30px;
    width: 850px;
}

.campo-Dieta {
    position: absolute;
    top: 350px;
    left: 30px;
    width: 850px;
}
.campo-EV {
    position: absolute;
    top: 450px;
    left: 30px;
    width: 850px;
}
.butão {
    position: absolute;
    top: 550px;
    left: 30px;
    width: 850px;
    height: 60px;
    background-color: #ff0000;
    border-style: solid;
    border-color: rgb(255, 255, 255);
    border-radius: 0px;
   
    font-size: 1.5rem;
    color: rgb(255, 255, 255);
}
.butão:hover {
            /* texto branco no hover */
    cursor: pointer;         /* cursor de ponteiro no hover */
    transition: background-color 0.3s ease; /* transição suave */
  background-color: rgba(255, 255, 255, 0.789);      /* vermelho mais escuro no hover */
  border-color: rgb(255, 0, 0);
  color: rgb(255, 0, 0);
}



</style>

