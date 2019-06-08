

function loginValidate(e) {

    e.preventDefault();

    const username = document.querySelector('#loginUsername').value;
    const password = document.querySelector('#password').value;
    let errors = [];
    /* REGULAR EXPRESSIONS */

    var reName = /^[A-ZČĆŽĐŠ][a-zčćžđš]{2-12}([A-ZČĆŽĐŠ][a-zčćžđš]{2-12})+$/;
    var reUserName = /^[a-zčćžđš](\w\d\-\_)+$/;
    var rePassword = /^[a-zčćžđš](\w\d\_\-){6,}$/;
    var reMail = /^[a-z](\w\d){2,20}\@([a-z]{2,5}\.){1,2}\.[a-z]{2,3}$/;

    if(reUserName.test(username)){
        errors.push("error on user name");
        document.querySelector('#loginUsername').className='border border-danger';
    }
    else document.querySelector('#loginUsername').className='';
    if(rePassword.test(password)){
        errors.push("error on password");
        document.querySelector('#password').className='border border-danger';
    }
    else document.querySelector('#password').className='password';
    if(errors.length >0){

        //console.log(errors);
        return false;
    }
   // else console.log(errors);
    else return true;
}