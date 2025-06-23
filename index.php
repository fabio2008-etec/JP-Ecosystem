<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jurassic Park - Ecosystem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <!-- Tela de carregamento -->
    <div id="Carregando" class="Carregando-Container">
      <img src="img/Jurassic Park.png" alt="Logo" class="CarregandoImg carregando-img1"/>
      <img src="img/Jurassic Park (1).png" alt="TxtLogo" class="CarregandoImg carregando-img2"/>
      <img src="img/Jurassic Park (5).png" alt="Ecosystem" class="CarregandoImg carregando-img3"/>
      <div class="black"></div>
    </div>

    <!-- Menu principal -->
    <div id="Menu" style="display: none;" class="container text-center mt-5">
      <div class="Portão">
        <img src="./img/Jurassic Park (7).png" alt="Portão">       
      </div>

      <div class="BntM1">
        <a href="./Components/Login.php"><img src="./img/Jurassic Park (9).png" alt="Botão Login"></a>
      </div>

      <div class="BntM2">
        <a href="./Components/Dino.php"><img src="./img/Jurassic Park (10).png" alt="Botão Dinos"></a>
      </div>

      <div class="BntM3">
        <a href="./Components/Cadastrar.php"><img src="./img/Jurassic Park (11).png" alt="Botão Cadastro"></a>
      </div>

      <div class="black"></div>
    </div>

    <style>
      body {
        overflow: hidden;
        margin: 0;
        background-image: url('./img/Jurassic Park (8).png');
        background-repeat: no-repeat;
        background-size: 100%;
        background-color: black;
        color: white;
      }

      .Carregando-Container {
        position: fixed;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background-color: black;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        z-index: 9999;
      }
      .CarregandoImg {
  max-width: 300px;
  opacity: 1;
  transition: opacity 3s ease;
  position: absolute;
}

.carregando-img1 {
  max-width: 1000px;
  max-height: 1000px;
  z-index: 9996; /* abaixo do .black (9998) */
  opacity: 0.8;
}

.carregando-img2 {
  max-width: 1000px;
  filter: grayscale(50%);
  z-index: 9999; /* acima do .black */
}

.carregando-img3 {
  position: absolute;
  max-width: 1000px;
  filter: grayscale(50%);
  opacity: 0.8;
  z-index: 9999; /* acima do .black */
}

.black {
  position: fixed;
  top: 0; left: 0;
  width: 100vw;
  height: 100vh;
  background-color: rgba(0, 0, 0, 0.85);
  z-index: 9998; /* entre a imagem 1 e as imagens 2 e 3 */
}

   
      .carregando-img1 { max-width: 1000px; position: absolute; opacity: 0.8; }
      .carregando-img2 { max-width: 1000px; filter: grayscale(50%); }
      .carregando-img3 { position: absolute; max-width: 1000px; filter: grayscale(50%); opacity: 0.8; }

      .fade-out .carregando-img1,
      .fade-out .carregando-img2,
      .fade-out .carregando-img3 {
        opacity: 0;
      }

      
      .Portão {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100vw;
        height: auto;
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .Portão img {
        width: 100%;
        height: auto;
        object-fit: contain;
        max-width: none;
      }

      .BntM1, .BntM2, .BntM3 {
        position: absolute;
        z-index: 10000;
        display: flex;
        width: 10px;
        height: 5px;
        align-items: center;
        justify-content: center;
      }

      .BntM1 { top: 60%; left: 50%; }
      .BntM2 { top: 70%; left: 50%; }
      .BntM3 { top: 80%; left: 50%; }

      .BntM1 img, .BntM2 img, .BntM3 img {
        width: 200px;
        height: 100px;
        transition: transform 0.2s ease;
      }

      .BntM1 img:hover, .BntM2 img:hover, .BntM3 img:hover {
        transform: scale(1.2);
      }
    </style>

    <script>
      window.addEventListener('load', () => {
        const carregando = document.getElementById('Carregando');
        const menu = document.getElementById('Menu');

        carregando.classList.add('fade-out');

        setTimeout(() => {
          carregando.style.display = 'none';
          menu.style.display = 'block';
          document.body.style.overflow = 'auto';
        }, 3500);
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
