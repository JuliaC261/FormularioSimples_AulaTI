<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h2> Formulário Cliente </h2>
<form action="result.php" method="get">
      <label for="nome">Nome</label>
     <input type="text" name="nome"/>
</br> 
  <label for="cpf">CPF</label>
  <input type="text" name="cpf" 
    placeholder="000.000.000-00"/>
</br>
  <label for="telefone">Telefone</label>
  <input type="text" name="telefone" placeholder="(00) 00000-0000"/>
</br>
    <p>
    <label for="pergunta">Você gostou do formulário?</label>
</br>
</br>
 <input type="checkbox" name="sim" value="s">Sim
</p>
 <p>
<input type="checkbox" name="não" value="n">Não
</p>
    <input type="submit" value="Salvar"/> 
</form>  

  </body>
</html>