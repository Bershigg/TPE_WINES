"use strict"

const API_URL = "http://localhost/TPE_WINES/api/comment";



async function getComments() {

  
    //fetch para traer todos los comentarios
    try{
        let response = await fetch(API_URL);
        let comments = await response.json();
        
        let admin = this.dataset.rol;
        let id = this.dataset.id;
        
        
        render(comments, id, admin);
    }
    catch (e){
        console.log(e);
    }
}

async function createComment(e) {
    e.preventDefault();

    let content = document.querySelector("#content").value
    let qualification = document.querySelector("#qualification").value
    let id_user = document.querySelector("#id_user").value
    let id_Wine = document.querySelector("#id_Wine").value

    let comments = {
        "content": content,
        "qualification": qualification,
        "id_user": id_user,
        "id_Wine" : id_Wine
    };

    try {
        let res = await fetch (API_URL, {
        "method": "POST",
        "headers": {"Content-type":"application/json"},
        "body": JSON.stringify(comments)
        });

        } catch (error) {
        console.log(error);
        }
            
    getComments();
    
    document.getElementById("submit").reset();
}



function render(comments, id, admin) {

    console.log(admin);
    let lista = document.querySelector("#list-comments");
    lista.innerHTML = "";
    if(admin == "1"){
        for (let comment of comments) {
            if (comment.id_Wine == id){
                let html = `<tr>
                        <td> ${comment.User}</td>
                        <td> ${comment.content}</td>
                        <td> ${comment.qualification}</td>
                        <td> <button class="eliminar" data-id="${comment.id_Comment}" > BORRAR </button> </td>
                        </tr>`
    
            lista.innerHTML += html;
            }
        }
    }
    else{
        for (let comment of comments) {
            if (comment.id_Wine == id){
                let html = `<tr>
                        <td> ${comment.User}</td>
                        <td> ${comment.content}</td>
                        <td> ${comment.qualification}</td>
                        </tr>`
            lista.innerHTML += html;
             }
        }
    }  
    
    document.querySelectorAll(".eliminar").forEach((button) => {
    button.addEventListener("click", deleteComment);

    });
}


async function deleteComment(e){
    e.preventDefault();
    
    let id = this.dataset.id;
    
    try {
       let res = await fetch (API_URL+"/"+id, {
        "method" : "DELETE"
    });
    if(res.status === 200){
        document.querySelector("#respuesta").innerHTML = "borrado!"
    }
      
    } catch (error) {
        //document.querySelector("#respuesta").innerHTML = "Error de conexion!"
    }
    getComments();
   
}



document.querySelector("#enviar").addEventListener("click", createComment);
document.querySelector(".comentarios").addEventListener("click", getComments);