<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Software Company - Software Testing Solutions</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Additional styles for homepage */
        .hero {
            padding: 180px 0 100px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            text-align: center;
            margin-top: 80px;
        }
        
        .hero h1 {
            font-size: 42px;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 18px;
            max-width: 800px;
            margin: 0 auto 30px;
            color: rgba(255, 255, 255, 0.9);
        }
        
        .features {
            padding: 80px 0;
            background-color: white;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .feature-card {
            background-color: var(--light-color);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            transition: var(--transition);
            box-shadow: var(--shadow);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .feature-card i {
            font-size: 48px;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }
        
        .feature-card h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--primary-color);
        }
        
        .cta {
            padding: 100px 0;
            background-color: #f5f7fa;
            text-align: center;
        }
        
        .cta h2 {
            font-size: 36px;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .cta p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto 40px;
            color: #666;
        }
        
        @media (max-width: 768px) {
            .hero {
                padding: 150px 0 80px;
            }
            
            .hero h1 {
                font-size: 32px;
            }
            
            .hero p {
                font-size: 16px;
            }
            
            .cta h2 {
                font-size: 28px;
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
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="offers.php">Offers</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="consultation.php">Free Consultation</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Advanced Software Testing Solutions for Security and Efficiency</h1>
            <p>At Advanced Software Company, we provide comprehensive tools and solutions for high-quality software testing and inspection, ensuring error-free and secure products for use.</p>
            <a href="contact.php" class="btn">Request a Special Offer</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Our Company?</h2>
                <p>We excel in providing unique solutions and exceptional services that make us the ideal choice for your software testing needs</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <i class="fas fa-tools"></i>
                    <h3>Advanced Tools</h3>
                    <p>We use the latest technologies and advanced tools in software testing, ensuring accurate results and efficient processes.</p>
                </div>
                
                <div class="feature-card">
                    <i class="fas fa-user-tie"></i>
                    <h3>Specialized Experts</h3>
                    <p>Our team of experts and professionals in software testing ensures high-quality service delivery.</p>
                </div>
                
                <div class="feature-card">
                    <i class="fas fa-headset"></i>
                    <h3>Continuous Technical Support</h3>
                    <p>We provide 24/7 technical support to ensure the continuous operation of your software without any problems.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta">
        <div class="container">
            <h2>Ready to Improve Your Software Quality?</h2>
            <p>Contact us today and get a free consultation about the best software testing solutions for your project.</p>
            <a href="contact.php" class="btn">Contact Us Now</a>
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
                    <p><i class="fas fa-phone"></i> +966 11 123 4567</p>
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