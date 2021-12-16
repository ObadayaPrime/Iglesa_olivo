$('#saveDiezmo').submit(function(e){
    e.preventDefault();
    console.log("aqui estoy")
    $.ajax({
        url:`${base_url}/diezmos`,
        type:"POST",
        datatype: "json",
        data: $('#saveDiezmo').serialize() , 
        success:function(data){   
            console.log(data)            
            if(data == "registrado"){
                swal({
                    title: data,
              }).then(function () {
                  window.location.href=`${base_url}/listadiezmos`;
              });
            }else{
                swal({
                    title: data,
              })
                
            }
        }    
     });
    })

    $('#updateDiezmo').submit(function(e){
        e.preventDefault();
        console.log("aqui");
        var form = $(this);
        $.ajax({
            url:form.attr('action'),
            type:"PUT",
            datatype: "json",
            data: $('#updateDiezmo').serialize() , 
            success:function(data){   
                console.log(data)            
                if(data == "Modificado"){
                    swal({
                        title: data,
                  }).then(function () {
                      window.location.href=`${base_url}/listadiezmos`;
                  });
                }else{
                    swal({
                        title: data,
                  })
                    
                }
            }    
         });
    });