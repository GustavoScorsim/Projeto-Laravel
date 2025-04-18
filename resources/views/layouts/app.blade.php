<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Aplicação Laravel</title>
    
    <!-- Adicionando o link do Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para a hora no canto superior direito */
        #horaAtual {
            color: red;  /* Cor vermelha para a hora */
            font-weight: bold;  /* Deixa o texto em negrito */
            position: fixed;  /* Fixa a hora na tela */
            top: 10px;  /* Posiciona 10 pixels abaixo do topo */
            right: 300px;  /* Posiciona 10 pixels da borda direita */
            font-size: 1.5rem;  /* Ajusta o tamanho da fonte */
            z-index: 1000;  /* Garante que a hora fique sobre os outros elementos */
        }
    </style>
</head>
<body>
    <!-- Hora Atual no canto superior direito -->
    <div id="horaAtual">00:00:00</div>

    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Minha Aplicação</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tabela">Tabela</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="usuarios/create">criar usuario</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Rodapé -->
    <footer class="bg-light text-center py-3 mt-5">
        <p>&copy; 2025 Minha Aplicação. Todos os direitos reservados.</p>
    </footer>

    <!-- Adicionando o script do Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script para atualizar a hora a cada segundo -->
    <script>
        function atualizarHora() {
            var now = new Date(); // Cria um novo objeto Date com a data e hora atual
            var horas = now.getHours().toString().padStart(2, '0'); // Hora no formato 2 dígitos
            var minutos = now.getMinutes().toString().padStart(2, '0'); // Minutos no formato 2 dígitos
            var segundos = now.getSeconds().toString().padStart(2, '0'); // Segundos no formato 2 dígitos

            // Monta a hora no formato desejado (HH:MM:SS)
            var horaFormatada = horas + ':' + minutos + ':' + segundos;

            // Exibe a hora no elemento com id="horaAtual"
            document.getElementById('horaAtual').textContent = horaFormatada;
        }

        // Atualiza a hora a cada segundo
        setInterval(atualizarHora, 1000);

        // Chama a função uma vez para definir a hora inicial
        atualizarHora();
    </script>
</body>
</html>
