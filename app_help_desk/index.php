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
            greenblue: "#17a2b8"
          }
        }
      }
    }
  </script>

</head>

<body class="bg-zinc-900">

  <nav class="relative flex flex-wrap items-center justify-between py-3 px-4 bg-zinc-900 border-b-2 border-greenblue">
    <a class="inline-block pt-2 pb-1 text-lg font-bold uppercase whitespace-no-wrap text-greenblue" href="#">
    <img src="./images/logo.png" width="30" height="30" class="inline-block align-top" alt="">
      App Help Desk
    </a>
  </nav>

  <div class="container  sm:px-4 pt-32 flex items-top justify-center">
    <div class="flex flex-wrap">

      <div class="w-96">
        <div class="relative flex flex-col min-w-0 rounded break-words border-2 border-greenblue bg-zinc-900">
          <div class="py-3 px-6 mb-2 text-xl font-bold bg-greenblue text-zinc-900">
            Login
          </div>
          <div class="flex-auto p-6">
            <form action="valida_login.php" method="POST">
              <div class="mb-6">
                <input type="email" name="email" class="block placeholder:text-greenblue outline-none appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-transparent text-greenblue border-2 border-greenblue rounded" placeholder="E-mail">
              </div>
              <div class="mb-6">
                <input type="password" name="password" class="block placeholder:text-greenblue outline-none appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-transparent text-greenblue border-2 border-greenblue rounded" placeholder="Senha">
              </div>

              <?php
              if (isset($_GET['login']) && $_GET['login'] == 'error') {
              ?>
                <div class="text-red-500 pb-3 font-bold">
                  Usuário não autenticado
                </div>
              <?php
              }
              ?>

              <?php
              if (isset($_GET['login']) && $_GET['login'] == 'error2') {
              ?>
                <div class="text-red-500 pb-3 font-bold">
                  Faça login para acessar as paginas
                </div>
              <?php
              }
              ?>

              <button class="mt-2 inline-block align-middle text-center select-none border-2 border-greenblue font-bold whitespace-no-wrap tracking-wider rounded no-underline py-3 px-4 uppercase leading-tight text-lg bg-tranparent text-greenblue hover:bg-sky-500 hover:text-zinc-900 transition-all block w-full" type="submit">Entrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>