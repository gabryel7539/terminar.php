function funcaojs(){
   fetch("main.js").then(funcprocresp);

}
 function funcprocresp(resp) { 
    resp.json().then(data);{
      console.log(data.nome);
      console.log(data.idade);

    }


 }