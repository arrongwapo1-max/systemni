<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thank You</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      body {
        background-color: #fff;
        font-family: "Poppins", sans-serif;
      }

      .thankyou-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        text-align: center;
      }

      .thankyou-card {
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        padding: 40px;
        max-width: 500px;
      }

      .thankyou-card h1 {
        color: #7b1c1c;
        font-weight: bold;
      }

      .thankyou-card p {
        font-size: 1.1rem;
        color: #333;
        margin: 15px 0 30px;
      }

      .btn-home {
        background-color: #7b1c1c;
        color: white;
        border: none;
        padding: 10px 25px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
      }

      .btn-home:hover {
        background-color: #5a1414;
        color: #fff;
      }

      footer {
        background-color: #601a1a;
        color: white;
        text-align: center;
        padding: 10px;
        position: absolute;
        bottom: 0;
        width: 100%;
      }
    </style>
  </head>
  <body>
    <div class="thankyou-container">
      <div class="thankyou-card">
        <img
          src="../Assets/images/thankyou.png"
          alt="Thank You"
          class="img-fluid mb-3"
          style="width: 120px"
        />
        <h1>Thank You!</h1>
        <p>Your message has been successfully sent. We’ll get back to you soon!</p>
        <a href="../Pages/homepage.html" class="btn-home">Return to Homepage</a>
      </div>
    </div>

    <footer>
      <p>@Copyright2025</p>
    </footer>
  </body>
</html>
