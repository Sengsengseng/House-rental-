<?php
session_start();

include("navbar.php");

?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f7f7f7;
    }

    h1 {
      color: #336699;
      font-size: 2.5rem;
      margin-top: 2rem;
      margin-bottom: 1rem;
      text-align: center;
    }

    form {
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px #ccc;
      margin: auto;
      max-width: 500px;
      padding: 2rem;
    }

    label {
      color: #336699;
      display: block;
      font-size: 1.2rem;
      margin-bottom: 0.5rem;
    }

    input {
      border: none;
      border-bottom: 2px solid #ccc;
      box-shadow: none;
      font-size: 1.2rem;
      padding: 0.5rem;
      transition: border-color 0.3s ease-in-out;
      width: 100%;
    }

    input:focus {
      border-color: #336699;
      outline: none;
    }

    button {
      background-color: #336699;
      border: none;
      border-radius: 5px;
      color: #fff;
      cursor: pointer;
      font-size: 1.2rem;
      padding: 0.5rem 1rem;
      transition: background-color 0.3s ease-in-out;
    }

    button:hover {
      background-color: #254e7b;
    }

    .flex-item {
      margin: 1vw;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Get in Touch</h1>
    <form>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email">
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
      </div>
      <div>
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>