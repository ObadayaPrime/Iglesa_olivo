$('#saveOfrenda').submit(function(e){
    e.preventDefault();
    console.log("aqui estoy")
    $.ajax({
        url:`${base_url}/ofrenda`,
        type:"POST",
        datatype: "json",
        data: $('#saveOfrenda').serialize() , 
        success:function(data){   
            console.log(data)            
            if(data == "Se Registro la Ofrenda"){
                swal({
                    title: data,
              }).then(function () {
                  window.location.href=`${base_url}/ofrenda`;
              });
            }else{
                swal({
                    title: data,
              })
                
            }
        }    
     });

    
})