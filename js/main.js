var btn = document.getElementById('submit');

window.onload = function(){
    window.addEventListener('keypress', function(e){
        if(e.keyCode = '13'){
            console.log("Enter pressed:");
        }
    }, false);
}

function authorize(){
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    username = username.toLowerCase();

    if(username == 'admin' && password == 1234){
        username = username.replace(' ','');
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
    location.assign('./portal.html')
}