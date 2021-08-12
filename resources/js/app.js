require('./bootstrap');

window.seleccionarIdioma = lang => {
    let text;
    switch(lang) {
        case 'es':
            text = "¿Recordar selección?";
            break;
        case 'en': 
            text = "Remember selecction?";
            break;

    }
    if(confirm(text))
    {
        window.localStorage.setItem('lang', lang);
        window.location = lang;
    }else{
        
    }
};

window.mostrarMasProyectos = () => {
    $(".hidden-item").css('display','block');
    $("#seccion_mostrar_mas").css('display','none');
}

window.formularioContacto = () => { 
    $("#modal_contacto").modal();
};