<?php
    include_once("../database/db.php");

    function limpia_entrada($variable) {
        return $variable = htmlspecialchars($variable);
    }
    function closeDb($mysqli){
    mysqli_close($mysqli);
}
    //Función que conecta a la bd, realiza un query y vuelve a cerrar la bd. Recibe el SQL del query y regresa un objeto mysqli result
    function query($qry){
        $con = connectDb();
        if(!$con){
            http_response_code(500);
            return false;
        }
        $result = mysqli_query($con, $qry);
        closeDb($con);
        return $result;
    }

    function autenticar($num, $password){
        //Recupera unicamente el password del usuario para poder verificarlo
        $passQuery = " 	SELECT password as passHash
                        FROM 	usuario
                        WHERE 	numero_tel='$num'";

        $passHash = query($passQuery)->fetch_object();

        if($passHash){
            $passHash=$passHash->passHash;
        } else{
            $passHash="";
        }
        if (password_verify($password, $passHash)) {
            setPermisos($num);
            return 1;
        } else{return 0;}
    }

    //asigna los privilegios del usuario a la sesión
    function setPermisos($numero){
        $sql = "
            SELECT  u.nombre as nom, p.nombre as priv
            FROM usuario u, usuario_rol ur, rol r, privilegio_rol pr, privilegio p
            WHERE u.numero_tel='$numero'
              AND u.id=ur.usuario_id
              AND ur.rol_id=r.id
              AND r.id=pr.rol_id
              AND pr.privilegio_id=p.id
        ";
        $result = query($sql);

        while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
            //asigna permisos
            $_SESSION['privilegios'][$row["priv"]] = 1;
            $_SESSION["nombre"] = $row["nom"];
            $_SESSION["numero"] = $row["nom"];
        }
    }

    function checkPriv($priv){
        return isset($_SESSION["privilegios"]) && isset($_SESSION["privilegios"][$priv]) && $_SESSION["privilegios"][$priv]===1 ;
    }