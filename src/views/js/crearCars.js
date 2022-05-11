$( "#accordion2" ).accordion({
    heightStyle: "fill"
});
    list_driver();
    var form_owner                       
    var form_car     
    var id_user=0
    const prevBtns = document.querySelectorAll(".btn-prev");
    const nextBtns = document.querySelectorAll(".btn-next");
    const progress = document.getElementById("progress");
    const formSteps = document.querySelectorAll(".form-step");
    const progressSteps = document.querySelectorAll(".progress-step");


    function list_driver(){
        $.ajax({
            url: "../../../controller.php?action=list_drivers_outcars", 
            method:"get",            
        }).done(function(res) {
            let data=JSON.parse(res)
            data.forEach(element => {
                var options = `

                <option value="${element.id}">${element.name}-${element.second_name}-${element.last_name} cc ${element.id_card} </option>
                ` 

                $("#list_drivers").append(options);
            });
        })         
    }

    $('#list_drivers').change((e)=>{        
        var id=$('#list_drivers').val();
        id_user=id;        
    })

    let formStepsNum = 0;     

    prevBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
          formStepsNum--;
          updateFormSteps();
          updateProgressbar();
        });
      });

            function updateFormSteps() {
                formSteps.forEach((formStep) => {
                    formStep.classList.contains("form-step-active") &&
                    formStep.classList.remove("form-step-active");
                });
            
                formSteps[formStepsNum].classList.add("form-step-active");
                }
            
                function updateProgressbar() {
                progressSteps.forEach((progressStep, idx) => {
                    if (idx < formStepsNum + 1) {
                    progressStep.classList.add("progress-step-active");
                    } else {
                    progressStep.classList.remove("progress-step-active");
                    }
                });
            
                const progressActive = document.querySelectorAll(".progress-step-active");
            
                progress.style.width =
                    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
                }

    function asoc_car(id_car){

        if(id_user===0){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'error por favor seleccione un Conductor',                        
              })
            
        }else{
            var form_asoc={
                id_car:id_car,
                id_user:id_user
            }
            console.log(form_asoc);
    
            $.ajax({
                url: "../../../controller.php?action=assign_car", 
                method:"post",
                data:form_asoc    
            }).done(function(res) {
                let data=JSON.parse(res);
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: false,
                    timer: 1500,                            
                    text: data.mensaje.toString(),                        
                  })
            }) 
        }
    }
    
    function createCars_owner(id_owner){
        form_car.owner=id_owner
        $.ajax({
            url: "../../../controller.php?action=create_car", 
            method:"post",
            data:form_car    
        }).done(function(res) {
            let data=JSON.parse(res);
            asoc_car(data.id);
        }) 
    }

    
        
           
    function createCars(step){        
        switch (step) {
            case 1:
                var res=[];
                var cedula_owner=$('#cedula_owner').val()
                var name_owner=$('#name_owner').val();
                var last_name_owner=$('#last_name_owner').val();
                var address_owner=$('#address_owner').val();
                var phone_owner=$('#phone_owner').val();
                var city_owner =$('#city_owner').val();
                var owners={
                    id_card:cedula_owner,
                    name:name_owner,
                    last_name:last_name_owner,
                    address:address_owner,
                    phone:phone_owner,
                    city:city_owner,
                }                
                res=validate(step, owners);
                console.log(res);
                if(res.length===0){
                    owners_scope=owners;
                    formStepsNum=step                    
                    form_owner=owners                    
                    updateFormSteps();
                    updateProgressbar();
                }else{
                    var errosString=''
                    for (const err in res) {
                        errosString=errosString+'<br>'+res
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        html: res.toString(),                        
                      })
                }
                
            break;

            case 2:
                var res=[];
                var license=$('#license').val();
                var brand=$('#brand').val();
                var Color=$('#Color').val();
                var type_car=$('#type_car').val();
                var car={
                    license:license,
                    brand:brand,
                    Color:Color,
                    type_car:type_car,
                }
                res=validate(step, car);
                
                if(res.length===0){
                    form_car=car;
                    formStepsNum=step                                        
                    updateFormSteps();
                    updateProgressbar();
                }else{                    
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        html: res.toString(),                        
                      })
                }

            break;

            case 3:
                var res=[];
                var cedula=$('#cedula').val()
                var name=$('#name').val()
                var second_name=$('#second_name').val()
                var last_name=$('#last_name').val()
                var address=$('#address').val()
                var phone=$('#phone').val()
                var city=$('#city').val()
                var driver={
                    id_card:cedula,
                    name:name,
                    second_name:second_name,                    
                    last_name:last_name,
                    address:address,
                    phone:phone,
                    city:city,
                }
                res=validate(step, driver); 
                if(res.length===0){
                    formStepsNum=step                    
                    $.ajax({
                        url: "../../../controller.php?action=create_driver", 
                        method:"post",
                        data:driver    
                    }).done(function(res) {
                        let data=JSON.parse(res);        
                        id_user=data.id 
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Your work has been saved',
                            showConfirmButton: false,
                            timer: 1500,                            
                            text: data.mensaje.toString(),                        
                          })
                          
                    })                                     
                }else{                    
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        html: res.toString(),                        
                      })
                }               
            break;
        
            default:
                if(id_user===0){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'error por favor seleccione un Conductor',                        
                      })
                    
                }else{
                    $.ajax({
                        url: "../../../controller.php?action=create_owner", 
                        method:"post",
                        data:form_owner    
                    }).done(function(res) {
                        let data=JSON.parse(res);
                        var id=data.id
                        createCars_owner(id);
    
                    }) 
                }
             
                break;
        }

    }

    function validate(step, object){
        var errors=[];
        switch (step) {
            case 1:
                if (object.name==='' || object.name===undefined || object.name.length===0){  errors.push("error en el nombre del propietario<br>")}                
                if (object.id_card==='' || object.id_card===undefined || object.id_card.length===0) { errors.push("error en la cedula del propietario<br>")}
                if (object.last_name==='' || object.last_name===undefined || object.last_name.length===0){ errors.push("error en el apellido del propietario<br>")}
                if (object.address==='' || object.address===undefined || object.address.length===0){ errors.push("error en el direccion del propietario<br>")}
                if (object.phone==='' || object.phone===undefined || object.phone.length===0){ errors.push("error en el telefono del propietario<br>")}
                if (object.city==='' || object.city===undefined || object.city.length===0){ errors.push("error en la ciudad del propietario<br>")}
                return errors
            break;
            case 2:
                if(object.license==='' || object.license===undefined || object.license.length===0){  errors.push("error en la placa del vehiculo<br>")}
                if(object.brand==='' || object.brand===undefined || object.brand.length===0){  errors.push("error en la marca del vehiculo<br>")}
                if(object.Color==='' || object.Color===undefined || object.Color.length===0){  errors.push("error en el color del vehiculo<br>")}
                if(object.type_car==='' || object.type_car===undefined || object.type_car.length===0){  errors.push("error en el tipo de vehiculo<br>")}
                return errors
            break;
            case 3:
                if(object.name==='' || object.name===undefined || object.name.length===0) {  errors.push("error en el nombre del conductor<br>")}
                if(object.second_name==='' || object.second_name===undefined || object.second_name.length===0) {  errors.push("error en el segundo nombre del conductor<br>")}
                if(object.last_name==='' || object.last_name===undefined || object.last_name.length===0) {  errors.push("error en el apellido del conductor<br>")}
                if(object.address==='' || object.address===undefined || object.address.length===0) {  errors.push("error en el direccion del conductor<br>")}
                if(object.phone==='' || object.phone===undefined || object.phone.length===0) {  errors.push("error en el telefono del conductor<br>")}
                if(object.city==='' || object.city===undefined || object.city.length===0) {  errors.push("error en la ciudad del conductor<br>")}               
                return errors
            break;
        
            default:
                break;
        }

    }
 

    /*name_owner
    second_name_owner
    last_name_owner
    address_owner
    phone_owner
    city_owner


    license
    brand
    Color
    type_car

    name
    second_name
    last_name
    address
    phone
    city*/
