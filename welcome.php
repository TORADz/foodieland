<?php
$name = isset($_GET['name']) ? $_GET['name'] : "User";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <style>
    body {
      background: #fff9e6;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: Arial, sans-serif;
    }

    h1 {
      font-size: 2.5em;
      animation: fadeOut 2s ease 2s forwards;
    }

    @keyframes fadeOut {
      to {
        opacity: 0;
        visibility: hidden;
      }
    }
  </style>
</head>
<body>
  <h1 id="welcome-text">Welcome <?php echo htmlspecialchars($name); ?>!</h1>

  <script>
    setTimeout(function() {
      window.location.href = "index.html";
    }, 4000);
  </script>
</body>
</html>