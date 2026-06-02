# Proyecto 2: ABPj – Plataforma de Supervisión y Validación de Accesos

## Descripción

ABPj es una solución informática orientada al control y monitoreo de accesos dentro de una organización. El proyecto combina herramientas desarrolladas en Python y PHP para verificar la identidad de los usuarios, administrar permisos de ingreso y mantener un historial detallado de las actividades registradas. La información es gestionada mediante archivos JSON y registros de eventos almacenados localmente.

## Funcionalidades Implementadas

### Verificación de Identidad

El sistema procesa identificadores asignados al personal y determina si cuentan con autorización para ingresar a determinadas áreas o servicios.

### Administración de Personal

La información de los usuarios se encuentra organizada en una estructura JSON que almacena datos relevantes como identificadores, áreas de trabajo y niveles de autorización.

### Historial de Eventos

Cada intento de acceso genera un registro automático que incluye la fecha, hora y resultado de la validación, permitiendo llevar un control completo de las actividades realizadas.

### Panel de Seguimiento

Se dispone de una interfaz web que presenta los movimientos registrados de forma clara y organizada, facilitando la supervisión de los accesos autorizados y rechazados.

## Tecnologías Empleadas

* **Python** para el procesamiento y validación de datos.
* **PHP** para la generación y visualización de la interfaz web.
* **JSON** para el almacenamiento estructurado de la información.
* **CSS3** para el diseño y presentación de los elementos visuales.
* **Archivos de texto** para el almacenamiento de registros históricos.

## Organización de Archivos

* **acceso.py**: Programa encargado de procesar las solicitudes de ingreso.
* **personal.json**: Archivo que contiene la información de los usuarios registrados.
* **eventos.txt**: Bitácora donde se almacenan los movimientos detectados por el sistema.
* **panel.php**: Interfaz web utilizada para consultar los registros generados.

## Procedimiento de Uso

1. Ejecutar la aplicación principal desarrollada en Python.
2. Introducir el identificador correspondiente al usuario que desea acceder.
3. El sistema verificará la información almacenada y determinará si el acceso es válido.
4. El resultado será registrado automáticamente en la bitácora de eventos.
5. Abrir la interfaz web para consultar el historial actualizado de actividades y movimientos registrados.
