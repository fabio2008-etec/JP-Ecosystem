<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Funcionario</title>
</head>
<body>
   
<img src="../img/Jurassic Park (24).png" alt="" class="textoL">
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col">
              </div>
              </div>
                <div class="Formulario">
                     <img src="../img/Jurassic Park (22).png" alt="" class="logo">
    <form action="conexao.php" method="POST" enctype="multipart/form-data">

        <div class="nomeL">
        <label for="nome">Nome</label><br>
        <input type="text" class="form-control ps-5" id="nome" placeholder="" name="nome" required />
</div>
<div class="CPF">
        <label for="cpf">CPF</label><br>
        <input type="text" class="form-control ps-5" id="cpf" placeholder="" name="cpf" required />

</div>
<div class="idade">
        <label for="idade">Idade</label><br>
        <input type="number" class="form-control ps-5" id="idade" placeholder="" name="idade" required />

</div>
<div class="username">
        <label for="username">Username</label><br>
        <input type="text" class="form-control ps-5" id="username" placeholder="" name="username" required />

</div>
<div class="seguroV">
        <label for="seguroV">Seguro de Vida?</label><br>
        
        <button type="button" class="btn1" name="seguroV" value="Sim">Sim</button>
        <button type="button" class="btn2" name="seguroV" value="Não">Não</button>

</div>
<div class="senha">
        <label for="senha">Senha</label><br>
        <input type="password" class="form-control ps-5" id="senha" placeholder="" name="senha" required />

</div>
<div class="foto">
       
        <img src="../img/Jurassic Park (25).png" alt="" id="foto" name="foto" accept="image/*">
</div>

<button type="submit" class="submit">Fazer login</button>
                </form>
                </div>

    </div>
<div class="back">

</div>

<style>

body{
   background-color: #ff0000;
}
.Formulario {
     /* Reduz o tamanho para 70% */
    transform-origin: top left;    /* Define o ponto de origem do redimensionamento */
    position: absolute;
    top: 150px;
    left: 150px;
    background-color: #151414;
    padding: 20px;
    width: 1190px;
    height: 500px;
    z-index: 2;
    position: absolute;
    top: 150px;
    left: 150px;
}
.textoL {
    position: absolute;
    top: -50px;
    left: 500px;
    width: 500px;
    height: 250px;
    z-index: 4;

}
.nomeL {
    position: absolute;
    z-index: 4;

    label{
        color: white;
        font-size: 40px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }
    input{
        width: 650px;
        height: 40px;
        font-size: 20px;
        border: none;
        padding-left: 10px;
        background-color: #690c06;
    }
}
.back {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh; /* ocupa a altura inteira da tela */
  background-color: rgba(0, 0, 0, 0.8); /* com transparência */
  z-index: 1;
}

.CPF {
    position: absolute;
    z-index: 4;
    top: 20px;
    left: 700px;


    label{
        color: white;
        font-size: 40px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }
    input{
        width: 490px;
        height: 40px;
        font-size: 20px;
        border: none;
        padding-left: 10px;
        background-color: #690c06;
    }
}
.idade {
    position: absolute;
    z-index: 4;
    top: 130px;
    left: 20px;
    label{
        color: white;
        font-size: 40px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }
    input{
        width: 300px;
        height: 40px;
        font-size: 20px;
        border: none;
        padding-left: 10px;
        background-color: #690c06;
        color: white;
    }
}
.username {
    position: absolute;
    z-index: 4;
    top: 130px;
    left: 350px;
    label{
        color: white;
        font-size: 40px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }
    input{
        width: 320px;
        height: 40px;
        font-size: 20px;
        border: none;
        padding-left: 10px;
        background-color: #690c06;
    }
}
.seguroV {
    position: absolute;
    z-index: 4;
    top: 130px;
    left: 700px;
    label{
        color: white;
        font-size: 40px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }
    button{
        width: 250px;
        height: 40px;
        font-size: 20px;
        border: none;
        padding-left: 10px;
        background-color: #690c06;

    }
    }
.btn1, .btn2 {
        width: 0px;
        height: 40px;
        font-size: 20px;
        color: white;
        border: none;
        cursor: pointer;
    }
.btn1:hover, .btn2:hover {
        background-color: #ff0000;
        transition: background-color 0.3s ease;
    }   
    
    .btn1 {
        background-color: #690c06;
        position: relative;
    }
    .btn2 {
        background-color: #690c06;
    }
.senha {
    position: absolute;
    z-index: 4;
    top: 270px;
    left: 20px;
    label{
        color: white;
        font-size: 40px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }
    input{
        width: 650px;
        height: 40px;
        font-size: 20px;
        border: none;
        padding-left: 10px;
        background-color: #690c06;
    }
}
.foto {
    position: absolute;
    z-index: 4;
    top: 237px;
    left: 700px;
    cursor: pointer;
    
    
    label{
        color: white;
        font-size: 40px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
       
    }
   img {
    width: 495px;
    height: 285px;
    border: 6px solid rgb(0, 0, 0);
    transition: transform 0.2s ease;
    filter: brightness(0) saturate(100%);
}

img:hover {
    background-color: #ff0000f8;
    border-color: #ff0000f8;
    filter: brightness(1) saturate(100);
}

    }
.submit {
    position: absolute;
    z-index: 4;
    top: 460px;
    left: 20px;
    width: 660px;
    height: 70px;
    font-size: 50px;
    color: #050505;
    background-color: #fffb00;
    border: none;
    cursor: pointer;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
 
}
.submit:hover {
    transition: background-color 0.3s ease;
    color: #fffb00 ;
    border-color: #fffb00;
    border: 2px solid #fffb00;
    background-color: transparent;
}
.logo {
    position: absolute;
    top: 30px;
    left: 150px;
    width: 900px;
    height: 500px;
    z-index: 3;
}
</style>
</body>
</html>