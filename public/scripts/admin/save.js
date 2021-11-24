$('#saveAdmin').submit(function(e){
    e.preventDefault();
    console.log("aqui estoy")
    $.ajax({
        url:`${base_url}/admin`,
        type:"POST",
        datatype: "json",
        data: $('#saveAdmin').serialize() , 
        success:function(data){   
            console.log(data)            
            if(data == "registrado"){
                swal({
                    title: data,
              }).then(function () {
                  window.location.href=`${base_url}/admin`;
              });
            }else{
                swal({
                    title: data,
              })
                
            }
        }    
     });
    })