<?php

    namespace PHP\atividade1;

    require_once('Usuario.php');
    require_once('Livro.php');
    require_once('Compra.php');
    require_once('Reserva.php');
    require_once('OperadoraCartao.php');
    

    use PHP\atividade1\Usuario;
    use PHP\atividade1\Livro;
    use PHP\atividade1\Compra;
    use PHP\atividade1\Reserva;
    use PHP\atividade1\OperadoraCartao; 



    
    $usuario1 = new Usuario("Cleiton","Rua","12908310239","29/12/2021","Cleiton123","Cleito321","123124123");
    

    
    $livro1 = new Livro("1","Aventuras","Jorge","R$20,00"); 
    $livro2 = new Livro(2,"Era uma Vez","Roberto","R$15,00");
    $compra1 = new Compra(1,$usuario1,"Cartão de Crédito",$livro1,20);
    $reserva1 = new Reserva($livro2);
    $operadoraCartao1 = new OperadoraCartao("4321","123");
    




    echo "<br><br>".$usuario1->verificarLogin("matheus","123");
    echo"<br><br>".$usuario1->imprimir();
    
    
    echo "<br><br><br>".$livro1->disponibilidade("1");
    echo"<br><br>".$livro1->imprimir();
    

    echo "<br><br>".$compra1->imprimir();
    echo "<br><br>".$reserva1->imprimir();

    echo "<br><br>".$operadoraCartao1->imprimir();
    
?>