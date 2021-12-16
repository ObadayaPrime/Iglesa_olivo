
$('#savePersona').submit(function(e){
    e.preventDefault();
    console.log("aqui estoy")
    $.ajax({
        url:`${base_url}/persona`,
        type:"POST",
        datatype: "json",
        data: $('#savePersona').serialize() , 
        success:function(data){   
            console.log(data)            
            if(data == "registrado"){
                swal({
                    title: data,
              }).then(function () {
                  window.location.href=`${base_url}/listapersona`;
              });
            }else{
                swal({
                    title: data,
              })
                
            }
        }    
     });

    
})