<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access to application</title>
</head>

<body>

    <section class="connect">
        <div class="sign">
            <form action="" method="post" class="formsign">
                <label for="name">Nom et Prénom(s)</label>
                <input type="text" placeholder="Prénom" name="Fname" >
                <input type="text" placeholder="Nom" name="Lname" >

                <label for="gender">Genre</label>
                <label for="male">Homme/Garçon</label>
                <input type="radio" name="male" id="male">
                <label for="female">Femme/Fille</label>
                <input type="radio" name="female" id="female">

                <label for="birth">Date de Naissance :</label>
                <input type="date" name="birth" id="birth">

                <input type="tel" placeholder="Numéro" name="number" >

                <input type="text" placeholder="Adresse" name="" >

                <button type="button">Login</button>

                <p>Vous avez déjà un compte <a href="../public/login.php"> connectez vous?</a></p>

            </form>

            <img src="../img/login_fingerprint_login.svg" alt="">

        </div>
    </section>

</body>

</html>