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




  



  /* new */

.nav-container {
  background-color: #867ae9; /* اگر می‌خواهید رنگ پس‌زمینه داشته باشد */
  display: flex;
  justify-content: center;

}

nav {
    margin: auto !important;
  padding: auto;
}



  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  body {
    font-family: sans-serif;
  }


  nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  nav ul li {
    float: left;
    position: relative;
  }

  nav ul li a,
  nav ul li a:visited {
    display: block;
    padding: 0 20px;
    line-height: 70px;
    background: #867ae9;
    color: #ffffff;
    text-decoration: none;
  }

  nav ul li a:hover,
  nav ul li a:visited:hover {
    background: #6157bd;
    color: #ffffff;
  }

  nav ul li a:not(:only-child):after,
  nav ul li a:visited:not(:only-child):after {
    padding-left: 4px;
    content: " ▾";
  }

  nav ul li ul li {
    min-width: 190px;
  }

  nav ul li ul li a {
    padding: 15px;
    line-height: 20px;
  }

  .nav-dropdown {
    position: absolute;
    /* display: none; */
    z-index: 1;
    box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
  }

  /* Mobile navigation */
  .nav-mobile {
    display: none;
    position: absolute;
    top: 0;
    right: 0;
    background: #867ae9;
    height: 70px;
    width: 70px;
  }

  @media only screen and (max-width: 798px) {
    .nav-mobile {
      display: block;
    }

    nav {
      width: 100%;
      padding: 70px 0 15px;
    }

    /* nav ul {
    display: none;
  } */
    nav ul li {
      float: none;
    }

    nav ul li a {
      padding: 15px;
      line-height: 20px;
    }

    nav ul li ul li a {
      padding-left: 30px;
    }

    .nav-dropdown {
      position: static;
    }
  }

  @media screen and (min-width: 799px) {
    .nav-list {
      display: block !important;
      
    }
  }

  #nav-toggle {
    position: absolute;
    left: 18px;
    top: 22px;
    cursor: pointer;
    padding: 10px 35px 16px 0px;
  }

  #nav-toggle span,
  #nav-toggle span:before,
  #nav-toggle span:after {
    cursor: pointer;
    border-radius: 1px;
    height: 5px;
    width: 35px;
    background: #ffffff;
    position: absolute;
    display: block;
    content: "";
  }

  #nav-toggle span:before {
    top: -10px;
  }

  #nav-toggle span:after {
    bottom: -10px;
  }

  #nav-toggle.active span {
    background-color: transparent;
  }

  #nav-toggle.active span:before,
  #nav-toggle.active span:after {
    top: 0;
  }

  #nav-toggle.active span:before {
    transform: rotate(45deg);
  }

  #nav-toggle.active span:after {
    transform: rotate(-45deg);
  }

  article {
    max-width: 1000px;
    margin: 0 auto;
    padding: 10px;
  }

  .mt-5 {
    margin-top: 2rem;
  }

  .mt-3 {
    margin-top: 1rem;
  }

  .text-primary {
    color: #867ae9;
  }

  [x-cloak] {
    display: none !important;
  }
</style>

<body>


  <section class="navigation">
    <div class="nav-container">

      <nav x-data="dropdown">
        <div class="nav-mobile">
          <a id="nav-toggle" href="#!" @clicl="toggle">
            <span></span>
          </a>
        </div>





        <ul class="nav-list" x-cloak x-show="open" x-transition.duration.200ms.opacity.scale.origin.top style="">
          <li>
            <a href="#!">Home</a>
          </li>
          <li>
            <a href="#!">About</a>
          </li>
          <li x-data="dropdown">
            <a href="#!" @click="toggle" @click.outside="open = false" @keyup.escape="open = false">Services</a>
            <ul class="nav-dropdown" x-cloak x-show="open" x-transition.duration.400ms.opacity.scale.origin.top>
              <li>
                <a href="#!">Web Design</a>
              </li>
              <li>
                <a href="#!">Web Development</a>
              </li>
              <li>
                <a href="#!">Graphic Design</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#!">Pricing</a>
          </li>
          <li x-data="dropdown">
            <a href="#!" @click="toggle" @click.outside="open = false" @keyup.escape="open = false">Portfolio</a>
            <ul class="nav-dropdown" x-cloak x-show="open" x-transition.duration.400ms.opacity.scale.origin.top>
              <li>
                <a href="#!">Web Design</a>
              </li>
              <li>
                <a href="#!">Web Development</a>
              </li>
              <li>
                <a href="#!">Graphic Design</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#!">Contact</a>
          </li>
        </ul>
      </nav>
    </div>
  </section>

  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.data('dropdown', () => ({
        open: false,

        toggle() {
          this.open = !this.open
        }
      }))
    })
  </script>
  </div>