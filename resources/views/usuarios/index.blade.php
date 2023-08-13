   <x-layout title="Usuario">
   </x-layout>

   <form action="/usuarios/consultar" method="post">
      @csrf
      Nome de Usuario: <input type="text" name="nomeUsuarioBusca" id="nomeUsuarioBusca" value="">
      <button type="submit" >Clique para buscar informacoes do usuario com o Nome de usuario informado</button>
   </form>
   <div id="UsuarioJSON">    
   </div>
   <div id="UsuarioDetalhado">
   </div>





 
