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
    padding: 0; /* مقدار padding به جای auto باید عدد یا مقدار معتبر باشد */
    }
  }
</style>
<body>
    <div class="container-flex bg-light">
        <a href="#">Home</a>
        <a href="#">About Us</a>
        <a href="#">Contact</a>
        <a href="#">Bloh</a>

    </div>