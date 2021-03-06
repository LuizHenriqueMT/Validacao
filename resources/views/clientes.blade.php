<html>
<head>
    <title>Cadastro de Cliente</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body{
            padding: 20px;
        }
    </style>
</head>
<body>
<main role="main">
    <div class="row">
        <div class="container col-md-8 offset-md-2">
            <div class="card border">
                <div class="card-header">
                    <div class="card-title">
                        Cadastro de Cliente
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-hover" id="tableprodutos">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Idade</th>
                                <th>Endereço</th>
                                <th>E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $clientes as $clientes )
                                <tr>
                                    <td>{{ $clientes->id }}</td>
                                    <td>{{ $clientes->nome }}</td>
                                    <td>{{ $clientes->idade }}</td>
                                    <td>{{ $clientes->endereco }}</td>
                                    <td>{{ $clientes->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
