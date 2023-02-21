<?php include 'header.php'; ?>
<body>

<style>

.admission-form {
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
}


</style>

<div class="admission-form">
  <h2>Admission Inquiry Form</h2>
  <form action="submit-form.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>
    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required>
    <br><br>
    <label for="child-name">Child's Name:</label>
    <input type="text" id="child-name" name="child-name" required>
    <br><br>
    <label for="child-dob">Child's Date of Birth:</label>
    <input type="date" id="child-dob" name="child-dob" required>
    <br><br>
    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="5" required></textarea>
    <br><br>
    <input type="submit" value="Submit">
  </form>
</div>



































</body>
<?php include 'footer.php'; ?>