<?php require_once "validador_acesso.php" ?>

<?php

  $chamados = array();

  echo $_SESSION['perfil_id'];

  $arquivo = fopen('../../help_desk/arquivo.txt', 'r');

  while(!feof($arquivo)) {

    $registro = fgets($arquivo);

    $registro_detalhes = explode('#', $registro);

    if($_SESSION['perfil_id'] == 2) {

    
      if($_SESSION['id'] != $registro_detalhes[0]) {
        continue;

      } else {
        $chamados[] = $registro;
      }

    } else {
      $chamados[] = $registro;
    }

  }

  fclose($arquivo);
  
?>

<html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            transparent: "transparent",
            greenblue: "#17a2b8",
            greenblue_semi_dark: "#107584",
            greenblue_dark: "#0d5e6b"
          }
        }
      }
    }
  </script>

</head>

<body class="bg-zinc-900 h-auto flex flex-col items-center">

  <nav
    class="relative flex flex-wrap items-center w-full justify-between py-3 px-4 bg-zinc-900 border-b-2 border-greenblue">
    <a class="inline-block pt-2 pb-1 text-lg font-bold uppercase whitespace-no-wrap text-greenblue" href="#">
      <img src="./images/logo.png" width="30" height="30" class="inline-block align-top" alt="">
      App Help Desk
    </a>
    <ul>
      <li
        class="text-greenblue uppercase hover:text-greenblue_semi_dark visited:text-greenblue_dark font-bold transition-all">
        <a href="logoff.php">sair</a>
      </li>
    </ul>
  </nav>

  <div class="container w-4/5 mt-10">
    <div class="flex flex-wrap">

      <div class="w-full">
        <div class="relative flex flex-col min-w-0 rounded break-words bg-zinc-900 border-2 border-greenblue">
          <div class="py-3 px-6 mb-0 bg-gray-200 uppercase font-bold bg-greenblue text-zinc-900">
            Consulta de chamado
          </div>

          <div class="flex-auto p-10">

            <?php foreach ($chamados as $chamado) { ?>

              <?php

              $chamado_dados = explode('#',$chamado);

              if (count($chamado_dados) < 3) {
                continue;
              }
              ?>

              <div class="relative flex flex-col min-w-0 my-6 rounded break-words bg-zinc-900 border-2 border-greenblue mb-3">
                <div class="flex-auto p-4 my-2 text-greenblue">
                  <h5 class="mb-4 text-xl">
                    <?= $chamado_dados[1] ?>
                  </h5>
                  <h6 class="mt-2 mb-2 text-greenblue">
                    <?= $chamado_dados[2] ?>
                  </h6>
                  <p class="mb-0">
                    <?= $chamado_dados[3] ?>
                  </p>

                </div>
              </div>
            <?php } ?>

            <div class="flex flex-wrap  mt-5">
              <div class="w-2/5">
                <a class="inline-block align-middle text-center select-none border-2 font-normal whitespace-no-wrap rounded no-underline py-3 px-4 leading-tight text-xl bg-transparent border-greenblue text-greenblue hover:border-greenblue_semi_dark hover:text-greenblue_semi_dark block w-full transition-all"
                  href="home.php">Voltar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>