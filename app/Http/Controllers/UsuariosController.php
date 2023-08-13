<?php

namespace App\Http\Controllers;

use App\Models\Cep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class UsuariosController extends Controller
{
    public function index()
    {
    
        return view('usuarios.index');
    }


    function conectarApi(Request $request){
      $nomeUsuarioBusca = $request->input('nomeUsuarioBusca');
      echo view('usuarios.index');
  
      echo '<script>  
         async function conectarApi() {
            //Buscando na api utilizando o valor de cep passado pelo usuário 
            const response = await fetch("https://api.github.com/users/'.$nomeUsuarioBusca.'");
            //Guardado a resposta em um objeto json
            const $usuarioJSON = await response.json();

            console.log($usuarioJSON["nomeUsuario"]);
            console.log(document.getElementById("nomeUsuarioBusca").value);

            var cep = $usuarioJSON;
            cep=JSON.stringify(cep);         //Conversão de Json para string

           
            
            document.getElementById("nomeUsuarioBusca").value=$usuarioJSON["login"];
            document.getElementById("UsuarioJSON").innerHTML="<br>Formato JSON Convertido para string <br>";
            document.getElementById("UsuarioJSON").append(cep);

           

            var usuarioDetalhado="";
            usuarioDetalhado+="<br><br> Nome de Usuario: <input readonly type=text name=nomeUsuario id=nomeUsuario > ";
            usuarioDetalhado+="<br> Id:                  <input readonly type=text name=idUsuario id=idUsuario > ";
            usuarioDetalhado+="<br> Node Id:             <input readonly type=text name=nodeId id=nodeId > ";
            usuarioDetalhado+="<br> Nome:                <input readonly type=text name=nome id=nome > ";
            usuarioDetalhado+="<br> Cidade:              <input readonly type=text name=cidade id=cidade > ";
            usuarioDetalhado+="<br> Bio:                 <input readonly type=text name=bio id=bio > ";
            usuarioDetalhado+="<br> Data Criacao:        <input readonly type=text name=dataCriacao id=dataCriacao > ";
            usuarioDetalhado+="<br> Ultima Atualizacao:  <input readonly type=text name=dataAtualizacao id=dataAtualizacao > ";
          
            document.getElementById("UsuarioDetalhado").innerHTML=usuarioDetalhado;
            document.getElementById("nomeUsuario").value=$usuarioJSON["login"];
            document.getElementById("idUsuario").value=$usuarioJSON["id"];
            document.getElementById("nodeId").value=$usuarioJSON["node_id"];
            document.getElementById("nome").value=$usuarioJSON["name"];
            document.getElementById("cidade").value=$usuarioJSON["location"];
            document.getElementById("bio").value=$usuarioJSON["bio"];
            document.getElementById("dataCriacao").value=$usuarioJSON["created_at"];
            document.getElementById("dataAtualizacao").value=$usuarioJSON["updated_at"];

          
            
         }
         conectarApi();

      </script>';
      
     
      

      
  }

  function redirecionar(){
    
    return redirect('/ceps');

  }
   
   
    

    


    
}
