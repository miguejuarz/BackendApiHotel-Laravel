<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
<h1>API de Reservas de Habitaciones de Hotel</h1>

<p>Esta API permite gestionar la reserva de habitaciones de un hotel, incluyendo la creación, actualización y eliminación de habitaciones.</p>

<h2>Endpoints disponibles</h2>
<ul>
  <li>GET /rooms: Obtener todas las habitaciones.</li>
  <li>POST /rooms: Crear una nueva habitación.</li>
  <li>GET /rooms/{id}: Obtener los detalles de una habitación específica.</li>
  <li>PUT /rooms/{id}: Actualizar los detalles de una habitación específica.</li>
  <li>DELETE /rooms/{id}: Eliminar una habitación específica.</li>
</ul>

<h2>Datos de una habitación</h2>
<p>Una habitación contiene la siguiente información:</p>
<ul>
  <li>id: Identificador único de la habitación.</li>
  <li>hotel_id: ID del hotel al que pertenece la habitación.</li>
  <li>type_room: Tipo de habitación.</li>
  <li>night_price: Precio por noche de la habitación.</li>
  <li>capacity: Capacidad de la habitación.</li>
  <li>description_room: Descripción de la habitación.</li>
  <li>aviable: Disponibilidad de la habitación.</li>
  <li>photos: Fotos de la habitación.</li>
</ul>

<h3>Obtener todas las habitaciones</h3>
<p>GET /rooms</p>
<p>Este endpoint devuelve todas las habitaciones disponibles.</p>

<h4>Respuesta exitosa</h4>
<p>Código de estado: 200 OK</p>
<pre><code>[ 
  { 
    "id": 1, 
    "hotel_id": 1, 
    "type_room": "Suite", 
    "night_price": 150.00, 
    "capacity": "2 personas", 
    "description_room": "Habitación espaciosa con vista al mar.", 
    "aviable": "Disponible", 
    "photos": "https://example.com/room1.jpg" 
  }, 
  { 
    "id": 2, 
    "hotel_id": 1, 
    "type_room": "Doble", 
    "night_price": 100.00, 
    "capacity": "2 personas", 
    "description_room": "Habitación cómoda con dos camas individuales.", 
    "aviable": "No disponible", 
    "photos": "https://example.com/room2.jpg" 
  }
]</code></pre>

<h3>Crear una nueva habitación</h3>
<p>POST /rooms</p>
<p>Este endpoint permite crear una nueva habitación.</p>

<h4>Parámetros de solicitud</h4>
<ul>
  <li>hotel_id: ID del hotel al que pertenece la habitación.</li>
  <li>type_room: Tipo de habitación.</li>
  <li>night_price: Precio por noche de la habitación.</li>
  <li>capacity: Capacidad de la habitación.</li>
  <li>description_room: Descripción de la habitación.</li>
  <li>aviable: Disponibilidad de la habitación.</li>
  <li>photos: Fotos de la habitación.</li>
</ul>

<h4>Respuesta exitosa</h4>
<p>Código de estado: 201 Created</p>
<pre><code>{ 
  "id": 3, 
  "hotel_id": 1, 
  "type_room": "Individual", 
  "night_price": 80.00, 
  "capacity": "1 persona", 
  "description_room": "Habitación confortable para una persona.", 
  "aviable": "Disponible", 
  "photos": "https://example.com/room3.jpg" 
}</code></pre>

<h3>Obtener los detalles de una habitación específica</h3>
<p>GET /rooms/{id}</p>
<p>Este endpoint devuelve los detalles de una habitación específica.</p>

<h4>Parámetros de ruta</h4>
<ul>
  <li>id: ID de la habitación.</li>
</ul>

<h4>Respuesta exitosa</h4>
<p>Código de estado: 200 OK</p>
<pre><code>{ 
  "id": 1, 
  "hotel_id": 1, 
  "type_room": "Suite", 
  "night_price": 150.00, 
  "capacity": "2 personas", 
  "description_room": "Habitación espaciosa con vista al mar.", 
  "aviable": "Disponible", 
  "photos": "https://example.com/room1.jpg" 
}</code></pre>

<h3>Actualizar los detalles de una habitación específica</h3>
<p>PUT /rooms/{id}</p>
<p>Este endpoint permite actualizar los detalles de una habitación específica.</p>

<h4>Parámetros de ruta</h4>
<ul>
  <li>id: ID de la habitación.</li>
</ul>

<h4>Parámetros de solicitud</h4>
<p>Puedes proporcionar uno o varios de los siguientes parámetros para actualizar los detalles de la habitación:</p>
<ul>
  <li>hotel_id: ID del hotel al que pertenece la habitación.</li>
  <li>type_room: Tipo de habitación.</li>
  <li>night_price: Precio por noche de la habitación.</li>
  <li>capacity: Capacidad de la habitación.</li>
  <li>description_room: Descripción de la habitación.</li>
  <li>aviable: Disponibilidad de la habitación.</li>
  <li>photos: Fotos de la habitación.</li>
</ul>

<h4>Respuesta exitosa</h4>
<p>Código de estado: 200 OK</p>
<pre><code>{ 
  "id": 1, 
  "hotel_id": 1, 
  "type_room": "Suite", 
  "night_price": 180.00, 
  "capacity": "2 personas", 
  "description_room": "Habitación espaciosa con vista al mar y balcón privado.", 
  "aviable": "Disponible", 
  "photos": "https://example.com/room1.jpg" 
}</code></pre>

