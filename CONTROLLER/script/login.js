let message;

function validateForm(){
    if(document.getElementById("user").value == "" || 
        document.getElementById("password").value == ""
    ){
        message = 'Por favor complete los campos requeridos'; 
        alert(message);
    }
}