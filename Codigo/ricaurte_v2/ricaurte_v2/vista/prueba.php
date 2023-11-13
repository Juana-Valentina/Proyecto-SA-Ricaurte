<!DOCTYPE html>
<html>
<head>
  <title>Contact Me Form</title>
  <style>
    body {
      background-color: blue;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .form-container {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2 style="text-align: center;">Contact Me</h2>
    <form>
      <fieldset>
        <legend>Contact Information</legend>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>
      </fieldset>

      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>