<h3>Eliminar una habitación específica</h3>
<p>DELETE /rooms/{id}</p>
<p>Este endpoint permite eliminar una habitación específica.</p>

<h4>Parámetros de ruta</h4>
<ul>
  <li>id: ID de la habitación.</li>
</ul>

<h4>Respuesta exitosa</h4>
<p>Código de estado: 204 No Content</p>

<h2>Endpoints disponibles</h2>
<ul>
  <li>GET /rooms: Obtener todas las habitaciones.</li>
  <li>POST /rooms: Crear una nueva habitación.</li>
  <li>GET /rooms/{id}: Obtener los detalles de una habitación específica.</li>
  <li>PUT /rooms/{id}: Actualizar los detalles de una habitación específica.</li>
  <li>DELETE /rooms/{id}: Eliminar una habitación específica.</li>
  <li>GET /clients: Obtener todos los clientes.</li>
  <li>POST /clients: Crear un nuevo cliente.</li>
  <li>GET /clients/{id}: Obtener los detalles de un cliente específico.</li>
  <li>PUT /clients/{id}: Actualizar los detalles de un cliente específico.</li>
  <li>DELETE /clients/{id}: Eliminar un cliente específico.</li>
  <li>GET /reservations: Obtener todas las reservaciones.</li>
  <li>POST /reservations: Crear una nueva reservación.</li>
  <li>GET /reservations/{id}: Obtener los detalles de una reservación específica.</li>
  <li>PUT /reservations/{id}: Actualizar los detalles de una reservación específica.</li>
  <li>DELETE /reservations/{id}: Eliminar una reservación específica.</li>
  <li>GET /payments: Obtener todos los pagos.</li>
  <li>POST /payments: Crear un nuevo pago.</li>
  <li>GET /payments/{id}: Obtener los detalles de un pago específico.</li>
  <li>PUT /payments/{id}: Actualizar los detalles de un pago específico.</li>
  <li>DELETE /payments/{id}: Eliminar un pago específico.</li>
  <li>GET /invoices: Obtener todas las facturas.</li>
  <li>POST /invoices: Crear una nueva factura.</li>
  <li>GET /invoices/{id}: Obtener los detalles de una factura específica.</li>
  <li>PUT /invoices/{id}: Actualizar los detalles de una factura específica.</li>
  <li>DELETE /invoices/{id}: Eliminar una factura específica.</li>
</ul>

<h2>Habitaciones</h2>
<p>Una habitación contiene la siguiente información:</p>
<ul>
  <li>id: Identificador único de la habitación.</li>
  <li>hotel_id: ID del hotel al que pertenece la habitación.</li>
  <li>type_room: Tipo de habitación.</li>
  <li>night_price: Precio por noche de la habitación.</li>
  <li>capacity: Capacidad de la habitación.</li>
  <li>description_room: Descripción de la habitación.</li>
  <li>aviable: Disponibilidad de la habitación.</li>
  <li>photos: Fotos de la habitación.</li>
</ul>

<h2>Clientes</h2>
<p>Un cliente contiene la siguiente información:</p>
<ul>
  <li>id: Identificador único del cliente.</li>
  <li>nombre: Nombre del cliente.</li>
  <li>apellido: Apellido del cliente.</li>
  <li>email: Correo electrónico del cliente.</li>
  <li>telefono: Número de teléfono del cliente.</li>
</ul>

<h2>Reservaciones</h2>
<p>Una reservación contiene la siguiente información:</p>
<ul>
  <li>id: Identificador único de la reservación.</li>
  <li>cliente_id: ID del cliente que realiza la reservación.</li>
  <li>habitacion_id: ID de la habitación reservada.</li>
  <li>fecha_inicio: Fecha de inicio de la reservación.</li>
  <li>fecha_fin: Fecha de fin de la reservación.</li>
  <li>precio_total: Precio total de la reservación.</li>
  <li>estado: Estado de la reservación (confirmada, pendiente, cancelada, etc.).</li>
</ul>

<h2>Pagos</h2>
<p>Un pago contiene la siguiente información:</p>
<ul>
  <li>id: Identificador único del pago.</li>
  <li>cliente_id: ID del cliente que realiza el pago.</li>
  <li>reservacion_id: ID de la reservación asociada al pago.</li>
  <li>monto: Monto del pago.</li>
  <li>fecha: Fecha del pago.</li>
  <li>metodo: Método de pago (tarjeta de crédito, efectivo, transferencia, etc.).</li>
  <li>estado: Estado del pago (pendiente, completado, cancelado, etc.).</li>
</ul>

<h2>Facturas</h2>
<p>Una factura contiene la siguiente información:</p>
<ul>
  <li>id: Identificador único de la factura.</li>
  <li>cliente_id: ID del cliente asociado a la factura.</li>
  <li>reservacion_id: ID de la reservación asociada a la factura.</li>
  <li>monto: Monto total de la factura.</li>
  <li>fecha: Fecha de emisión de la factura.</li>
  <li>estado: Estado de la factura (pendiente, pagada, cancelada, etc.).</li>
</ul>

<p>Esta API te permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) en cada una de las entidades mencionadas.</p>

<p>Espero que esta información te sea útil para tu proyecto. Si tienes alguna otra pregunta, no dudes en preguntar.</p>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
#   a p i h o t e l - l a r a v e l 
 
 
