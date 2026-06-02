import json
from datetime import datetime

def cargar_usuarios():
    try:
        with open("usuarios.json", "r") as archivo:
            datos = json.load(archivo)
            return datos["usuarios"]
    except json.JSONDecodeError:
        print("ERROR: El archivo JSON está mal formado")
        return []
    except FileNotFoundError:
        print("ERROR: Archivo usuarios.json no encontrado")
        return []

def registrar_log(mensaje):
    with open("auditoria.txt", "a") as log:
        fecha = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        log.write(f"{fecha} - {mensaje}\n")

def buscar_usuario(id_ingresado, usuarios):
    for usuario in usuarios:
        if usuario["id_tarjeta"] == id_ingresado:
            return usuario
    return None

def main():
    usuarios = cargar_usuarios()
    
    id_ingresado = input("Ingrese ID de tarjeta: ")
    
    usuario = buscar_usuario(id_ingresado, usuarios)
    
    if usuario:
        mensaje = f"ACCESO PERMITIDO - {usuario['nombre_empleado']}"
        print("CERRADURA ABIERTA por 5 segundos")
    else:
        mensaje = "ALERTA - ACCESO DENEGADO"
        print("ALARMA ACTIVADA - Intento de acceso no autorizado")
    
    registrar_log(mensaje)

if __name__ == "__main__":
    main()

    