<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Styles -->
    @livewireStyles

    <link rel="stylesheet" href="css/teste.css">
    <title>Teste</title>
</head>
<body>
    <div class="min-h-screen bg-gray">
        @livewire('navigation-menu')


        <main>
            <div class="container">
                <form id="emailForm">
                    <label for="email"></label>
                    <input type="email" id="email" name="email" required>
                    <button type="button" id="verificarButton">Verificar</button>
                </form>
                <div id="resposta"></div>
            </div>
    
            {{-- <div class="screen">
                <div class="container">
                    <div class="form">
                        <label for="email"></label>
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                </div> --}}
    
    
            <div class="overlay">
                <h1>ata</h1>
    
            </div>
            </div>


        </main>



@livewireScripts 
</body>
</html>