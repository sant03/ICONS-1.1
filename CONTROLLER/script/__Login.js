let message;

function validateForm(validateUser, validatePassword){
    
    if(validateUser.value == "" || 
        validatePassword.value == ""
    ){
        message = 'Por favor complete los campos requeridos'; 
        alert(message);
    }else{
        const loginForm = document.getElementById('login_form');
        loginForm.action = '../../CONTROLLER/php/login.php'
    }
}
