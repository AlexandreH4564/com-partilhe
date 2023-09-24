<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ComPartilhe') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <form action="{{ route('doador.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar Doador</button>
                </form>

                <form action="{{ route('pecas.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        
                        <label for="codigo">Codigo:</label>
                        <input type="text" name="codigo" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="cor">Cor:</label>
                        <input type="text" name="cor" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo:</label>
                        <input type="text" name="tipo" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="material">Material:</label>
                        <input type="text" name="material" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Email doador">Email Doador:</label>
                        <input type="email" name="email_doador" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="creditos">Créditos:</label>
                        <input type="number" name="creditos" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar Peça</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>


