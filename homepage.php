<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RentEasy - Home</title>
  <link rel="stylesheet" href="css/styling.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>

  <!-- ===== Header ===== -->
  <?php include 'includes/header.php'; ?>

  <!-- ===== Hero Section ===== -->
  <section class="hero">
    <div class="hero-text">
      <h1>Find Your Perfect Space</h1>
      <p>Discover or list properties with ease – apartments, villas, offices, and more</p>
      <button class="cta-btn">List Your Property</button>
    </div>
  </section>

  <!-- ===== Categories ===== -->
  <section class="property-types">
  <h2>Explore Property Types</h2>
  <div class="property-grid">

    <!-- Apartment Card -->
    <div class="property-card">
      <img src="images/appartment.jpg" alt="Apartment">
      <h3>Apartment</h3>
      <a href="properties.php?type=apartment" class="browse-btn">See Apartments</a>
    </div>

    <!-- PG Card -->
    <div class="property-card">
      <img src="images/pg-photo.jpg" alt="PG Room">
      <h3>PG</h3>
      <a href="properties.php?type=pg" class="browse-btn">See PGs</a>
    </div>

    <!-- House Card -->
    <div class="property-card">
      <img src="images/house.jpg" alt="House">
      <h3>House</h3>
      <a href="properties.php?type=house" class="browse-btn">See Houses</a>
    </div>

    <!-- office card -->

    <div class="property-card">
      <img src="images/office.jpg" alt="office">
      <h3>Office</h3>
      <a href="properties.php?type=office" class="browse-btn">See office</a>
    </div>

  </div>



  <?php include 'includes/fotoor.php'; ?>

</body>
</html>
