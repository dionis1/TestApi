<h1> ApiTest </h1>


<ol>
   <li> Change .env.example to ".env" and edit database connetion</li>
   <li> composer install </li>
   <li> php artisan migrate </li>
   <li> php artisan db:seed (to add Faker Product)</li>
    </li>
    <li> An endpoint to respond all products in JSON structure.({get} http://127.0.0.1:8000/api/products)</li>
	<li>Endpoint to send data as product data as JSON that creates a new product in DB and
	returns that product as JSON.({post} http://127.0.0.1:8000/api/products)</li>
	<li>An endpoint to look up for a product by ID and return that product as JSON.({get} http://127.0.0.1:8000/api/products/1)</li>
	<li>An endpoint that will delete product by ID and returns a message.({delete} http://127.0.0.1:8000/api/products/1)</li>
	<li>Endpoint to edit a product nd return that product as JSON. ({put} http://127.0.0.1:8000/api/products/1) </li>
</ol>

<ul>
	<li>Testable through client HTTP tools</li>
	<li>Postman</li>
</ul>

<ul>
	  <li>Server Side Scripting: PHP 7.1.15 </li>
    <li>Backend Framework: Laravel 5.6.14</li>
    <li>Database: MySQL</li>
    <li>ORM: Eloquent</li>
</ul>