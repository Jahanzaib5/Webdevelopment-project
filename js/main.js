var btn = document.getElementById('submit');


function authorize(){
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    username = username.toLowerCase();

    if(username == '' && password == ''){
        username = username.replace('');
		console.log('Incorrect inputs');

    }else{
        return 0;
    }
}
