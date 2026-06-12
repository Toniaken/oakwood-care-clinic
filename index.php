<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oakwood Care Clinic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">
    <div class="logo">Oakwood Care Clinic</div>
    <nav>
        <a href="#home">Home</a>
        <a href="#services">Services</a>
        <a href="#doctors">Doctors</a>
        <a href="#booking">Book Appointment</a>
        <a href="#contact">Contact</a>
        <a href="admin.php">Admin</a>
    </nav>
</header>

<section id="home" class="hero">
    <div class="hero-content">
        <h1>Private Healthcare Made Simple</h1>
        <p>
            Book private GP, cardiology, child health, women’s health,
            dermatology, and diagnostic appointments online.
        </p>
        <a href="#booking" class="btn">Book Appointment</a>
    </div>
</section>

<section class="clinic-section">
    <div class="clinic-content">
        <div class="clinic-text">
            <h2>Welcome to Oakwood Care Clinic</h2>
            <p>
                Oakwood Care Clinic is a modern UK private healthcare centre providing
                accessible appointments for adults, children, and families.
            </p>
            <p>
                We offer clear pricing, experienced clinicians, and simple online booking.
            </p>
            <a href="#booking" class="btn">Book Now</a>
        </div>

        <div class="clinic-image">
            <img src="img/clinic-building.jpg" alt="Oakwood Care Clinic building">
        </div>
    </div>
</section>

<section class="services-section" id="services">
    <h2>Our Services</h2>
    <p class="section-intro">Private appointments with clear UK pricing.</p>

    <div class="services-grid">
        <div class="service-card">
            <h3>Private GP Consultation</h3>
            <p>Speak with a private GP about general health concerns.</p>
            <p class="service-price">£85</p>
        </div>

        <div class="service-card">
            <h3>Cardiology Consultation</h3>
            <p>Heart health checks, blood pressure reviews, and cardiovascular advice.</p>
            <p class="service-price">£150</p>
        </div>

        <div class="service-card">
            <h3>Child Health Check</h3>
            <p>Child health, growth, and developmental reviews.</p>
            <p class="service-price">£95</p>
        </div>

        <div class="service-card">
            <h3>Women’s Health Consultation</h3>
            <p>Confidential private women’s health support.</p>
            <p class="service-price">£120</p>
        </div>

        <div class="service-card">
            <h3>Dermatology Consultation</h3>
            <p>Skin concerns, rashes, acne, moles, and general skin reviews.</p>
            <p class="service-price">£110</p>
        </div>

        <div class="service-card">
            <h3>Diagnostics & Blood Tests</h3>
            <p>Blood test appointments and diagnostic result reviews.</p>
            <p class="service-price">From £60</p>
        </div>
    </div>
</section>

<section class="doctors-section" id="doctors">
    <h2>Meet Our Doctors</h2>
    <p class="section-intro">Experienced private clinicians across key healthcare specialties.</p>

    <div class="doctors-grid">
        <div class="doctor-card">
            <img src="img/doctor-1.jpg" alt="Dr Hannah Cole">
            <h3>Dr Hannah Cole</h3>
            <p class="specialty">Private GP</p>
            <p class="doctor-experience">11 years experience</p>
            <p>Provides general consultations, medication reviews, and preventive health advice.</p>
            <p class="doctor-price">Consultation: £85</p>
        </div>

        <div class="doctor-card">
            <img src="img/doctor-2.jpg" alt="Dr Marcus Adeyemi">
            <h3>Dr Marcus Adeyemi</h3>
            <p class="specialty">Cardiologist</p>
            <p class="doctor-experience">15 years experience</p>
            <p>Supports patients with heart health, blood pressure, chest pain, and risk reviews.</p>
            <p class="doctor-price">Consultation: £150</p>
        </div>

        <div class="doctor-card">
            <img src="img/doctor-3.jpg" alt="Dr Sofia Bennett">
            <h3>Dr Sofia Bennett</h3>
            <p class="specialty">Paediatrician</p>
            <p class="doctor-experience">10 years experience</p>
            <p>Provides child health checks, growth monitoring, and developmental reviews.</p>
            <p class="doctor-price">Consultation: £95</p>
        </div>

        <div class="doctor-card">
            <img src="img/doctor-4.jpg" alt="Dr Aisha Khan">
            <h3>Dr Aisha Khan</h3>
            <p class="specialty">Women’s Health Specialist</p>
            <p class="doctor-experience">13 years experience</p>
            <p>Provides confidential support for women’s health, reproductive health, and menopause care.</p>
            <p class="doctor-price">Consultation: £120</p>
        </div>

        <div class="doctor-card">
            <img src="img/doctor-5.jpg" alt="Dr Nathan Brooks">
            <h3>Dr Nathan Brooks</h3>
            <p class="specialty">Dermatologist</p>
            <p class="doctor-experience">9 years experience</p>
            <p>Supports patients with acne, rashes, moles, skin irritation, and general skin concerns.</p>
            <p class="doctor-price">Consultation: £110</p>
        </div>

        <div class="doctor-card">
            <img src="img/doctor-6.jpg" alt="Dr Emeka Lawson">
            <h3>Dr Emeka Lawson</h3>
            <p class="specialty">Diagnostics Consultant</p>
            <p class="doctor-experience">8 years experience</p>
            <p>Provides blood test bookings, diagnostic reviews, and onward referral guidance.</p>
            <p class="doctor-price">From £60</p>
        </div>
    </div>
