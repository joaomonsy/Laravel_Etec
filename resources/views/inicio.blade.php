<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite("resources/css/app.css")
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Início</title>
</head>


<body class="w-full bg-gray-900 overflow-x-hidden">
    <header class="bg-gray-400">
        <nav class="flex justify-between items-center w-[92%]  mx-auto">
            <div>
                <img class="w-16 cursor-pointer" src="{{ asset('img/etec.png')}}" alt="...">
            </div>
            <div class="nav-links duration-500 md:static absolute bg-gray-400 md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-red-500" href="#">Inicio</a>
                    </li>
                    <li>
                        <a class="hover:text-red-500" href="#">Cursos</a>
                    </li>
                    <li>
                        <a class="hover:text-red-500" href="#">Departamentos</a>
                    </li>
                    <li>
                        <a class="hover:text-red-500" href="#">Oportunidades</a>
                    </li>
                    <li>
                        <a class="hover:text-red-500" href="#">Vestibulinho</a>
                    </li>
                    <li>
                        <a class="hover:text-red-500" href="#">Instituição</a>
                    </li>
                    <li>
                        <a class="hover:text-red-500" href="#">Contato</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
            </div>
    </header>
    <main class="w-full">
        <section class="w-full" id="home">
            <div class="w-full h-[70rem] bg-cover relative isolate overflow-hidden bg-black py-24 sm:py-32 dark:bg-white-dark min-h-screen ">
                <img class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center" style="filter: brightness(40%); " src="{{ asset('img/cima.jpg')}}" alt="">
                <div class="p-20 flex justify-center items-start h-full flex-col sm:max-w-1/3">
                    <h1 class="text-zinc-200 text-8xl md:min-w-96">ETEC da Zona Leste</h1>
                    <p class="md:w-1/3 md:min-w-96 text-balance text-white py-5 z-50">Conheça a Etec Zona Leste: Excelência em Educação Técnica na Região da Zona Leste de São Paulo</p>
                    <div>
                        <a href="{{ url('/sobrenos') }}" class="btn btn-primary text-white z-auto hover:text-red-800">Nos Conheça</a>
                        <a href="#" class="text-zinc-100 p-4 hover:text-red-800">Cursos</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="flex h-40 w-screen items-center justify-center">
            <div class="flex w-[30rem] rounded bg-gray-400">
                <input type="search" name="search" id="search" placeholder="Pesquisar" class="w-full border-none bg-transparent px-4 py-1 text-gray-900 outline-none focus:outline-none">
                <button class="m-2 rounded bg-teal-800 px-4 py-2 text-white">
                    Pesquisar
                </button>
            </div>
        </div>
        <div class="items-center justify-center flex flex-wrap -mx-4">
        <img class="py-10 h-[40rem]" src="{{ asset('img/entrada.jpg')}}" alt="">
        <h1>Excelência Educacional</h1>
        <p>Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossas aulas são ministradas por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
        </div>

</body>

</html>