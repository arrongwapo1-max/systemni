<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You for Your Order</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: "Poppins", sans-serif;
    }
    .thankyou-container {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
    }
    .card {
      border-radius: 16px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      padding: 40px 30px;
      background: white;
      max-width: 450px;
    }
    .check-icon {
      font-size: 60px;
      color: #8B0000;
    }
    .btn-order {
      background-color: #8B0000;
      color: white;
      border-radius: 8px;
    }
    .btn-order:hover {
      background-color: #a52a2a;
    }
    footer {
      margin-top: 40px;
      color: #fff;
      background-color: #5a0b0b;
      padding: 10px 0;
      width: 100%;
      text-align: center;
    }
  </style>
</head>
<body>

  <div class="thankyou-container">
    <div class="card">
      <div class="check-icon mb-3">
        <i class="bi bi-check-circle-fill"></i>
      </div>
      <h2 class="mb-3">Thank You for Your Order!</h2>
      <p>Your order has been received and is now being processed. <br>
         We’ll notify you once it’s ready for delivery.</p>
      <a href="../Pages/homepage.html" class="btn btn-order mt-3">Return to Home</a>
    </div>
  </div>

  <footer>
    <p>@Copyright2025</p>
  </footer>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
