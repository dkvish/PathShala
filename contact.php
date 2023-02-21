<?php include 'header.php'; ?>
<body>








<style>

.contact-section {
  width: 500px;
  margin: 0 auto;
  text-align: center;
}

form {
  display: inline-block;
  text-align: left;
}

label, input, textarea {
  display: block;
  width: 100%;
  margin-bottom: 10px;
}

input[type="submit"] {
  width: 200px;
  padding: 10px;
  background-color: lightblue;
  border: none;
  border-radius: 5px;
  color: white;
  font-size: 18px;
  margin-top: 20px;
}

.phone-number {
  font-size: 20px;
  margin-top: 40px;
}



    </style>














<div class="contact-section">
  <h2>Contact Us</h2>
  <p>We'd love to hear from you. Fill out the form or give us a call.</p>
  <form action="submit-form.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>
    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="5" required></textarea>
    <br><br>
    <input type="submit" value="Submit">
  </form>
  <p>Or give us a call at:</p>
  <p class="phone-number">555-555-5555</p>
</div>













</body>
<?php include 'footer.php'; ?>