<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <main role="main">
        <div class="row">
            <div class="container col-md-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">Cadastro de Cliente</div>
                    </div>
                    <div class="card-body">
                        <form action="/cliente" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nome do Cliente</label>
                                <input
                                    type="text"
                                    id="name"
                                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                    name="name"
                                >
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="age">Idade do Cliente</label>
                                <input
                                    type="number"
                                    id="age"
                                    class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}"
                                    name="age"
                                >
                                @if ($errors->has('age'))
                                    <div class="invalid-feedback">{{ $errors->first('age') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="address">Endereço do Cliente</label>
                                <input
                                    type="text"
                                    id="address"
                                    class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                    name="address"
                                >
                                @if ($errors->has('address'))
                                    <div class="invalid-feedback">{{ $errors->first('address') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">Email do Cliente</label>
                                <input
                                    type="email"
                                    id="email"
                                    class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                    name="email"
                                >
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                                <button type="reset" class="btn btn-danger btn-sm">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>