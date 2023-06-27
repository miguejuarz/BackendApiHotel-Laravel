<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About ApiHotel Laravel
API de Reservas de Habitaciones de Hotel
Esta API permite gestionar la reserva de habitaciones de un hotel, incluyendo la creación, 
actualización y eliminación de habitaciones.
Endpoints disponibles
• GET /rooms: Obtener todas las habitaciones.
• POST /rooms: Crear una nueva habitación.
• GET /rooms/{id}: Obtener los detalles de una habitación específica.
• PUT /rooms/{id}: Actualizar los detalles de una habitación específica.
• DELETE /rooms/{id}: Eliminar una habitación específica.
Datos de una habitación
Una habitación contiene la siguiente información:
• id: Identificador único de la habitación.
• hotel_id: ID del hotel al que pertenece la habitación.
• type_room: Tipo de habitación.
• night_price: Precio por noche de la habitación.
• capacity: Capacidad de la habitación.
• description_room: Descripción de la habitación.
• aviable: Disponibilidad de la habitación.
• photos: Fotos de la habitación.
Obtener todas las habitaciones
GET /rooms 
Este endpoint devuelve todas las habitaciones disponibles.
Respuesta exitosa
Código de estado: 200 OK
cssCopy code
[ { "id": 1, "hotel_id": 1, "type_room": "Suite", "night_price": 150.00, "capacity": "2 
personas", "description_room": "Habitación espaciosa con vista al mar.", "aviable": 
"Disponible", "photos": "https://example.com/room1.jpg" }, { "id": 2, "hotel_id": 1, 
"type_room": "Doble", "night_price": 100.00, "capacity": "2 personas", "description_room": 
"Habitación cómoda con dos camas individuales.", "aviable": "No disponible", "photos": 
"https://example.com/room2.jpg" }]
Crear una nueva habitación
POST /rooms 
Este endpoint permite crear una nueva habitación.
Parámetros de solicitud
• hotel_id: ID del hotel al que pertenece la habitación.
• type_room: Tipo de habitación.
• night_price: Precio por noche de la habitación.
• capacity: Capacidad de la habitación.
• description_room: Descripción de la habitación.
• aviable: Disponibilidad de la habitación.
• photos: Fotos de la habitación.
Respuesta exitosa
Código de estado: 201 Created
jsonCopy code
{ "id": 3, "hotel_id": 1, "type_room": "Individual", "night_price": 80.00, "capacity": "1 
persona", "description_room": "Habitación confortable para una persona.", "aviable":
"Disponible", "photos": "https://example.com/room3.jpg" }
Obtener los detalles de una habitación específica
GET /rooms/{id} 
Este endpoint devuelve los detalles de una habitación específica.
Parámetros de ruta
• id: ID de la habitación.
Respuesta exitosa
Código de estado: 200 OK
jsonCopy code
{ "id": 1, "hotel_id": 1, "type_room": "Suite", "night_price": 150.00, "capacity": "2 personas",
"description_room": "Habitación espaciosa con vista al mar.", "aviable": "Disponible",
"photos": "https://example.com/room1.jpg" }
Actualizar los detalles de una habitación específica
PUT /rooms/{id} 
Este endpoint permite actualizar los detalles de una habitación específica.
Parámetros de ruta
• id: ID de la habitación.
Parámetros de solicitud
Puedes proporcionar uno o varios de los siguientes parámetros para actualizar los 
detalles de la habitación:
• hotel_id: ID del hotel al que pertenece la habitación.
• type_room: Tipo de habitación.
• night_price: Precio por noche de la habitación.
• capacity: Capacidad de la habitación.
• description_room: Descripción de la habitación.
• aviable: Disponibilidad de la habitación.
• photos: Fotos de la habitación.
Respuesta exitosa
Código de estado: 200 OK
jsonCopy code
{ "id": 1, "hotel_id": 1, "type_room": "Suite", "night_price": 180.00, "capacity": "2 personas",
"description_room": "Habitación espaciosa con vista al mar y balcón privado.", "aviable":
"Disponible", "photos": "https://example.com/room1.jpg" }
Eliminar una habitación específica
DELETE /rooms/{id} 
Este endpoint permite eliminar una habitación específica.
Parámetros de ruta
• id: ID de la habitación.
Respuesta exitosa
Código de estado: 204 No Content
Endpoints disponibles
• GET /rooms: Obtener todas las habitaciones.
• POST /rooms: Crear una nueva habitación.
• GET /rooms/{id}: Obtener los detalles de una habitación específica.
• PUT /rooms/{id}: Actualizar los detalles de una habitación específica.
• DELETE /rooms/{id}: Eliminar una habitación específica.
• GET /clients: Obtener todos los clientes.
• POST /clients: Crear un nuevo cliente.
• GET /clients/{id}: Obtener los detalles de un cliente específico.
• PUT /clients/{id}: Actualizar los detalles de un cliente específico.
• DELETE /clients/{id}: Eliminar un cliente específico.
• GET /reservations: Obtener todas las reservaciones.
• POST /reservations: Crear una nueva reservación.
• GET /reservations/{id}: Obtener los detalles de una reservación específica.
• PUT /reservations/{id}: Actualizar los detalles de una reservación específica.
• DELETE /reservations/{id}: Eliminar una reservación específica.
• GET /payments: Obtener todos los pagos.
• POST /payments: Crear un nuevo pago.
• GET /payments/{id}: Obtener los detalles de un pago específico.
• PUT /payments/{id}: Actualizar los detalles de un pago específico.
• DELETE /payments/{id}: Eliminar un pago específico.
• GET /invoices: Obtener todas las facturas.
• POST /invoices: Crear una nueva factura.
• GET /invoices/{id}: Obtener los detalles de una factura específica.
• PUT /invoices/{id}: Actualizar los detalles de una factura específica.
• DELETE /invoices/{id}: Eliminar una factura específica.
Habitaciones
Una habitación contiene la siguiente información:
• id: Identificador único de la habitación.
• hotel_id: ID del hotel al que pertenece la habitación.
• type_room: Tipo de habitación.
• night_price: Precio por noche de la habitación.
• capacity: Capacidad de la habitación.
• description_room: Descripción de la habitación.
• aviable: Disponibilidad de la habitación.
• photos: Fotos de la habitación.
Clientes
Un cliente contiene la siguiente información:
• id: Identificador único del cliente.
• nombre: Nombre del cliente.
• apellido: Apellido del cliente.
• email: Correo electrónico del cliente.
• telefono: Número de teléfono del cliente.
Reservaciones
Una reservación contiene la siguiente información:
• id: Identificador único de la reservación.
• habitacion_id: ID de la habitación reservada.
• cliente_id: ID del cliente que realizó la reservación.
• fecha_inicio: Fecha de inicio de la reservación.
• fecha_fin: Fecha de fin de la reservación.
• precio_total: Precio total de la reservación.
• estado: Estado actual de la reservación.
Pagos
Un pago contiene la siguiente información:
• id: Identificador único del pago.
• reservacion_id: ID de la reservación asociada al pago.
• metodo_pago: Método de pago utilizado.
• monto: Monto pagado.
• fecha_pago: Fecha en que se realizó el pago.
Facturas
Una factura contiene la siguiente información:
• id: Identificador único de la factura.
• pago_id: ID del pago asociado a la factura.
• cliente_id: ID del cliente al que se emite la factura.
• fecha_emision: Fecha de emisión de la factura.
• monto_total: Monto total de la factura

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
#   a p i h o t e l - l a r a v e l 
 
 
