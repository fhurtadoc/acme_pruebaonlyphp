$(document).ready( function () {

    $( "#accordion" ).accordion();  

    // list_cars

    $.ajax({
        url:'controller.php?action=list_Cars',
        method:'GET'
    }).done((res)=>{        
        $('#list_cars').DataTable({
            data:JSON.parse(res),
            "columns": [
                { "data": "license" },
                { "data": "brand" },
                { "data": "name" },
                { "data": "owner_name" },
                { "data": "driver_name" },
                { "data": "color" }
            ]        
        });        
    })

    //list_drivers

    $.ajax({
        url:'controller.php?action=list_drivers',
        method:'GET'
    }).done((res)=>{                
        $('#list_drivers').DataTable({
            data:JSON.parse(res),
            "columns": [
                { "data": "id" },
                { "data": "id_card" },
                { "data": "name" },
                { "data": "address" },
                { "data": "phone" },
                { "data": "city" },
                { "data": "rol" }
            ]          
        });
        
    })

    //list_owners

    $.ajax({
        url:'controller.php?action=list_owner',
        method:'GET'
    }).done((res)=>{        
        $('#list_owners').DataTable({
            data:JSON.parse(res),
            "columns": [
                { "data": "id" },
                { "data": "id_card" },
                { "data": "name" },
                { "data": "address" },
                { "data": "phone" },
                { "data": "city" },
                { "data": "rol" }
            ]           
        });        
    })
} );