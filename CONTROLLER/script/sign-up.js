let message;

function validateForm(){
    if(document.getElementById("names").value == "" || 
        document.getElementById("lnames").value == "" ||
        document.getElementById("age").value == "" ||
        document.getElementById("idUser").value == "" ||
        document.getElementById("email").value == "" ||
        document.getElementById("password").value == ""
    ){
        message = 'Por favor complete los campos requeridos'; 
        alert(message);
    }
}


