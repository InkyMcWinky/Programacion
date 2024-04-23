$("#contenedor").load("inicio.php");

//----- Menu -----

$("#btnAbout").click(function () {
    $("#contenedor").load("about.php");
});

$("#btnContact").click(function () {
    $("#contenedor").load("support.php", "#contact");
});

$("#accountBtn").click(function () {
    $("#contenedor").load("login.php");
});

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
    $("#contenedor").load("login.php");
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
    $("#contenedor").load("login.php");
});

$("#btnOrders").click(function () {
    $("#contenedor").load("account.php", "#orders");
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
