function validateForm(password){
    var validPassword = /^(?=.*[a-z])(?=.*[0-9])(?=.*\d).{8,}$/g;
    
    return (validPassword.test(password));

}

console.log(validateForm('mkhairiusman123'));

