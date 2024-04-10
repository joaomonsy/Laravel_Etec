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
    <header class="bg-gray-950">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div>
                <img class="w-16 cursor-pointer bg-gray-600 rounded" src="{{ asset('img/etec.png')}}" alt="...">
            </div>
            <div class="nav-links duration-500 md:static absolute bg-gray-950 md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col text-white md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-red-500 " href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li>
                        <a class="hover:text-red-500" href="{{ url('/cursos') }}">Cursos</a>
                    </li>
                    <li>
                        <a class="hover:text-red-500" href="{{ url('/departamentos') }}">Departamentos</a>
                    </li>
                    <li>
                        <a class="hover:text-red-500" href="{{ url('/oportunidade') }}">Oportunidades</a>
                    </li>
                    <li>
                        <a class="hover:text-red-500" href="{{ url('/vestibulinho') }}">Vestibulinho</a>
                    </li>
                    <li>
                        <a class="hover:text-red-500" href="{{ url('/instituicao') }}">Instituição</a>
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
            <div class="flex w-[40rem] rounded bg-gray-400">
                <input type="search" name="search" id="search" placeholder="Pesquisar" class="w-full border-none bg-transparent px-4 py-1 text-gray-900 outline-none focus:outline-none">
                <button class="m-2 rounded bg-teal-800 px-4 py-2 text-white">
                    Pesquisar
                </button>
            </div>
        </div>
        <div class="flex items-center justify-center flex-wrap mx-4 my-10">
            <img class="py-10 h-[40rem] w-[48rem] order-1 rounded-[80px] " src="{{ asset('img/frente.jpg')}}" alt="">
            <div class="order-2 w-full lg:w-1/2 px-4 text-white mx-26">
                <h1 class="text-5xl font-bold mr-30 mb-10">O que a ETEC pode fazer pelo seu FUTURO ainda HOJE?</h1>
                <p class="text-[25px] mr-250 mb-10 text-justify">Sabemos que às vezes pensar no futuro pode parecer assustador. Traçamos carreiras e planos profissionais a todo momento em nossos pensamentos, numa busca constante pelo caminho que nos trará o melhor. Mas saiba que a ETEC Zona Leste conhece os seus anseios e, está aqui, disposta a te apresentar um novo caminho! O futuro não precisa ser assustador. Suas habilidades técnicas e profissionais podem ser desenvolvidas enquanto você aprende com a gente. Em nossa instituição, nós valorizamos os pequenos passos. Dê o seu primeiro passo hoje em direção ao futuro. Faça parte da ETEC!</p>
                <a href="" class="ml-40 bg-red-500 px-[9rem] py-4 rounded-full text-white text-2xl">SAIBA MAIS SOBRE O VESTIBULINHO</a>
            </div>
        </div>
        <div class="flex items-center justify-center flex-wrap mx-4 my-10">
            <img class="py-10 h-[40rem] order-2 rounded-[80px] " src="{{ asset('img/entrada.jpg')}}" alt="">
            <div class="order-1 w-full lg:w-1/2 px-4 text-white mx-26">
                <h1 class="text-6xl font-bold mr-30 mb-10">Excelência Educacional</h1>
                <p class="text-[25px] text-justify mr-250 mb-10">Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossas aulas são ministradas por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
                <a href="{{ url('/cursos') }}" class="ml-40 bg-red-500 px-[9rem] py-4 rounded-full text-white text-2xl">CONHEÇA NOSSOS CURSOS</a>
            </div>
        </div>
        <div class="flex items-center justify-center flex-wrap mx-4 my-10">
            <img class="py-10 h-[40rem] w-[48rem] order-1 rounded-[80px] " src="{{ asset('img/auditorio.jpg')}}" alt="">
            <div class="order-2 w-full lg:w-1/2 px-4 text-white mx-26">
                <h1 class="text-5xl font-bold mr-30 mb-10">Para Além da Sala de Aula</h1>
                <p class="text-[25px] text-justify mr-250 mb-10">Buscamos levar o conhecimento para além da sala de aula tradicional. Incentivamos o cultivo de conexões valiosas por meio de networking e oportunidades de carreira. Além do sucesso acadêmico, nos preocupamos com o desenvolvimento pessoal de nosso corpo estudantil, oferecendo suporte abrangente, orientação vocacional e programas extracurriculares.</p>
                <a href="{{ url('/oportunidade') }}" class="ml-40 bg-red-500 px-[9rem] py-4 rounded-full text-white text-2xl">CONHEÇA NOSSAS OPORTUNIDADES</a>
            </div>
        </div>
        <div class="flex items-center justify-center flex-wrap mx-4 my-10">
            <img class="py-10 h-[40rem] order-2 rounded-[80px] " src="{{ asset('img/lab.jpg')}}" alt="">
            <div class="order-1 w-full lg:w-1/2 px-4 text-white mx-26">
                <h1 class="text-6xl font-bold mr-30 mb-10">Ambientes Favoráveis</h1>
                <p class="text-[25px] text-justify mr-250 mb-10">Contamos com uma infraestrutura moderna, laboratórios e salas equipadas com televisões, computadores, notebooks, impressoras 3D e muitos outros componentes propícios aos projetos que desenvolvemos durante a jornada dos estudantes. Ademais, nossa instituição é envolta em um grande jardim, com árvores de pequeno e médio porte, plantas e flores, provendo ao nosso corpo estudantil um ambiente mais acolhedor e aconchegante. Na ETEC Zona Leste, você encontrará um espaço favorável para o impulsionar seu crescimento acadêmico e profissional.</p>
                <a href="{{ url('/instituicao') }}" class="ml-40 bg-red-500 px-[9rem] py-4 rounded-full text-white text-2xl">CONHEÇA NOSSA INFRAESTRUTURA</a>
            </div>
        </div>
        <footer class="bg-gray-950 flex flex-col lg:flex-row items-center justify-between px-10 py-10">
            <img src="{{ asset('img/logo.png')}}" class="h-[13rem] mb-5 lg:mb-0" alt="Logo">

            <p class="text-white mb-5 lg:text-center font-bold  text-xl lg:mb-0">© 2024 JOLU. Todos os direitos reservados.</p>

            <div class="flex items-center justify-center lg:justify-end space-x-4">
                <a href="https://www.facebook.com/Cristiano?locale=pt_BR" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook text-white text-3xl"></i></a>
                <a href="https://www.youtube.com/@ManoelGomesOfficial" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube text-white text-3xl"></i></a>
                <a href="https://www.instagram.com/palmeiras/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram text-white text-3xl"></i></a>
            </div>
        </footer>
        </div>
    </main>

</body>

</html>