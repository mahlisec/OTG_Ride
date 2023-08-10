<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Book Now - OTG Ride</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{url('Frontend/img/favicon-32x32.png')}}" rel="icon">
  <link rel="stylesheet" href="{{url('Frontend/css/booking.css')}}">

  <style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
}

.navbar {
  background-color: #333;
  color: white;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
}

.logo a {
  display: flex;
  align-items: center;
}

.logo img {
  width: 40px;
  height: auto;
  margin-right: 10px;
}

.nav-links {
  list-style: none;
  display: flex;
  gap: 20px;
}

.nav-links a {
  color: white;
  text-decoration: none;
}

.user-profile {
  display: flex;
  align-items: center;
  gap: 10px;
}

.user-profile img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  object-fit: cover;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropbtn {
  background-color: transparent;
  color: white;
  border: none;
  cursor: pointer;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}


  </style>

</head>

<body>

    <nav class="navbar">
        <div class="logo" ><a href="#"><img src="{{url('Frontend/img/logo.png')}}" alt="Company Logo"></a></div>

        <div class="user-profile">
          <img src="profile-photo.jpg" alt="User Profile">
          <div class="dropdown">
            <button class="dropbtn">User Name</button>
            <div class="dropdown-content">
              <a href="#">Profile</a>
              <a href="#">Settings</a>
              <a href="#">Logout</a>
            </div>
          </div>
        </div>
      </nav>

    <div class="ride-form">
        <h1>Book a Ride</h1>

     <form>
       <label for="pickup">Pickup Location:</label>
       <input type="text" id="pickup" name="pickup" required>
       <label for="destination">Destination:</label>
       <input type="text" id="destination" name="destination" required>

       <label for="destination">When:</label>
       <select id="options" onchange="showField()">
        <option value="none">Select</option>
        <option value="none">Book Now</option>
        <option value="show">Book for Later</option>
       </select>

       <div id="additionalField" style="display: none;">
         <label for="date">Date:</label>
         <input type="date" id="date" name="date" required>
         <label for="time">Time:</label>
         <input type="time" id="time" name="time" required>
       </div>

       <label for="destination">Choose Your Ride Type:</label>
       <select id="option" onchange="showFields()">
        <option value="none">Select</option>
        <option value="none">Two Wheeler</option>
        <option value="show">Four Wheeler</option>
       </select>



       <button type="submit">Book Now</button>
     </form>
   </div>


   <iframe style="height:100vh; width:100vw" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d93103.73008434045!2d85.3229814057449!3d23.3578114030537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1691588782644!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

 <script>
    function showField() {
  var optionsSelect = document.getElementById('options');
  var additionalField = document.getElementById('additionalField');

  if (optionsSelect.value === 'show') {
    additionalField.style.display = 'block';
  } else {
    additionalField.style.display = 'none';
  }
}

 </script>

</body>
</html>


