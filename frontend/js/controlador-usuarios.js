function login(){
    axios({
        url:"../backend/api/login.php",
        method:"post",
        responseType:"json",
        data:{
            email: document.getElementById('email').value,
            password: document.getElementById('password').value
        }
    }).then(res=>{
        if(res.data.codigoResultado==1){
            window.location.href = "home.php";
        }
            
        else{
            document.getElementById('error').style.display = 'block';
            document.getElementById('error').innerHTML = res.data.mensaje;
        }
        console.log(res);
    }).catch(err=>{
        console.log(err);
    });
}