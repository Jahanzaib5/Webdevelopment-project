var btn = document.getElementById('submit');

function authorize(){
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    username = username.toLowerCase();

    if(username == 'admin' && password == 1234){
        return authorized();

    }else{
        return deny();
    }
}

function deny(){
    console.log('denied');
    alert("Login denied!")
}

function authorized(){
    location.assign('https://www.google.com');
}