
<?php 
    "<p><b>Problema geometría</b></p>";

    $radio = $_POST['radio'];
    const MULTIPLICADOR = 2;
    $opcion = $_POST['opcion'];

    switch ($opcion) {
        case 1:
            $diametro = $radio*MULTIPLICADOR;
            echo "El diámetro es $diametro cm <br>";
            break;
        
        case 2:
            $area = pi() * ($radio**2);
            echo "El área es $area cm^2 <br>";
            break;
        
        case 3:
            $perimetro = 2 * $radio * pi();
            echo "El perímetro es $perimetro cm <br>";
            break;
        
        default:
            echo "Elija la opción correcta";
            break;
    }    
?>