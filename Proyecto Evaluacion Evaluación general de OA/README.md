# Proyecto 4: Evaluación General OA – Plataforma de Análisis de Información Hospitalaria

## Descripción

Este proyecto integra los conocimientos adquiridos durante el curso en relación con la organización, procesamiento y análisis de datos. La aplicación simula el funcionamiento de un entorno hospitalario mediante la gestión de registros clínicos, permitiendo evaluar distintos métodos de almacenamiento y analizar el comportamiento de la información generada. Además, incorpora herramientas para medir el desempeño del sistema y representar visualmente los resultados obtenidos.

## Funcionalidades Desarrolladas

### Administración de Información Médica

El sistema genera y procesa registros relacionados con pacientes, consultas y especialidades médicas, facilitando la manipulación de grandes volúmenes de información.

### Evaluación de Métodos de Almacenamiento

Se analizan diferentes estructuras de archivos para determinar su eficiencia en tareas de lectura, escritura y recuperación de datos.

### Medición de Desempeño

La aplicación recopila métricas relacionadas con el tiempo de ejecución y el uso de recursos, permitiendo comparar el rendimiento de los procesos implementados.

### Generación de Reportes Visuales

Los resultados obtenidos son transformados en representaciones gráficas que facilitan la interpretación de tendencias, comportamientos y patrones presentes en los datos.

## Tecnologías Utilizadas

* **Python** para el desarrollo de la aplicación.
* **Pandas** para la organización y procesamiento de información.
* **Matplotlib** para la elaboración de gráficos estadísticos.
* **CSV** y **JSON** como formatos de almacenamiento de datos.
* **TXT** para el registro y seguimiento de actividades del sistema.

## Organización de Archivos

* **sistema_hospitalario.py**: Módulo principal encargado de la generación y procesamiento de los registros.
* **analisis_datos.py**: Componente dedicado a la evaluación estadística y obtención de indicadores.
* **pacientes.csv**: Archivo con información general de los pacientes.
* **expedientes.json**: Almacenamiento estructurado de datos clínicos.
* **reportes/**: Carpeta destinada a las gráficas y resultados generados.

## Procedimiento de Uso

1. Ejecutar el sistema principal para generar y cargar la información hospitalaria.
2. Procesar los registros mediante los módulos de análisis incorporados.
3. Comparar el comportamiento de los distintos formatos de almacenamiento.
4. Obtener métricas de rendimiento relacionadas con velocidad y eficiencia.
5. Visualizar los resultados a través de reportes gráficos generados automáticamente.

## Resultados Obtenidos

La aplicación permite:

* Analizar grandes volúmenes de información médica de forma eficiente.
* Comparar el desempeño de diferentes estructuras de almacenamiento.
* Detectar tendencias relacionadas con la demanda de servicios hospitalarios.
* Obtener estadísticas descriptivas para apoyar la toma de decisiones.
* Generar visualizaciones que facilitan la interpretación y comunicación de los resultados.
