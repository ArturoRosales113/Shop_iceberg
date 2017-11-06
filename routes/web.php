<?php
Route::redirect('/','home', 301);
// Rutas del Front
Route::namespace('Frontend')->group(function () {
    // Controllers Within The "App\Http\Controllers\Frontend" Namespace
    //s
    Route::get('/home','FrontController@index')->name('/home');
    //Sucursales
    Route::get('/sucursales', 'FrontController@sucursales')->name('front.sucursales');
    //Contacto
    Route::get('/contacto', 'FrontController@contacto')->name('front.contacto');
    //Colecciones
    Route::get('/colecciones', 'FrontController@colecciones')->name('front.colecciones');
    //Colecciones
    Route::post('/contacto/ticket', 'FrontController@ticket')->name('front.ticket');
});

//Rutas de cliente
Route::prefix('/customer')->group(function () {
  //Perfil del Cliente
  Route::get('profile','Frontend\CustomerController@showProfile')->name('customer.profile');
  //Registrar Cliente
  Route::get('register','Auth\CustomerLoginController@showRegisterForm')->name('customer.register');
  //Registrar Cliente
  Route::post('register','Auth\CustomerLoginController@storeRegisterForm')->name('customer.register.store');
  //Iniciar sesión como cliente
  Route::get('login','Auth\CustomerLoginController@showLoginForm')->name('customer.login');
  //Rutas de usuario
  Route::post('login','Auth\CustomerLoginController@login')->name('customer.login.submit');
 });

// Rutas del administrador
Route::prefix('/manager')->group(function () {
Auth::routes();
Route::namespace('Backend')->group(function () {
   // Controllers Within The "App\Http\Controllers\Backend" Namespace
   Route::get('/', 'BackController@index')->name('manager.index');
   //Producto
   Route::resource('/products', 'ProductsController');
   Route::get('/productsearch', 'ProductsController@search');
   //Categorías
   Route::resource('/categories', 'CategoryController');
   Route::get('/categorysearch', 'CategoryController@search');
   //Proveedores
   Route::resource('/suppliers', 'SuppliersController');
   Route::get('/supliersearch', 'SuppliersController@search');
   //Pedidos
   Route::resource('/orders', 'OrdersController');
   Route::get('/ordersearch', 'OrdersController@search');
   //Clientes
   Route::resource('/customers', 'CustomersController');
   Route::get('/customersearch', 'CustomersController@search');
   //Sucursales
   Route::resource('/stores', 'StoresController');
   Route::get('/storesearch', 'StoresController@search');
   //Empleados
   Route::resource('/employees', 'EmployeesController');
   Route::get('/employeesearch', 'EmployeesController@search');
});
});
