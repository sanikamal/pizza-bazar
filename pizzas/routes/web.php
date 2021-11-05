

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('frontpage');
Route::get('/pizza/{id}', [App\Http\Controllers\FrontendController::class, 'show'])->name('pizza.show');
Route::post('/order/store', [App\Http\Controllers\FrontendController::class, 'store'])->name('order.store');





  //user order
  Route::get('/user/order', [App\Http\Controllers\UserOrderController::class, 'index'])->name('user.order');
  Route::post('/order/{id}/status', [App\Http\Controllers\UserOrderController::class, 'changeStatus'])->name('order.status');

  //display all customers
  Route::get('/customers', [App\Http\Controllers\UserOrderController::class, 'customers'])->name('customers');

