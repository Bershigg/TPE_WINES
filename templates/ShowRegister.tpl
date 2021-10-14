{include file='templates/header.tpl'}

<div>
    <h2>Registrarse</h2>    
    <form action="verifyregister" method="POST">
        <input type="text" name="name" id="name" placeholder="Nombre de Usuario" required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="submit" class="btn btn-primary" value="Register">
    </form>
</div>

{include file='templates/footer.tpl'}