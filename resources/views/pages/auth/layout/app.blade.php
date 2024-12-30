<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'One For All')</title>

  @vite(['resources/js/app.js', 'resources/css/app.css'])

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <div class="font-rubik">
    @yield('content')
  </div>
</body>

<script>
  const passwordToggle = document.querySelector('.js-password-toggle')
  
  passwordToggle.addEventListener('change', function() {
    const password = document.querySelector('.js-password'),
      passwordLabel = document.querySelector('.js-password-label')
  
    if (password.type === 'password') {
      password.type = 'text'
      passwordLabel.classList.remove('fa-eye')
      passwordLabel.classList.add('fa-eye-slash')
    } else {
      password.type = 'password'
      passwordLabel.classList.add('fa-eye')
      passwordLabel.classList.remove('fa-eye-slash')
    }
  
    password.focus()
  })
  </script>

</html>
