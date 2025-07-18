<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Medilab - Job Application</title>
  <!-- Bootstrap CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
   <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    /* Your existing styles for navbar can stay here */

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f9f9f9;
      margin: 0;
      padding: 30px 20px;
    }

    .container.form-container {
      max-width: 900px;
      margin: 40px auto; /* add some margin top below navbar */
      background: #fff;
      border-radius: 12px;
      padding: 30px 40px;
      box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
    }

    h2 {
      font-family: "senserif";
      text-align: center;
      margin-bottom: 30px;
      color: #222;
      font-weight: 700;
    }

    form {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px 30px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
      color: #444;
    }

    input[type="text"],
    input[type="tel"],
    input[type="number"],
    select,
    textarea,
    input[type="file"] {
      width: 100%;
      padding: 12px 15px;
      border: 1.5px solid #ccc;
      border-radius: 8px;
      font-size: 15px;
      transition: border-color 0.3s ease;
      box-sizing: border-box;
    }

    input[type="text"]:focus,
    input[type="tel"]:focus,
    input[type="number"]:focus,
    select:focus,
    textarea:focus,
    input[type="file"]:focus {
      border-color: #0066ff;
      outline: none;
    }

    textarea {
      resize: vertical;
      min-height: 90px;
    }

    .gender-container {
      display: flex;
      align-items: center;
      gap: 20px;
      margin-top: 12px;
    }

    .gender-container label {
      padding-top: 10px;
      font-weight: normal;
      color: #333;
      cursor: pointer;
    }

    button {
      grid-column: 1 / -1;
      padding: 16px 0;
      font-size: 18px;
      background-color: #0066ff;
      color: white;
      border: none;
      border-radius: 9px;
      cursor: pointer;
      font-weight: 700;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #004bb5;
    }
  </style>
</head>

<body class="index-page">

  <!-- Navbar code starts -->
  <header id="header" class="header sticky-top">
    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>

    <div class="branding d-flex align-items-center">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center me-auto">
          <h1 class="sitename">Medilab</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#jobs">Jobs</a></li>
            <li><a href="#departments">Departments</a></li>
            <li><a href="#doctors">Doctor</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn d-none d-sm-block" href="#appointment">Make an Appointment</a>
      </div>
    </div>
  </header>
  <!-- Navbar code ends -->

  <!-- Job Application Form Section starts -->
  <section id="jobs" class="form-section">
    <div class="container form-container">
      <h2>Job Application Form</h2>
      <form>
        <div>
          <label for="name">Full Name</label>
          <input id="name" type="text" name="name" placeholder="Your full name" required />
        </div>

        <div>
          <label for="contact">Contact Number</label>
          <input id="contact" type="tel" name="contact" placeholder="Phone number" required />
        </div>

        <div>
          <label for="experience">Years of Experience</label>
          <input id="experience" type="text" name="experience" placeholder="e.g. 2 years" required />
        </div>

        <div>
          <label for="job">Job Position</label>
          <select id="job" name="job" required>
            <option value="">Select job</option>
            <option value="rider">Rider</option>
            <option value="delivery_boy">Delivery Boy</option>
            <option value="nurse">Nurse</option>
            <option value="attendant">Attendant</option>
          </select>
        </div>

        <div>
          <label>Gender</label>
          <div class="gender-container">
            <label><input type="radio" name="gender" value="male" required /> Male</label>
            <label><input type="radio" name="gender" value="female" /> Female</label>
            <label><input type="radio" name="gender" value="other" /> Other</label>
          </div>
        </div>

        <div>
          <label for="age">Age</label>
          <input id="age" type="number" name="age" placeholder="Your age" min="18" max="100" required />
        </div>

        <div style="grid-column: 1 / -1;">
          <label for="address">Address</label>
          <textarea id="address" name="address" placeholder="Your full address" required></textarea>
        </div>

        <div style="grid-column: 1 / -1;">
          <label for="photo">Upload Photo</label>
          <input id="photo" type="file" name="photo" accept="image/*" required />
        </div>

        <button type="submit">Submit Application</button>
      </form>
    </div>
  </section>
  <!-- Job Application Form Section ends -->

  <!-- Bootstrap JS -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
