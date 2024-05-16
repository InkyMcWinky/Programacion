$(document).ready(function () {
    // Una vez que el documento esté listo, verifica el estado de la sesión
    $.ajax({
        type: 'GET',
        url: 'check_session.php',
        dataType: 'json',
        success: function (response) {
            // Verificar si la sesión está iniciada o no
            if (response.loggedIn === true) {
                // Actualizar el texto del botón con el nombre del usuario
                
                document.getElementById("logg").className = "oculto";
                /*var nombreUsuario = nombre_oculto.innerText;
                if (nombreUsuario !== "") {
                    $('#accountBtn h4').text(nombreUsuario);
                }*/
                

            } else {
                // Si no hay una sesión iniciada, mantener el texto del botón como "Log in"
                $('#accountBtn h4').text('Log in');
            }
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
});


$("#contenedor").load("inicio.php");

//----- Menu -----

$("#btnAbout").click(function () {
    $("#contenedor").load("about.php");
});

$("#btnContact").click(function () {
    $("#contenedor").load("support.php", "#contact");
});

function cargarLogin() {
    // Realizar una solicitud al servidor para cargar el formulario de inicio de sesión
    // Verificar si la sesión está iniciada
    $.ajax({
        url: 'check_session.php', // Ruta al script que verifica la sesión
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            // Si la sesión está iniciada, cargar la página de la cuenta
            if (response.loggedIn === true) {
                $("#contenedor").load("account.php");
            } else {
                // Si la sesión no está iniciada, cargar la página de inicio de sesión
                $("#contenedor").load("login.php");
            }
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
}




//$("#accountBtn").click(function cargarLogin() {
//    $("#contenedor").load("login.php");
//});

$("#shopBtn").click(function () {
    $("#contenedor").load("cart.php");
});

$(".sMenuBox").click(function () {
    // Obtener el texto dentro del elemento clickeado (que representa la categoría)
    var categoriaSeleccionada = $(this).text().trim();
    console.log(categoriaSeleccionada)

    // Cargar products.php con la categoría seleccionada como parámetro en la URL
    $("#contenedor").load("products.php?categoria=" + encodeURIComponent(categoriaSeleccionada));
});


$("#btnCarrito").click(function () {
    $("#contenedor").load("cart.php");
});



$("#btnCuenta").click(function () {
    // Verificar si la sesión está iniciada
    $.ajax({
        url: 'check_session.php', // Ruta al script que verifica la sesión
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            // Si la sesión está iniciada, cargar la página de la cuenta
            if (response.loggedIn === true) {
                $("#contenedor").load("account.php");
            } else {
                // Si la sesión no está iniciada, cargar la página de inicio de sesión
                $("#contenedor").load("login.php");
            }
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
});



// ----- Menu Lateral -----
function wMatch(x) {
    if (x.matches) {
        var dropdown = document.getElementsByClassName("menuBox");
        var i;


        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function () {
                var dropContent = this.nextElementSibling;

                if (dropContent.style.display === "block") {
                    dropContent.style.display = "none";
                } else {
                    dropContent.style.display = "block";
                }
            });
        }

    }
}

const mObj = window.matchMedia("(max-width: 950px)")


wMatch(mObj);

mObj.addListener(wMatch);


// ------ Footer -----
$("#btnAboutF").click(function () {
    $("#contenedor").load("about.php");
});

$("#btnContactF").click(function () {
    $("#contenedor").load("support.php", "#contact");
});

$("#btnSupport").click(function () {
    $("#contenedor").load("support.php");
});

$("#btnFAQ").click(function () {
    $("#contenedor").load("support.php", "#faq");
});

$("#btnAccount").click(function () {
    $("#contenedor").load("account.php");
});

$("#btnCreate").click(function () {
    $("#contenedor").load("signin.php");
});

$("#btnOrders").click(function () {
    $.ajax({
        url: 'check_session.php', // Ruta al script que verifica la sesión
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            // Si la sesión está iniciada, cargar la página de la cuenta
            if (response.loggedIn === true) {
                $("#contenedor").load("account.php");
            } else {
                // Si la sesión no está iniciada, cargar la página de inicio de sesión
                $("#contenedor").load("login.php");
            }
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
});

$("#btnCart").click(function () {
    $("#contenedor").load("cart.php");
});



function showPrivacyPolicy() {
    document.getElementById("privacy").style.display = "block";
    document.getElementById("policy-shadow").style.display = "block";
}

function showReturnRefund() {
    document.getElementById("return-refund").style.display = "block";
    document.getElementById("policy-shadow").style.display = "block";
}

function showShipping() {
    document.getElementById("shipping").style.display = "block";
    document.getElementById("policy-shadow").style.display = "block";
}

function showTerms() {
    document.getElementById("terms-conditions").style.display = "block";
    document.getElementById("policy-shadow").style.display = "block";
}

function hidePolicy() {
    const collection = document.getElementsByClassName("policy");
    for (let i = 0; i < collection.length; i++) {
        collection[i].style.display = "none";
    }

    document.getElementById("policy-shadow").style.display = "none";
}
