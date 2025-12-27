<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Advanced Software Company</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Additional styles for services page */
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
        
        .services-details {
            padding: 80px 0;
            background-color: white;
        }
        
        .service-item {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 80px;
            padding: 40px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: var(--shadow);
        }
        
        .service-item:nth-child(even) {
            flex-direction: row-reverse;
        }
        
        .service-content {
            flex: 1;
            min-width: 300px;
            padding: 20px;
        }
        
        .service-image {
            flex: 1;
            min-width: 300px;
            text-align: center;
            padding: 20px;
        }
        
        .service-image i {
            font-size: 80px;
            color: var(--secondary-color);
        }
        
        .service-content h3 {
            font-size: 28px;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .service-features {
            list-style: none;
            margin-top: 20px;
        }
        
        .service-features li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        
        .service-features i {
            color: var(--accent-color);
            margin-right: 10px;
        }
        
        .services-overview {
            padding: 80px 0;
            background-color: #f5f7fa;
        }
        
        .overview-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .overview-item {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .overview-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .overview-item i {
            font-size: 40px;
            color: var(--accent-color);
            margin-bottom: 20px;
        }
        
        .overview-item h4 {
            font-size: 20px;
            margin-bottom: 15px;
            color: var(--primary-color);
        }
        
        @media (max-width: 768px) {
            .page-header {
                padding: 130px 0 60px;
            }
            
            .page-header h1 {
                font-size: 32px;
            }
            
            .service-item {
                padding: 20px;
                margin-bottom: 50px;
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
                    <li><a href="services.php" class="active">Services</a></li>
                    <li><a href="offers.php">Offers</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="consultation.php">Free Consultation</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Our Specialized Services</h1>
            <p>We provide a comprehensive set of software testing and inspection services that meet the needs of all types of software projects</p>
        </div>
    </section>

    <!-- Service Details -->
    <section class="services-details">
        <div class="container">
            <!-- Code Error Testing Service -->
            <div class="service-item" id="testing">
                <div class="service-content">
                    <h3>Code Error Testing</h3>
                    <p>We provide a comprehensive service for discovering software errors and technical problems in early development stages using advanced tools. We guarantee you software free of defects and errors that might affect their performance.</p>
                    
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> <span>Source code inspection to discover logical errors</span></li>
                        <li><i class="fas fa-check"></i> <span>Unit testing and integration testing</span></li>
                        <li><i class="fas fa-check"></i> <span>Compatibility testing with different browsers</span></li>
                        <li><i class="fas fa-check"></i> <span>Detailed reports on errors and how to fix them</span></li>
                    </ul>
                </div>
                <div class="service-image">
                    <i class="fas fa-bug"></i>
                </div>
            </div>
            
            <!-- Security Testing Service -->
            <div class="service-item" id="security">
                <div class="service-content">
                    <h3>Security & Vulnerability Testing</h3>
                    <p>We examine security vulnerabilities and conduct penetration testing to ensure maximum protection for software. We use the latest security testing technologies to discover vulnerabilities before attackers can exploit them.</p>
                    
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> <span>Injection vulnerability testing (SQL Injection, XSS)</span></li>
                        <li><i class="fas fa-check"></i> <span>User permissions testing and access control</span></li>
                        <li><i class="fas fa-check"></i> <span>Data encryption and protection testing</span></li>
                        <li><i class="fas fa-check"></i> <span>User session testing and authentication management</span></li>
                    </ul>
                </div>
                <div class="service-image">
                    <i class="fas fa-shield-alt"></i>
                </div>
            </div>
            
            <!-- Performance Testing Service -->
            <div class="service-item" id="performance">
                <div class="service-content">
                    <h3>Performance & Load Testing</h3>
                    <p>We test software performance under different loads to ensure their efficiency and speed in production environments. We guarantee that your software will handle any number of users without delay or downtime.</p>
                    
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> <span>Load testing under different stress levels</span></li>
                        <li><i class="fas fa-check"></i> <span>Response time and loading speed testing</span></li>
                        <li><i class="fas fa-check"></i> <span>Memory usage and data processing analysis</span></li>
                        <li><i class="fas fa-check"></i> <span>Identifying bottlenecks and suggesting improvements</span></li>
                    </ul>
                </div>
                <div class="service-image">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="services-overview">
        <div class="container">
            <div class="section-title">
                <h2>Additional Services</h2>
                <p>In addition to basic testing services, we offer other specialized services to support your software projects</p>
            </div>
            
            <div class="overview-grid">
                <div class="overview-item">
                    <i class="fas fa-users"></i>
                    <h4>User Experience Testing</h4>
                    <p>Testing usability and user experience to ensure customer satisfaction.</p>
                </div>
                
                <div class="overview-item">
                    <i class="fas fa-mobile-alt"></i>
                    <h4>Mobile Applications Testing</h4>
                    <p>Testing smartphone applications across different platforms and devices.</p>
                </div>
                
                <div class="overview-item">
                    <i class="fas fa-cloud"></i>
                    <h4>Cloud Services Testing</h4>
                    <p>Testing and evaluating cloud services and applications.</p>
                </div>
                
                <div class="overview-item" id="consulting">
                    <i class="fas fa-comments"></i>
                    <h4>Technical Consultations</h4>
                    <p>Providing specialized technical consultations to improve your software quality.</p>
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
