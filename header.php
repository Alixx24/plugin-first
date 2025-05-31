<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>
    <title>عنوان سایت</title>
</head>
<style>

   .container-flex {
    display: flex;
    gap: 10px;
    align-items: center;
    justify-content: center;
    height: 50px;
    background-color: #f0f0f0;
  }

  .container-flex a {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5px 10px;
    text-decoration: none;
    color: #333;
    background-color: #ddd;
    border-radius: 4px;
    font-size: 16px;
  }



  @media (max-width: 600px) {
    .container-flex {
      height: auto;
      gap: auto; 
    }





    
    .container-flex a {
      margin-top: 10px;
         margin-left: auto;
    margin-right: auto;
        font-size: 22px !important;
    padding: 0; 
    }
  }
</style>
<body>
    <div class="container-flex bg-light">
        <a href="#">Home</a>
        <a href="#">About Us</a>
        <a href="#">Contact</a>
        <a href="#">Bloh</a>

        <!-- بارگذاری Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<div x-data="{ open: false }" class="relative inline-block">
    <a href="3" class="courses-header"
       @click.prevent="open = !open"         
       @click.outside="open = false"          
       @keyup.escape.window="open = false"   
       tabindex="0"                         
    >courses</a>

    <!-- منوی dropdown -->
    <div x-show="open" 
         x-transition
         class="absolute bg-white border mt-1 rounded shadow-lg"
         style="min-width: 150px;"
         @click.outside="open = false">
        <a href="#course1" class="block px-4 py-2 hover:bg-gray-100">Course 1</a>
        <a href="#course2" class="block px-4 py-2 hover:bg-gray-100">Course 2</a>
        <a href="#course3" class="block px-4 py-2 hover:bg-gray-100">Course 3</a>
    </div>
</div>

    </div>