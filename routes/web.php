<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\DevController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SpryloController;
use Illuminate\Support\Facades\Route;



//06263
// Route::get('/', function(){
//     return 'Homepage';
// });

// Route::get('/about', function(){
//     return 'About Us';
// });




// Route::put('update', function() {
//     return 'Update';
// });

// Route::patch('/update', function() {
//     return 'Update';
// });


// Route::match(['put', 'patch'], 'Update', function() {
//     return 'Update';
// });


// Route::any('/policy', function() {
//     return 'Any';
// });



// Route::view('/posts', 'posts');

// Route::get('posts', function() {
//     return view('posts');
// });
//


// Route::get('/', function() {
//     return 'Homepage';
// });

// Route::get('/post/{id}/{category}', function($id, $category) {
//     return "post $id details, Category $category";
// });

// Route::get('/user/{username}', function($username) {
//     return 'Username ' . $username;
// });

// Route::get('/courses/{namecourse}', function($namecourse) {
//     return "Course Name $namecourse";
// });

// Route::get('/courses/{namecourse}/{typecourse?}', function($namecourse, $typecourse = '') {
//     return "Course Name $namecourse, Type $typecourse";
// })
// ->where('namecourse', '[1-5]+')
// ->whereIn('typecourse', ['live', 'book','abc']);

// ->whereAlpha('namecourse')
// ->whereNumber('typecourse');

// class person {
//     public $name;
//     public $age;

//     function getName(){
//         echo $this->name;
//         return $this;
//     }

//     function getAge(){
//         echo $this->age;
//         return $this;
//     }

// }

// $p = new person();
// $p->name = "Amjad";
// $p->age = 22;

// $p->getName()->getAge();





// Route::get('/', function() {
//     return 'Homepage';
// });

// Route::get('/course/name/{type}', function($type) {
//     return 'sss';
// })
// ->whereNumber('type');

// Route::get('/course/{type}/name', function($type) {
//     return 'sss';
// });

// Route::get('/user/all', function() {
//     return "All User";
// });

// Route::get('/user/{page}', function($user) {
//     return "User profile page $user";
// });



// Route::get('/', function() {
//    //return "<a href='/about-us'>About Us</a>";
//    $url = route('aboutpage');
//    return "<a href='$url'>About Us</a>";
// });

// Route::get('/about-mm', function() {
//     return 'About Page';
// })->name('aboutpage');

// Route::get('/page/contact', function() {
//     return 'Contact Page';
// });

// Route::get('/page/{name}', function($name) {
//     return 'name: $name';
//  })
// ->whereAlpha($name);


// Route::get('/', function() {
//     $url1 = route('profile', 'amjadsalah04');
//     $url2 = route('profile', 'ismail11');
//     $url3 = route('profile', 'shaker');
//     $url4 = route('profile', 'abohamza');
//     $url5 = route('profile', 'abojabal');
//     $url6 = route('contact');


//     echo "<a href='$url1'>amjadsalah04</a><br>";
//     echo "<a href='$url2'>ismail11</a><br>";
//     echo "<a href='$url3'>shaker</a><br>";
//     echo "<a href='$url4'>abohamza</a><br>";
//     echo "<a href='$url5'>abojabal</a><br>";
//     "<br>";
//     "<br>";

//     echo "<a href='$url6'>Contact Us</a>";
// });

// Route::get('/user/{username}', function($username) {
//     return "Instagram User Profile for : $username";
// })->name('profile');

// Route::get('/contact', function() {
//     return 'this is contact page';
// })->name('contact');


// Route::get('/', function() {
//     $products = [
//         'New T Shirt Colleaction',
//         'Story Book',
//         'Laptops',
//         'Accessories',
//         'Movies'
//     ];

//     foreach($products as $product){
//         echo "<a href = '" . route('product', $product) . "'>$product<br></a>";
//     }
// });

// Route::get('/product/{name}', function($name) {
//     return "product: $name";
// })->name('product');



// Route::get('/', function() {

//     $url1 = route('profile', ['amjadsalah04']);
//     $url2 = route('profile', ['amal']);
//     $url3 = route('profile', ['ismail11']);
//     $url4 = route('profile', ['noorsalah']);
//     $url5 = route('profile', ['shakersalah']);


//     echo "<a href='$url1'>amjadsalah04<br></a>";
//     echo "<a href='$url2'>amal</a><br>";
//     echo "<a href='$url3'>ismail11</a><br>";
//     echo "<a href='$url4'>noorsalah</a><br>";
//     echo "<a href='$url5'>shakersalah</a><br>";
// });


// Route::get('/user/{username}', function($username) {
//     return "Instagram profile for : $username";
// })->name('profile');



// Route::get('/', function() {

//     $products = [
//         'T shirts',
//         'Clothes',
//         'Book Story'
//     ];

//     foreach($products as $product){
//         echo "<a href='" .route('product', ['$product']). "'>$product<br></a>";
//     }
// });

// Route::get('/product/{name}', function($name) {
//     return 'product name is : $name';
// })->name('product');





// Route::get('/post/{id}', function($id) {
//     return "post $id";
// })->where('id', '[aA-zZ]+');


// Route::prefix('students')->name('students.')->group(function() {

// Route::get('/', function() {
//     return 'All Students';
// })->name('all');

// Route::get('/exams', function() {
//     return 'Students exams';
// })->name('exams');

// Route::get('/leaves', function() {
//     return 'Students leaves';
// })->name('leaves');

// });


// Route::get('/', [MainController::class, 'index'])->name('homepage');

// home , about , team , services , contact , contact form

// Route::get('/', [MainController::class, 'index'])->name('index');

// Route::get('/about', [MainController::class, 'about'])->name('about');

// Route::get('/team', [MainController::class, 'team'])->name('team');

// Route::get('/services', [MainController::class, 'services'])->name('services');

// Route::get('/contact', [MainController::class, 'contact'])->name('contact');

// Route::post('/contact', [MainController::class, 'contact_form'])->name('contact_form');


// // Route::get('/apis/developer', [DevController::class, 'info'])->name('developer');

// Route::get('products', [ProductController::class, 'index'])->name('products');





// Route::get('/', [SiteController::class, 'index'])->name('index');
// // Route::get('/about', [SiteController::class, 'about'])->name('about');

// Route::get("/user/{name}/{birthyear}", [SiteController::class, "age"])->name("user.age");



// Route::prefix('admin')->name('admin.')->group(function() {

//     Route::get('categories', [CategoriesController::class, 'index'])->name('categories.index');

// });















// personal website route
// Route::get('/', [PersonalController::class, 'index'])->name('personal.index');

// Route::get('/resume', [PersonalController::class, 'resume'])->name('personal.resume');

// Route::get('/projects', [PersonalController::class, 'projects'])->name('personal.projects');

// Route::get('/contact-us', [PersonalController::class, 'contact'])->name('personal.contact');

Route::get('/index', [PersonalController::class, 'index'])->name('personal.index');



// Sprylo website route
Route::get('/', [SpryloController::class, 'index'])->name('index');
Route::get('cart',[SpryloController::class, 'cart'])->name('cart');
Route::get('contact',[SpryloController::class, 'contact'])->name('contact');
Route::get('product',[SpryloController::class, 'product'])->name('product');

