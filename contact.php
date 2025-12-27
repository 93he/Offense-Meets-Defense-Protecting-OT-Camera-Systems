<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Advanced Software Company</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Additional styles for contact page */
        .page-header {
            padding: 150px 0 80px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            text-align: center;
            margin-top: 80px;
        }
        
        .page-header h1 {
            font-size: 42px;
            margin-bottom: 20px;
        }
        
        .page-header p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto;
            color: rgba(255, 255, 255, 0.9);
        }
        
        .contact-section {
            padding: 80px 0;
            background-color: white;
        }
        
        .contact-container {
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
        }
        
        .contact-info {
            flex: 1;
            min-width: 300px;
            padding: 30px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: var(--shadow);
        }
        
        .contact-form {
            flex: 1;
            min-width: 300px;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: var(--shadow);
            border: 1px solid #eee;
        }
        
        .contact-info h3 {
            font-size: 28px;
            color: var(--primary-color);
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--accent-color);
        }
        
        .contact-details {
            margin-top: 30px;
        }
        
        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }
        
        .contact-icon {
            background-color: var(--accent-color);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .contact-text h4 {
            font-size: 18px;
            margin-bottom: 5px;
            color: var(--primary-color);
        }
        
        .contact-text p {
            color: #666;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: var(--transition);
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: var(--accent-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(26, 188, 156, 0.1);
        }
        
        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .form-row .form-group {
            flex: 1;
            min-width: 200px;
        }
        
        .map-section {
            padding: 0 0 80px;
        }
        
        .map-container {
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            background-color: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        
        .map-placeholder {
            text-align: center;
            color: #666;
        }
        
        .map-placeholder i {
            font-size: 60px;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }
        
        @media (max-width: 768px) {
            .page-header {
                padding: 130px 0 60px;
            }
            
            .page-header h1 {
                font-size: 32px;
            }
            
            .contact-info,
            .contact-form {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="index.php" class="logo">
                <div class="logo-icon">
                    <i class="fas fa-code"></i>
                </div>
                <div class="logo-text">Advanced Software</div>
            </a>
            
            <button class="mobile-menu-btn" id="menuBtn">
                <i class="fas fa-bars"></i>
            </button>
            
            <nav id="mainNav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="offers.php">Offers</a></li>
                    <li><a href="contact.php" class="active">Contact Us</a></li>
                    <li><a href="consultation.php">Free Consultation</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Contact Us</h1>
            <p>We're happy to provide support and free consultations about the best software testing solutions for your project</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-container">
                <!-- Contact Information -->
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p>We're here to help you choose the best software testing solutions for your project. Contact us through any of the following methods:</p>
                    
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Address</h4>
                                <p>Riyadh, Saudi Arabia<br>King Fahd Road, Technology Tower</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Phone</h4>
                                <p>+966 11 123 4567<br>+966 55 123 4567 (WhatsApp)</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Email</h4>
                                <p>info@software-advanced.com<br>support@software-advanced.com</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Working Hours</h4>
                                <p>Sunday to Thursday<br>8 AM - 5 PM (Saudi Time)</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="contact-form">
                    <h3 style="color: var(--primary-color); margin-bottom: 25px; padding-bottom: 15px; border-bottom: 2px solid var(--accent-color);">Send Message</h3>
                    
                    <form id="contactForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name *</label>
                                <input type="text" id="name" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="company">Company Name</label>
                                <input type="text" id="company">
                            </div>
                            
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="service">Required Service Type</label>
                            <select id="service">
                                <option value="">Select Service</option>
                                <option value="testing">Code Error Testing</option>
                                <option value="security">Security & Vulnerability Testing</option>
                                <option value="performance">Performance & Load Testing</option>
                                <option value="consulting">Technical Consulting</option>
                                <option value="other">Other Service</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Your Message *</label>
                            <textarea id="message" rows="6" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn" style="width: 100%; padding: 15px; font-size: 18px;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Location</h2>
                <p>You can visit our main headquarters in Riyadh during official working hours</p>
            </div>
            
            <div class="map-container">
                <div class="map-placeholder">
                    <i class="fas fa-map-marked-alt"></i>
                    <h3>Company Location Map</h3>
                    <p>Riyadh, Saudi Arabia - King Fahd Road, Technology Tower</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h4>About Company</h4>
                    <p>A leading company in providing high-quality software testing solutions and tools, ensuring safe and error-free software products.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="offers.php">Offers</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h4>Our Services</h4>
                    <ul class="footer-links">
                        <li><a href="services.php#testing">Error Testing</a></li>
                        <li><a href="services.php#security">Security Testing</a></li>
                        <li><a href="services.php#performance">Performance Testing</a></li>
                        <li><a href="services.php#consulting">Technical Consulting</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h4>Contact Information</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Riyadh, Saudi Arabia</p>
                    <p><i class="fas fa-phone"></i> +9xx 00 000 0000</p>
                    <p><i class="fas fa-envelope"></i> info@software-advanced.com</p>
                </div>
            </div>
            
            <div class="copyright">
                <p>© 2023 Advanced Software Company. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>

</html>
