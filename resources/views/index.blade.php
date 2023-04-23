<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>

    <!-- Styles -->
    @vite([
        'resources/css/app.css', 
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])
</head>
<body>

    <!-- Criando NavBar localizada na parte superior da aplicação -->
    <div class= "mx-auto bg-white">
        <div class="container-lg mx-auto px-0 py-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-lg">
                    <a class="navbar-brand" href="#">SISTEMA WEB</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link active" href="">Cadastrar </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="consulta">Consultar</a>
                            </li>
                        </ul>
                    </div>
            </nav>
    <!-- Fim do NavBar -->

    <!-- Iniciando o formulário para cadastrar os dados -->
    <div class="card">
            <div class="card-body">
                <div class="container-lg">
                    <h4 class="card-title"> Cadastrar - Agendamento de Potenciais Clientes </h4>
                    <p class="card-text"> Sistema utilizado para agendamento de serviços </p>
                    <form class="row g-3" method="POST" id="form" action="{{route('agendamentos.store')}}" nome="form">
                        @csrf
                        <div class="form-row">

                            <!-- Input Nome -->
                            <label for="validationCustom01">Nome</label>
                            <input type="text" name="nome" class="form-control" id="validationCustom01" placeholder="Nome Completo" required>
                            <br>

                            <!-- Input Telefone -->
                            <label for="validationCustom02">Telefone:</label>
                            <input type="tel" name="telefone" class="form-control" id="validationCustom02" placeholder="(xx) xxxxx-xxxx"  required>
                            <br>

                            <!-- Input Origem -->
                            <label for="inputState" class="form-label">Origem</label>
                            <select class="form-select" name="origem" id="inlineFormCustomSelect" required>
                                <option selected value="Celular">Celular</option>
                                <option value="Telefone Fixo">Telefone Fixo</option>
                                <option value="Celular/Telefone Móvel">Celular/Telefone Móvel</option>
                                <option value="Ramal">Ramal</option>
                                <option value="Whatsapp">Whatsapp</option>
                                <option value="Telegram">Telegram</option>
                                <option value="Facebook">Facebook</option>
                            </select>     
                            <br>

                            <!-- Input Data do Contato -->
                            <label for="validationCustom03">Data do Contato:</label>
                            <input type="date" name="contato" class="form-control" id="validationCustom03" placeholder="dd/mm/aaaa" required>
                            <br>

                            <!-- Input Observação -->
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Observação:</label>
                                <textarea class="form-control" name="observacao" name="txtObservacao" id="txtObservacao" placeholder="Digite uma observação" rows="3" required></textarea>
                            </div>
                            <br>

                            <!-- Input Ação -->
                            <label for="validationCustom04">Ação</label>
                            <input type="text" name="acao" class="form-control" id="validationCustom01" required>
                            <br>

                            <!-- Botão Cadastrar -->
                            <button class="btn btn-primary" type="submit">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Fim do formulário -->
</form>
</body>
</html>