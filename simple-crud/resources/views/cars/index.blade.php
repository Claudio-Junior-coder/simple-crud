<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Simple Crud</title>

        <!-- boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
         <!-- datatable -->
         <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
         <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    </head>
    <body class="bg-light container">

        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-between">
                <h2>Gerênciar Veiculos</h2>
                <button type="button" class="btn btn-primary" id="open-car-create">Criar novo</button>
            </div>
        </div>

        <x-create-vehicle/>

        <div class="row mt-5">
            <div class="col-12">
                <table id="cars-table" class="display table">
                    <thead>
                        <tr>
                            <th scope="col">Veículo</th>
                            <th scope="col">Placa</th>
                            <th scope="col">Ações</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $car)
                        <tr scope="row">
                            <td><input type="text" value="{{$car->name}}" id="name-{{$car->id}}"></td>
                            <td><input type="text" value="{{$car->plate}}" id="plate-{{$car->id}}"></td>
                            <td><button type="button" class="btn btn-warning" onclick="updateCar('{{$car->id}}')">Editar</button></td>
                            <td><button type="button" class="btn btn-danger" onclick="deleteCar('{{$car->id}}')">Excluir</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <script src="{{ asset('js/script.js') }}"></script>

    </body>
</html>
