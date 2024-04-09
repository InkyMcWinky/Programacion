import mysql.connector

# Establecer la conexión con la base de datos
conexion = mysql.connector.connect(
    host="localhost",
    user="root",
    password="root",
    database="proyecto_wps"
)

if conexion.is_connected():
    print("Conexión exitosa a la base de datos")

    # Ejecutar consultas SQL
    cursor = conexion.cursor()

    # Ejemplo de consulta
    consulta = "SELECT * FROM usuarios"
    cursor.execute(consulta)

    # Obtener resultados
    resultados = cursor.fetchall()

    # Mostrar resultados
    for fila in resultados:
        print(type(resultados))

    # Cerrar el cursor y la conexión
    cursor.close()
    conexion.close()
else:
    print("Error al conectar a la base de datos")