</section>

<section id="booking" class="booking-section">
    <h2>Book an Appointment</h2>
    <p class="section-intro">Complete the form below and our team will review your request.</p>

    <form id="appointmentForm" action="submit-booking.php" method="POST">
        <label for="full_name">Full Name</label>
        <input type="text" id="full_name" name="full_name" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phone" required>

        <label for="appointment_type">Appointment Type</label>
        <select id="appointment_type" name="appointment_type" required>
            <option value="">Select appointment type</option>
            <option value="Private GP Consultation - £85">Private GP Consultation - £85</option>
            <option value="Cardiology Consultation - £150">Cardiology Consultation - £150</option>
            <option value="Child Health Check - £95">Child Health Check - £95</option>
            <option value="Women’s Health Consultation - £120">Women’s Health Consultation - £120</option>
            <option value="Dermatology Consultation - £110">Dermatology Consultation - £110</option>
            <option value="Diagnostics & Blood Tests - From £60">Diagnostics & Blood Tests - From £60</option>
        </select>

        <label for="doctor">Preferred Doctor</label>
        <select id="doctor" name="doctor" required>
            <option value="">Select preferred doctor</option>
            <option value="Dr Hannah Cole - Private GP">Dr Hannah Cole - Private GP</option>
            <option value="Dr Marcus Adeyemi - Cardiologist">Dr Marcus Adeyemi - Cardiologist</option>
            <option value="Dr Sofia Bennett - Paediatrician">Dr Sofia Bennett - Paediatrician</option>
            <option value="Dr Aisha Khan - Women’s Health Specialist">Dr Aisha Khan - Women’s Health Specialist</option>
            <option value="Dr Nathan Brooks - Dermatologist">Dr Nathan Brooks - Dermatologist</option>
            <option value="Dr Emeka Lawson - Diagnostics Consultant">Dr Emeka Lawson - Diagnostics Consultant</option>
        </select>

        <label for="preferred_date">Preferred Date</label>
        <input type="date" id="preferred_date" name="preferred_date" required>

        <label for="preferred_time">Preferred Time</label>
        <input type="time" id="preferred_time" name="preferred_time" required>

        <label for="message">Message / Special Request</label>
        <textarea id="message" name="message" rows="5"></textarea>

        <div class="consent-box">
            <input type="checkbox" id="consent" name="consent" required>
            <span>I agree that my information can be used to process this appointment request.</span>
        </div>

        <button type="submit" class="btn">Submit Appointment Request</button>
    </form>
</section>

<section id="contact" class="contact-section">
    <h2>Contact Oakwood Care Clinic</h2>
    <p>Email: appointments@oakwoodcareclinic.co.uk</p>
    <p>Phone: 0121 890 4570</p>
    <p>Location: Birmingham, United Kingdom</p>
    <p>Opening Hours: Monday - Saturday, 8:00 AM - 6:00 PM</p>
</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Oakwood Care Clinic. All rights reserved.</p>
</footer>

<script src="js/main.js"></script>
</body>
</html>