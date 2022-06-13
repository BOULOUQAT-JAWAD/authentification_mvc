<?php
// Check if there is a login.
if(isset($_SESSION['Responsable_filieres'])) {
    include_once ROOT.'controllers/Responsable_filieres.php';
    header('location: ../Responsable_filieres');

}
if(isset($_SESSION['Eleves'])) {
    include_once ROOT.'controllers/Eleves.php';
    header('location: ../Eleves');
}
if(isset($_SESSION['Admins'])) {
    header('location: Admins');
}else{
?>
<form
        id="admin_form"
        class="login_form"
        action="signin/"
        method="POST"
>
    <div class="center">
        <p> Connectez-vous à votre compte Admin </p>
        <input
                type="text"
                name="login"
                placeholder="CIN ou Utilisateur"
                required
        /><br/>
        <input
                type="password"
                name="password"
                placeholder="Mot de passe"
                autocomplete="on"
                required
        /><br />
        <button type="submit" name="controller" value="Admins">Login</button>
    </div>
</form>
</div>
</body>

</html>
<?php } ?>