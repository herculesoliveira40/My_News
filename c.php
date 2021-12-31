<?php 
                // definições de host, database, usuário e senha
                $servername = "localhost";
                $database = "users";
                $username = "root";
                $password = "1234";
try {
    $pdo = new PDO("mysql:host=$servername; dbname=$database", $username, $password);
    }
    catch (PDOException $e){
      echo "Error Database: " . $e->getMessage();
    }
    catch (Exception $e){
      echo 'Error generic: ' . $e->getMessage();
    }
        //Insert 
    if (isset($_POST['nome'])){
        $sql = $pdo->prepare("INSERT INTO user VALUES(null,?,?)");
        $sql->execute(array($_POST['nome'], $_POST['email']));
       
        header("Location: ./index.php?sucesso");
    
    }
?>   

<form method="post">
    <input type="text" name="nome">
    <input type="text" name="email">
    <input type="submit" value="Cadastrar">
</form>

  

<table border="5">
    <thead> 
            <tr>
              <th> ID:  </th>
              <th> Nome:  </th> 
              <th> Email: </th>
             
            </tr>               
    </thead>              



<?php 
        $sql = $pdo->prepare("Select * from user");
        $sql->execute();
        
        $fetchUsers = $sql->fetchAll();

        foreach ($fetchUsers as $key => $value){
            // echo 'ID- ' . $value['id_pessoa'] . ': nome: ' . $value['nome'] . ' |---| ' . 'email: ' . $value['email'];
          
        
        
    
?> 


        <tbody>  
            <tr>     
              <td> <?php  echo $value['id'] ?> </td> 
              <td> <?php  echo $value['nome'] ?> </td> 
              <td> <?php  echo $value['email'] ?> </td> 
              <td> <button>Del</button></td>
            </tr>
          </tbody>



<?php
 }
?>

</table>