<?php include 'layout/header.php'; ?>

<div class="container">
    <div class="row">
        <h1>Register</h1>
    </div>
    <div class="row">
        <form action="new_user.php" method="post">
        
            <div class="form-group">
                <label for="first_name">Etunimi</label>
                <input class="form-control" type="text" placeholder="Etunimi" name="firstname">
            </div>

            <div class="form-group">
                <label for="lastname">Sukunimi</label>
                <input class="form-control" type="text" placeholder="Sukunimi" name="lastname">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="text" placeholder="Email" name="email">
            </div>

            <div class="form-group">
                <label for="passwd">Salasana</label>
                <input class="form-control" type="password" placeholder="Salasana" name="passwd">
            </div>

            <div class="form-group">
                <label for="passwd2">Salasana uudelleen</label>
                <input class="form-control" type="password" placeholder="Salasana" name="passwd2">
            </div>

            <div class="form-group">
                <label for="password_hint">Salasanavihje</label>
                <input class="form-control" type="text" placeholder="Salasanavihje" name="password_hint">
            </div>

            <input type="submit" class="btn btn-primary" value="Rekisteröidy">

        </form>
    </div>

</div>

<?php include 'layout/footer.php'; ?>