addEventListener("load", (event) => {

    let carsTable = new DataTable('#cars-table', {
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/pt-BR.json',
        },
    });

    $('#create-vehicle').hide();

    $( "#open-car-create" ).on( "click", function() {
        if($('#create-vehicle').is(":hidden")){
            $('#create-vehicle').show();
        } else {
            $('#create-vehicle').hide();
        }
    } );

    $( "#car-form" ).on( "submit", function(e) {
        e.preventDefault();
        createCar();
    } );

})


function createCar() {

    let name = $('#name').val();
    let plate = $('#plate').val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('input[name=_token]').val()
        }
    });
    $.ajax({
        type: 'POST',
        url: "/cars/create",
        data: { name: name, plate: plate},
        success: function (response) {
            if(response.success){
                location.reload()
            } else {
                alert('Algo deu errado')
            }
        }
    });
}


function updateCar(id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('input[name=_token]').val()
        }
    });

    let name = $('#name-'+id).val();
    let plate = $('#plate-'+id).val();

    $.ajax({
        type: 'POST',
        url: "/cars/update",
        data: { id: id, name: name, plate: plate},
        success: function (response) {
            if(response.success){
                location.reload()
            } else {
                alert('Algo deu errado')
            }
        }
    });
}


function deleteCar(id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('input[name=_token]').val()
        }
    });

    $.ajax({
        type: 'POST',
        url: "/cars/delete",
        data: { id: id},
        success: function (response) {
            if(response.success){
                location.reload()
            } else {
                alert('Algo deu errado')
            }
        }
    });
}
