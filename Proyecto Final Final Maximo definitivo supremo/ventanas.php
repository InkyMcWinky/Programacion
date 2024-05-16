<?php
include 'conecta.php';
?>

<div id="window-sh" onclick="hideWindow">
    <!--- Ventana Dirección --->
    <section id="change-address" class="window">
        <div class="close" onclick="hideAddress()"></div>
        <h1>Update Information</h1>
        <span>New Name: </span>
        <input type="text" id="namw" name="name" placeholder="Name" required>
        
        <span>New Last Name: </span>
        <input type="text" id="namw" name="name" placeholder="Last Name" required>
        <br><br>
        <button class="update" id="">Update
        </button>
        <button class="cancel" id="">Cancel
        </button>
    </section>
    <!--- Ventana Nombre --->
    <section id="change-name" class="window">
        <div class="close" onclick="hideAddress()"></div>
        <h1>Update Information</h1>
        <span>New Address: </span>
        <input type="text" id="adress" name="adress" placeholder="Address" required>
        <br><br>
        <button class="update" id="">Update
        </button>
        <button class="cancel" id="">Cancel
        </button>
    </section>
    
    <!--- Ventana Dirección --->
    <section id="change-address" class="window">
        <div class="close" onclick="hideAddress()"></div>
        <h1>Update Information</h1>
        <span>New Address: </span>
        <input type="text" id="adress" name="adress" placeholder="Address" required>
        <br><br>
        <button class="update" id="">Update
        </button>
        <button class="cancel" id="">Cancel
        </button>
    </section>
    
    <!--- Ventana Teléfono --->
    <section id="change-number" class="window">
        <div class="close" onclick="hideAddress()"></div>
        <h1>Update Information</h1>
        <span>New Phone: </span>
        <input type="number" id="phnumber" name="Phone" placeholder="Phone Number" required>
        <br><br>
        <button class="update" id="">Update
        </button>
        <button class="cancel" id="">Cancel
        </button>
    </section>
    
    <!--- Ventana Correo --->
    <section id="change-email" class="window">
        <div class="close" onclick="hideAddress()"></div>
        <h1>Update Information</h1>
        <span>New E-mail: </span>
        <input type="email" id="mail" name="emailn" placeholder="Email" required>
        <br><br>
        <button class="update" id="">Update
        </button>
        <button class="cancel" id="">Cancel
        </button>
    </section>
    
     <!--- Ventana Passwrd --->
    <section id="change-email" class="window">
        <div class="close" onclick="hideAddress()"></div>
        <h1>Update Information</h1>
        <span>New Password: </span>
        <input type="password" id="password" name="pass" placeholder="**********" required>
        
        <span>Confirm Password: </span>
        <input type="password" id="password" name="pass" placeholder="**********" required>
        <br><br>
        <button class="update" id="">Update
        </button>
        <button class="cancel" id="">Cancel
        </button>
    </section>

</div>
