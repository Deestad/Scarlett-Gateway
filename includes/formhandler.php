<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(isset($_POST["password"])){
        $input_password = htmlspecialchars($_POST["password"]);
        try {
            require_once("../phpconnect.php");
            $set_password = $conn->query("SELECT * FROM system_acess")->fetch(PDO::FETCH_ASSOC);;


            if(password_verify($input_password,$set_password["password"])){
                header("Location: linkway.php");
                exit();
            } else {
                header("Location: ../login.php");
                exit();
            }
            
        } catch (PDOException $e) {
            die("Query failed." . $e->getMessage());
            
        }  
    } 
    
    if(isset($_POST["sticky"])){
        $sticky_note = htmlspecialchars($_POST["sticky"]);
        try {
            require_once("../phpconnect.php");
            $stmt = $conn->prepare("SELECT * FROM sticky");
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                // If a value exists, update it
                $stmt = $conn->prepare("UPDATE sticky SET contents = :sticky_note WHERE id = 1");
                $stmt->bindParam(':sticky_note', $sticky_note);
                $stmt->execute();
                header("Location: linkway.php");
                exit();
            } else {
                // If no value exists, insert the new value
                $stmt = $conn->prepare("INSERT INTO sticky (id, contents) VALUES (1, :sticky_note)");
                $stmt->bindParam(':sticky_note', $sticky_note);
                $stmt->execute();
                header("Location: linkway.php");
                exit();
                
            }
            
        } catch (PDOException $e) {
            die("Query failed." . $e->getMessage());
            
        }   
    } else {
        header("Location: login.php");
    }
}