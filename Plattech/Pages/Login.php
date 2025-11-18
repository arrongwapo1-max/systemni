
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background-image: url("../Assets/images/letson.jpg");
        background-size: cover;
        background-position: center;
      }
      .login-card {
        background-color: #ece6e6;
        max-width: 400px;
        margin: 80px auto;
        padding: 40px 30px;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      }
      .login-card h3 {
        color: #b61a06e7;
        font-weight: 600;
      }
      .form-label {
        color: #b61a06e7;
      }
      .form-check-label {
        color: #b61a06e7;
        margin-left: 8px;
      }
      .secondary-button {
        background:#771205e7;
        border: 1px solid rgb(46, 31, 31);
        border-radius: 5px;
        cursor: pointer;
        transition: 0.5s ease-in-out;
        box-shadow: 0 2px 10px rgba(3, 3, 3, 3);
        font-size: 18px;
        padding: 5px 25px;
        color: #ffffffe7;
      }
      .secondary-button:hover {
        background: rgb(53, 13, 13);
        color:rgb(218, 165, 32);
        transform: scale(1.09);
        transition: all ease 0.5s;
        box-shadow: 0 2px 10px rgba(3, 3, 3, 3);
      }
      .secondary-button a{
        text-decoration: none;
        color: #ffffffe7;
      }
      .toggle-password {
        position: absolute;
        right: 10px;
        top: 35px;
        cursor: pointer;
        color: #b61a06e7;
      }
      .extra-links {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: -5px;
      }
      .extra-links a {
        color: #b61a06e7;
        text-decoration: none;
        font-size: 0.95rem;
      }
      .extra-links a:hover {
        text-decoration: underline;
      }
      .extra-link {
  color: #b61a06e7;
  text-decoration: none;
  font-size: 0.95rem;
}
.extra-link:hover {
  text-decoration: underline;
}
    </style>
  </head>
  <body>
    <div class="container">
      <div class="login-card">
        <h3 class="text-center mb-4">Log in</h3>
        <form id="loginForm">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
          </div>

          <div class="mb-3 position-relative">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password">
            <span class="toggle-password" onclick="togglePassword()">👁️</span>
          </div>

          <div class="extra-links">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="remember">
              <label class="form-check-label ml-2" for="remember">Remember me</label>
            </div>
            <a href="../Pages/forgot.html">Forgot password?</a>
          </div>

          <div class="text-center mt-2">
            <a href="../Pages/signup.html" class="extra-link">Don’t have an account?</a>
          </div>
          

          <div class="text-center mt-3">
            <button class="secondary-button"><a href="../Pages/homepage.html">Log in</a></button>
          </div>
        </form>
      </div>
    </div>

    <script>
      // Show/Hide password
      function togglePassword() {
        const password = document.getElementById("password");
        password.type = password.type === "password" ? "text" : "password";
      }

      // Move siya sa next niya eh input if mo press kag enter
      const inputs = document.querySelectorAll('input');
      inputs.forEach((input, index) => {
        input.addEventListener('keypress', (e) => {
          if (e.key === 'Enter') {
            e.preventDefault();
            const nextInput = inputs[index + 1];
            if (nextInput) {
              nextInput.focus();
            } else {
              document.getElementById('loginForm').submit();
            }
          }
        });
      });
    </script>

<script>
  // Show/Hide password
  function togglePassword() {
    const password = document.getElementById("password");
    password.type = password.type === "password" ? "text" : "password";
  }

  // Prevent login if fields are empty
  document.querySelector(".secondary-button").addEventListener("click", function(e) {
    e.preventDefault();               
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();

    if (name === "" || email === "" || password === "") {
      alert("Please fill out all fields before logging in.");
      return; // stop the login
    }

    // OPTIONAL: You can add simple email format check
    if (!email.includes("@")) {
      alert("Please enter a valid email address.");
      return;
    }

    // If all fields are filled, go to homepage
    // Simulate successful login (you can replace this later with real login)
    localStorage.setItem("loggedIn", "true");
    window.location.href = "../Pages/homepage.html";
  });
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
