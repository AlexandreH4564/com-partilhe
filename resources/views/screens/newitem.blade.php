<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Styles -->
    @livewireStyles

    <link rel="stylesheet" href="css/newitem.css">
    <title>Nova Peça</title>
</head>
<body>
    <div class="min-h-screen">
        @livewire('navigation-menu')


        <div class="container">
            <form action="{{ route('pecas.criarPeca') }}" method="POST">
                @csrf

                <div class="lineA">
                    {{-- Codigo Box --}}
                    <div class="form-group">
                        <label for="codigo">
                            Codigo
                            <div class="input-field">
                                <input type="text" name="codigo" class="form-control" required>
                            </div>
                        </label>
                    </div>

                    {{-- Cor Box --}}
                    <div class="form-group">
                        <label for="cor">
                            Cor
                            <div class="input-field">
                                <input type="text" name="cor" class="form-control" required>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="lineB">
                    {{-- Tipo Box --}}
                    <div class="form-group">
                        <label for="tipo">
                            Tipo
                            <div class="input-field">
                                <input type="text" name="tipo" class="form-control" required>
                            </div>
                        </label>
                    </div>

                    {{-- Material Box --}}
                    <div class="form-group">
                        <label for="material">
                            Material
                            <div class="input-field">
                                <input type="text" name="material" class="form-control" required>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="lineC">
                    {{-- Email Doador Box --}}
                    <div class="form-group">
                        <label for="Email doador">
                            Email do doador
                            <div class="input-field">
                                <input type="email" name="email_doador" class="form-control" required>
                            </div>
                        </label>
                    </div>

                    <!-- {{-- Creditos Box --}} -->
                    <div class="form-group">
                        <label for="creditos">
                            Partilhes
                            <div class="input-field">
                                <input type="number" name="creditos" class="form-control" required>
                            </div>
                        </label>
                    </div>
                    </div>

                <div class="btn">
                    <button type="submit" class="botao">Cadastrar Nova Peça</button>
                </div>
            </form>
        </div>
        <div class="modal">
            <p>
                Peça cadastrada com sucesso!
            </p>
        </div>
@livewireScripts
</body>
<script src="/JavaScript/modal.js"></script>
</html>