<h1> ApiTest </h1>
<h3>URL</h3>
<p>http://127.0.0.1:8000/api/products</p>
<h3>Method:</h3>
<p>GET | POST | DELETE | PUT</p>
<h3>URL Params</h3>
<ul>
   <li>{get}-> http://127.0.0.1:8000/api/products ( returns all products in JSON structure )</li>
   <li>{post}-> http://127.0.0.1:8000/api/products </li>
   <ul>
      <li>All fields requierd</li>
      <li>product_name -> string</li>
      <li>product_description ->text</li>
      <li>product_price ->integer</li>
      <li>product_quantity -> integer</li>
      <li>created_at & updated_at -> like on example</li>
      <li>{</li>
      <ul>
         <li>"id": 1,</li>
         <li>"product_name": "Product One",</li>
         <li>"product_description": "Product Description ",</li>
         <li>"product_price": 1,</li>
         <li>"product_quantity": 2,</li>
         <li>"created_at": {</li>
         <ul>
            <li>"date": "2018-03-29 18:03:03.000000",</li>
            <li>"timezone_type": 3,</li>
            <li>"timezone": "UTC"</li>
         </ul>
      </ul>
      <li>},</li>
   </ul>
   <li>"updated_at": {</li>
   <ul>
      <li>"date": "2018-03-29 18:04:02.000000",</li>
      <li>"timezone_type": 3,</li>
      <li>"timezone": "UTC"</li>
   </ul>
   <li>}</li>
   <li>}</li>
   <li>returns-> the new Product</li>

<li>{put}-> http://127.0.0.1:8000/api/products/(id->integer)</li>
<ul>
   <li>All fields requierd</li>
   <li>product_name -> string</li>
   <li>product_description ->text</li>
   <li>product_price ->integer</li>
   <li>product_quantity -> integer</li>
   <li>created_at & updated_at -> like on example</li>
   <li>{</li>
   <ul>
      <li>"id": 1,</li>
      <li>"product_name": "Product One",</li>
      <li>"product_description": "Product Description ",</li>
      <li>"product_price": 1,</li>
      <li>"product_quantity": 2,</li>
      <li>"created_at": {</li>
      <ul>
         <li>"date": "2018-03-29 18:03:03.000000",</li>
         <li>"timezone_type": 3,</li>
         <li>"timezone": "UTC"</li>
      </ul>
   </ul>
   <li>},</li>
</ul>
<li>"updated_at": {</li>
<ul>
   <li>"date": "2018-03-29 18:04:02.000000",</li>
   <li>"timezone_type": 3,</li>
   <li>"timezone": "UTC"</li>
</ul>
<li>}</li>
<li>}</li>
<li>returns-> the update Product</li>

<li>{delete}-> http://127.0.0.1:8000/api/products/(id->integer)</li>
<li>returns->message after delete</li>
</ul>
<h3>Error:</h3>
<ul>
   <li>NotFoundHttpException</li>
   <li>MethodNotAllowedHttpException</li>
   <li>ModelNotFoundException</li>
   <li>Requierd field missing</li>
</ul>
<h3>Notes:</h3>
<ol>
   <li> Change .env.example to ".env" and edit database connetion</li>
   <li> composer install </li>
   <li> php artisan migrate </li>
   <li> php artisan db:seed (to add Faker Product)</li>
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