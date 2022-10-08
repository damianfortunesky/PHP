<?php
    class crud {

        //Variable privada 
        private $db; 

        //Funcion con constructor para inicializar la variable privada y hacer la conexion a la base de datos
        function __construct($conn){
            $this->db = $conn; // Esto es una abstraccion del Objeto utilizado para la conexcion a la db en el archivo connect_db --> ($pdo)
        }

        public function insert($fname, $lname, $dob, $email, $contact, $specialty){
            
            try {
                // Define sentencia sql para ser ejecutada
                $sql = "INSERT INTO attendee (firstname, lastname, dateofbirth, emailaddress, contactnumber, specialty_id) VALUES (:fname, :lname, :dob, :email, :contact, :specialty)"; 

                // Prepara la sentencia sql para la ejecucion 
                $stmt = $this->db->prepare($sql);


                // Vincular todos los marcadores de posición a los valores reales 
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':specialty',$specialty);

                // Ejecuta sentencias
                $stmt -> execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getAttendees(){
            $sql = "SELECT * FROM `attendee` a inner join specialties s on a.specialty_id = s.specialty_id";
            $results= $this->db->query($sql);
            return $results;
        }

        public function getSpecialties(){
            $sql = "SELECT * FROM `specialties`;";
            $results= $this->db->query($sql);
            return $results;
        }
    }
?>