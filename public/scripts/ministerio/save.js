$('#saveMinisterio').submit(function(e){
    e.preventDefault();
    console.log("aqui estoy")
    $.ajax({
        url:`${base_url}/ministerio`,
        type:"POST",
        datatype: "json",
        data: $('#saveMinisterio').serialize() , 
        success:function(data){   
            console.log(data)            
            if(data == "registrado"){
                swal({
                    title: data,
              }).then(function () {
                  window.location.href=`${base_url}/ministerio`;
              });
            }else{
                swal({
                    title: data,
              })
                
            }
        }    
     });

    
})
$('#updateMinisterio').submit(function(e){
    e.preventDefault();
    console.log("aqui");
    var form = $(this);
    $.ajax({
        url:form.attr('action'),
        type:"PUT",
        datatype: "json",
        data: $('#updateMinisterio').serialize() , 
        success:function(data){   
            console.log(data)            
            if(data == "Modificado"){
                swal({
                    title: data,
              }).then(function () {
                  window.location.href=`${base_url}/ministerio`;
              });
            }else{
                swal({
                    title: data,
              })
                
            }
        }    
     });

    
})