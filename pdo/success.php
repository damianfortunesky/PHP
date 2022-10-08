<?php
    require_once 'includes/header.php';
    require_once 'db/connect_db.php';

    /*  Chequear que lleguen las variables, para eso usamos:
    *   La función isset() nos permite evaluar si una variable está definida o no.
    *
    *   Si quieres evaluar si una variable está vacía, revisa la función empty()
    *
    *   name=submit del form-butto
    */

    if(isset($_POST['submit'])){

        // Extraigo los valores enviados mediante POST y los almaceno
        $fname= $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $dbo = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $specialty =  $_POST['specialty'];

        // Si la clase Crud retorna "true"
        $isSuccess = $crud-> insert($fname, $lastname, $dbo, $email, $contact, $specialty);

        if($isSuccess){
            echo '<h1 class="text-center text-success"> You Have Been Registered! </h1>';
        } else {
            echo '<h1 class="text-center text-success"> There was an error in processing </h1>';
        }
    }
?>



<!--  <div class="card" style="width: 18rem;">

    <div class="card-body">
        <h5 class="card-title">
            <?php //echo $_POST['firstname'].' '.$_POST['lastname'] ?>
        </h5>

        <h6 class="card-subtitle mb-2 text-muted">
            <?php //echo $_POST['specialt'].' '.$_POST['lastname'] ?>
        </h6>

        <p class="card-text">
            Date of Birth: <?php //echo $_POST['dbo']?>
        </p>

        <p class="card-text">
            Email Adress: <?php //echo $_POST['email']?>
        </p>

        <p class="card-text">
            Contact Number: <?php //echo $_POST['phone']?>
        </p>
    </div>

</div> -->

