{include file='templates/header.tpl'}
<div class="container">
    <h2> Titulo : {$wine->NameWine}</h2>
        <h2> Estilo : {$wine->Style}</h2>
        <h2> Bodega : {$wine->NameStore}</h2>
        <h2> Descripción: {$descripcion} </h2>
        
    <a href="wines" class="btn btn-success"> Volver a lista de vinos</a>
</div>



<form class="mb-3" action="" method="POST" id="submit">
    <h2>Deje aqui su comentario del vino</h2>
    <label class="form-control"> Contenido <input type="textarea" name="content" id="content" required></label>
    <label class="form-control"> Clasificaion  <select name="qualification" id="qualification" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>     
    </select></label>
    <input type="hidden" name="id_user" id="id_user" value="{$user->id_user}" required>
    <input type="hidden" name="id_Wine" id="id_Wine" value="{$wine->id_Wine}" required>
    <button class="form-control" type="submit" class="btn btn-primary" id="enviar">Crear</button>   
</form>


<h2>Lista de comentarios</h2>

<button class="comentarios" data-id="{$wine->id_Wine}" data-rol="{$user->admin}">mostrar comentarios</button>

<table id="table-dark">
            <thead>
                <tr class="table-dark">
                    <th>Usuario</th>
                    <th>Contenido</th>
                    <th>Valoracion</th> 
                    <th>Borrar</th>  
                </tr>
            </thead>
            <tbody class="table-dark" id="list-comments">
            </tbody>
</table>




<script src="./js/app.js"></script>

{include file='templates/footer.tpl'}