let selected = 'SIS256'
let numero = 0

let asignuturas = document.querySelectorAll('.asignatura')
asignuturas.forEach(asignatura => {
    asignatura.addEventListener('click', () => {
        selected = asignatura.innerHTML
        document.querySelector('.selected').classList.remove('selected')
        asignatura.classList.add('selected')
        palabras = titulo.innerHTML.split(' ')
        if(palabras.length > 1){
            switch (palabras[0]) {
                case 'Lista':
                    obtenerTabla();
                    break;
                case 'Horario':
                    pregunta3();
                    break;
                case 'Calificaciones':
                    pregunta4();
                    break;
            }
        }
        
    })
})


function pregunta2(){
    titulo.innerHTML = `Lista`
    numero = 0
    contenido.innerHTML = `<div class="num_form">
        <div>Nro Cuadros</div>
        <input type="number" id="numero">
        <button onclick="obtenerTabla()">Obtener</button>
    </div>`
}

function obtenerTabla(){
    titulo.innerHTML = `Lista ${selected}`
    if(numero == 0){
        numero = document.getElementById('numero').value
    }
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `tabla.php?numero=${numero}&materia=${selected}`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function pregunta2(){
    titulo.innerHTML = `Calificaciones ${selected}`
    fetch(`lista.php?materia=${selected}`)
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
}
function pregunta3(){
    titulo.innerHTML = `Horario ${selected}`
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `horarios.php?materia=${selected}`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function pregunta4(){
    titulo.innerHTML = `Calificaciones ${selected}`
    fetch(`calificaciones.php?materia=${selected}`)
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
}


function subirCalificacion(element){
    let data = new FormData()
    console.log(element.id)
    data.append('id', element.id)
    data.append('calificacion', element.value)
    var ajax = new XMLHttpRequest()
    ajax.open("POST", `registrarcalificacion.php`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){

        }
    }
    ajax.send(data);
}

function pregunta5(){
    titulo.innerHTML = `Informes`
    fetch(`formularioinforme.html`)
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
    registrar.addEventListener('click', (e) => {
        e.preventDefault()
    })
}


function registrarInformes(){
    let form = document.getElementById('form_informe')
    let data = new FormData(form)
    fetch(`guardarinformes.php`, {method:'POST', body:data})
    .then(response => response.text())
    .then(data => {});
}

