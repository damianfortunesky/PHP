<!-- localhost/phpmyadmin  o http://localhost:80/phpmyadmin para ingresar, si tenes xamp, tenes que correr mysql -->

<?php

    $title ='Home';

    require_once 'includes/header.php'; 
    require_once 'db/connect_db.php' ; // PHP requiere el archivo 1 sola vez, si ya esta incluido no lo incluye 

    $results = $crud->getSpecialties();
?>



    <form method="post" action="success.php">

        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>

        <div class="mb-3">
            <label for="specialty" class="form-label">Area of Expertise</label>

            <select name="specialty" class="form-control" id="specialty">
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                <option value="<?php echo $r['specialty_id'] ?>" ><?php echo $r['name'] ?></option>
            <?php }?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

    

<?php require_once 'includes/footer.php' ?>