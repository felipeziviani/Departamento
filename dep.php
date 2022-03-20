<?PHP
        $departamento = $_POST["departamento"];    
          
        switch($departamento){
            case "1":
                print "Secretária";
            break;
            
            case "2":
                print "Gerente";
            break;
            
            case "3":
                print "Operário";                
            break;
            
            case "4":
                print "Analista";     
            break; 

            case "5":
                print "Faxineiro";                
            break;
            default:
            print "código inválido";
        }
    ?>