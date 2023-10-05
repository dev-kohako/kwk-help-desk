<?php require_once "validador_acesso.php" ?>

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

<body class="flex flex-col bg-zinc-900 justify-start h-screen">

  <nav class="relative flex flex-wrap items-center justify-between py-3 px-4 bg-zinc-900 border-b-2 border-greenblue">
    <a class="inline-block pt-2 pb-1 text-lg font-bold uppercase whitespace-no-wrap text-greenblue" href="#">
    <img src="./images/logo.png" width="30" height="30" class="inline-block align-top" alt="">
      App Help Desk
    </a>
    <ul>
      <li class="text-greenblue uppercase hover:text-greenblue_semi_dark visited:text-greenblue_dark font-bold transition-all">
        <a href="logoff.php">sair</a>
      </li>
    </ul>
  </nav>

  <div class="container mx-auto sm:px-4 mt-24">
    <div class="flex flex-wrap items-center justify-center">

      <div class="w-4/5">
        <div class="relative flex flex-col min-w-0 rounded break-words border-2 bg-greenblue border-greenblue">
          <div class="py-4 px-6 mb-0 bg-greenblue font-bold uppercase text-zinc-900">
            Menu
          </div>
          <div class="flex-auto py-12 bg-zinc-900">
            <div class="flex flex-wrap">
              <div class="w-1/2 flex flex-col items-center uppercase text-greenblue font-bold justify-center">
                <h2 class="pb-4 tracking-wider">Abrir chamado</h2>
                <a href="abrir_chamado.php">
                <img src="./images/formulario_abrir_chamado.png" width="70" height="70">
                </a>
              </div>
              <div class="w-1/2 flex flex-col items-center uppercase text-greenblue font-bold justify-center">
                <h2 class="pb-4 tracking-wider">Consultar chamado</h2>
                <a href="consultar_chamado.php">
                <img src="./images/formulario_consultar_chamado.png" width="70" height="70">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>