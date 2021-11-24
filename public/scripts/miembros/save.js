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

$('#saveDetalleMinisterio').submit(function(e){
    e.preventDefault();
  
    $('#ci').val(ci)
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

