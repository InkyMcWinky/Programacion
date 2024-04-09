from fastapi import FastAPI, APIRouter

app = FastAPI()

router_user = APIRouter()
router_api = APIRouter()

import mysql.connector

# Establecer la conexión con la base de datos
conexion = mysql.connector.connect(
    host="localhost",
    user="root",
    password="root",
    database="proyecto_wps"
)

@app.get("/")
def obtener_libros():
    if conexion.is_connected():
        print("Conexión exitosa a la base de datos")

    # Ejecutar consultas SQL
    cursor = conexion.cursor()

    # Ejemplo de consulta
    consulta = "SELECT Nombre FROM usuarios"
    cursor.execute(consulta)

    # Obtener resultados
    resultados = cursor.fetchall()

    return resultados


@app.get("/libros")
def obtener_libro(id):
    return [
        {"hola" : "Hola mundo"},
        {"mundo" : "Hola mundo"},
        {"jennie" : "Hola mundo"}
        ]

@app.post("/libros")
def postear_libro(libro):
    return libro


"""
@app.get("/libros/{id}")
def obtener_prueba(libros, id):
    return id, libros
        return [
        {"hola" : "Hola mundo"},
        {"mundo" : "Hola mundo"},
        {"jennie" : "Hola mundo"}
        ]
"""
