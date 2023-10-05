<?php require_once "validador_acesso.php" ?>

<html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

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

<body class="bg-zinc-900 h-screen">

  <nav class="relative flex flex-wrap items-center justify-between py-3 px-4 bg-zinc-900 border-b-2 border-greenblue">
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

  <div class="container mx-auto sm:px-4">
    <div class="flex flex-wrap justify-center mt-20">

      <div class="w-4/5 flex flex-col">
        <div class="relative flex flex-col min-w-0 rounded break-words border bg-zinc-900 border-2 border-greenblue">
          <div class="py-3 px-6 mb-0 bg-greenblue text-zinc-900 uppercase font-bold">
            Abertura de chamado
          </div>
          <div class="flex-auto p-6">
            <div class="flex flex-wrap ">
              <div class="relative flex-grow max-w-full flex-1 px-4">

                <form method="POST" action="registrar_chamado.php">
                  <div class="mb-4 text-greenblue tracking-wider">
                    <label>Título</label>
                    <input name="titulo" type="text"
                      class="block appearance-none w-full py-1 px-2 focus:outline-none focus:border-greenblue_dark my-1 placeholder:text-greenblue_semi_dark text-base leading-normal bg-transparent text-greenblue border-2 border-greenblue rounded"
                      placeholder="Título">
                  </div>

                  <div class="mb-4 text-greenblue tracking-wider">
                    <label>Categoria</label>
                    <select name="categoria"
                      class="block appearance-none w-full py-1 px-2 focus:outline-none focus:border-greenblue_dark my-1 text-greenblue_semi_dark text-base leading-normal bg-transparent text-greenblue border-2 border-greenblue rounded">
                      <option class="bg-greenblue text-zinc-900">Criação Usuário</option>
                      <option class="bg-greenblue text-zinc-900">Impressora</option>
                      <option class="bg-greenblue text-zinc-900">Hardware</option>
                      <option class="bg-greenblue text-zinc-900">Software</option>
                      <option class="bg-greenblue text-zinc-900">Rede</option>
                    </select>
                  </div>

                  <div class="mb-4 text-greenblue tracking-wider">
                    <label>Descrição</label>
                    <textarea name="descricao"
                      class="block appearance-none w-full py-1 px-2 focus:outline-none focus:border-greenblue_dark mb-1 text-base leading-normal bg-transparent text-greenblue border-2 border-greenblue rounded"
                      rows="3"></textarea>
                  </div>

                  <div class="flex items-center justify-between mt-8">
                    <div class="w-6/12">
                      <a class="inline-block align-middle text-center select-none border-2 font-normal whitespace-no-wrap rounded text-greenblue border-greenblue bg-transparent no-underline py-3 px-2 leading-tight hover:border-greenblue_semi_dark hover:text-greenblue_semi_dark transition-all text-xl w-10/12"
                        href="home.php">Voltar</a>
                    </div>

                    <div class="w-6/12 flex justify-end">
                      <button
                        class="inline-block align-middle text-center select-none font-normal whitespace-no-wrap rounded no-underline py-3 px-4 border-2 border-greenblue leading-tight hover:bg-greenblue_semi_dark hover:border-greenblue_semi_dark text-xl bg-greenblue transition-all text-zinc-900 w-10/12"
                        type="submit">Abrir</button>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>