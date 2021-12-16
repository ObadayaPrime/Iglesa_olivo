$('#saveMiembros').submit(function(e){
    e.preventDefault();
    console.log("aqui estoy")
    $.ajax({
        url:`${base_url}/miembros`,
        type:"POST",
        datatype: "json",
        data: $('#saveMiembros').serialize() , 
        success:function(data){   
            console.log(data)            
            if(data == "registrado"){
                swal({
                    title: data,
              }).then(function () {
                  window.location.href=`${base_url}/miembroslista`;
              });
            }else{
                swal({
                    title: data,
              })
                
            }
        }    
     });

    
})

$('#updateMiembros').submit(function(e){
    e.preventDefault();
    console.log("aqui");
    var form = $(this);
    $.ajax({
        url:form.attr('action'),
        type:"PUT",
        datatype: "json",
        data: $('#updateMiembros').serialize() , 
        success:function(data){   
            console.log(data)            
            if(data == "Modificado"){
                swal({
                    title: data,
              }).then(function () {
                  window.location.href=`${base_url}/miembroslista`;
              });
            }else{
                swal({
                    title: data,
              })
                
            }
        }    
     });
});

var ci=''
$( ".ci" ).click(function() {
    ci=$(this).attr("id");
});

$('.modal-show-ministerio-persona').click(function () {
    $('#modal-ministerio-persona').modal('show');
   
    var ci=$(this).attr("data-id");
    $('#ci').val(ci);
   
});
$('#saveDetalleMinisterio').submit(function(e){
    e.preventDefault();
    var form = $(this);
    $.ajax({
        url:form.attr('action'),
        type:"POST",
        datatype: "json",
        data: $('#saveDetalleMinisterio').serialize() , 
        success:function(data){   
                   
            if(data.status == "ok"){
                swal({
                    title: data.message,
              }).then(function () {
                  window.location.href=`${base_url}/miembroslista`;
              });
            }else{
                swal({
                    title: data.message,
              })
                
            }
        }    
     });

    
});

$('.modal-show-traspaso').click(function () {
    $('#modal-ministerio-persona').modal('show');
    ci=$(this).attr("data-id");
    $.ajax({
        url:`${base_url}/listapersona/${ci}`,
        type:"GET",
        datatype: "json",
        success:function(data){   
            console.log(data)
            $('#nombre').val(data.Nombre);
            $('#apellidoP').val(data.ApellidoP);
            $('#apellidoM').val(data.ApellidoM);
            $('#CI').val(data.CIn);
            $('#telefono').val(data.Telefono);
            $('#dirrecion').val(data.Direccionn);
        }    
     });
});
$('#form-traspaso').submit(function(e){
    $('#Modal-traspaso').modal('hide');
    e.preventDefault();
    var form = $(this);
    $.ajax({
        url:form.attr('action'),
        type:"POST",
        datatype: "json",
        data: $('#form-traspaso').serialize(), 
        success:function(data){   
            if(data.status == "guardado"){
                swal({
                    title: data.message,
              }).then(function () {
                  window.location.href=`${base_url}/miembroslista`;
              });
            }else{
                swal({
                    title: data.message,
              })
                
            }
        }    
     });
});

