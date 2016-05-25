/**
* @fileoverview funcionalidad del menu
*
* @author Alfredo Zum
* @version 0.1
* @copyright OrvelSoft 2017
*/

/********************************/
/************* Index ************/
/********************************/

$('#btnMenu').on('click',function(){ showMenu() });

/********************************/
/*********** Funciones **********/
/********************************/

/**
* @todo muestra u oculta el menu desplegable
**/
function showMenu(){
	$('nav ul.nav-content').toggle();
}

