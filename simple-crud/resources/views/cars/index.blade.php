<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Simple Crud</title>

        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

        <!-- boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!-- datatable -->
        <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light container">

        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-between">
                <h2>Gerênciar Veiculos</h2>
                <button type="button" class="btn btn-primary">Criar novo</button>
            </div>
        </div>
        <div class="row mt-5">
            <form action="post">
                @csrf
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <div class="input-group input-group-sm w-25">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
                        <input type="text" class="form-control" name="name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm w-25">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Placa</span>
                        <input type="text" class="form-control" name="plate" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <button type="button" class="btn btn-primary w-25">Adicionar</button>
                </div>
            </form>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <table id="myTable" class="display table">
                    <thead>
                        <tr>
                            <th scope="col">Veículo</th>
                            <th scope="col">Placa</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr scope="row">
                            <td>Row 1</td>
                            <td>Row 2</td>
                            <td><button type="button" class="btn btn-warning">Editar</button></td>
                            <td><button type="button" class="btn btn-danger">Excluir</button></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <script src="{{ asset('/js/script.js') }}"></script>

    </body>
</html>
