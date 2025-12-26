<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Offers - Advanced Software Company</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Additional styles for offers page */
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
        
        .pricing {
            padding: 80px 0;
            background-color: white;
        }
        
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .pricing-card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            border: 1px solid #eee;
        }
        
        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .pricing-card.popular {
            transform: scale(1.05);
            border: 2px solid var(--accent-color);
        }
        
        .pricing-card.popular:hover {
            transform: scale(1.05) translateY(-10px);
        }
        
        .popular-badge {
            position: absolute;
            top: 20px;
            right: -35px;
            background-color: var(--accent-color);
            color: white;
            padding: 8px 35px;
            font-weight: 600;
            transform: rotate(45deg);
            font-size: 14px;
        }
        
        .pricing-header {
            padding: 30px;
            text-align: center;
            background-color: var(--primary-color);
            color: white;
        }
        
        .pricing-header h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .pricing-price {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .pricing-period {
            color: rgba(255, 255, 255, 0.8);
            font-size: 16px;
        }
        
        .pricing-body {
            padding: 30px;
        }
        
        .pricing-features {
            list-style: none;
            margin-bottom: 30px;
        }
        
        .pricing-features li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .pricing-features i {
            color: var(--accent-color);
            margin-right: 10px;
        }
        
        .pricing-features .disabled {
            color: #ccc;
        }
        
        .pricing-features .disabled i {
            color: #ccc;
        }
        
        .faq {
            padding: 80px 0;
            background-color: #f5f7fa;
        }
        
        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .faq-item {
            background-color: white;
            margin-bottom: 15px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }
        
        .faq-question {
            padding: 20px;
            font-size: 18px;
            font-weight: 600;
            color: var(--primary-color);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .faq-question i {
            transition: transform 0.3s;
        }
        
        .faq-item.active .faq-question i {
            transform: rotate(180deg);
        }
        
        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s, padding 0.3s;
        }
        
        .faq-item.active .faq-answer {
            padding: 0 20px 20px;
            max-height: 300px;
        }
        
        @media (max-width: 992px) {
            .pricing-card.popular {
                transform: scale(1);
            }
            
            .pricing-card.popular:hover {
                transform: translateY(-10px);
            }
        }
        
        @media (max-width: 768px) {
            .page-header {
                padding: 130px 0 60px;
            }
            
            .page-header h1 {
                font-size: 32px;
            }
            
            .pricing-price {
                font-size: 36px;
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
                    <li><a href="offers.php" class="active">Offers</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="consultation.php">Free Consultation</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Our Special Offers</h1>
            <p>Choose the package that suits your software project needs and get the best software testing services</p>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing">
        <div class="container">
            <div class="pricing-grid">
                <!-- Basic Package -->
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Basic Package</h3>
                        <div class="pricing-price">$299</div>
                        <div class="pricing-period">Per Month</div>
                    </div>
                    <div class="pricing-body">
                        <ul class="pricing-features">
                            <li><i class="fas fa-check"></i> <span>Software testing for one project</span></li>
                            <li><i class="fas fa-check"></i> <span>Weekly error reports</span></li>
                            <li><i class="fas fa-check"></i> <span>Basic security testing</span></li>
                            <li><i class="fas fa-check"></i> <span>Email technical support</span></li>
                            <li class="disabled"><i class="fas fa-times"></i> <span>Comprehensive performance testing</span></li>
                            <li class="disabled"><i class="fas fa-times"></i> <span>Phone technical support</span></li>
                        </ul>
                        <a href="contact.php" class="btn" style="width: 100%; text-align: center;">Choose This Package</a>
                    </div>
                </div>
                
                <!-- Advanced Package -->
                <div class="pricing-card popular">
                    <div class="popular-badge">Most Popular</div>
                    <div class="pricing-header">
                        <h3>Advanced Package</h3>
                        <div class="pricing-price">$599</div>
                        <div class="pricing-period">Per Month</div>
                    </div>
                    <div class="pricing-body">
                        <ul class="pricing-features">
                            <li><i class="fas fa-check"></i> <span>Software testing for 3 projects</span></li>
                            <li><i class="fas fa-check"></i> <span>Detailed daily reports</span></li>
                            <li><i class="fas fa-check"></i> <span>Advanced security testing</span></li>
                            <li><i class="fas fa-check"></i> <span>Comprehensive performance testing</span></li>
                            <li><i class="fas fa-check"></i> <span>Continuous phone technical support</span></li>
                            <li><i class="fas fa-check"></i> <span>Monthly technical consultations</span></li>
                        </ul>
                        <a href="contact.php" class="btn" style="width: 100%; text-align: center;">Choose This Package</a>
                    </div>
                </div>
                
                <!-- Enterprise Package -->
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Enterprise Package</h3>
                        <div class="pricing-price">$999</div>
                        <div class="pricing-period">Per Month</div>
                    </div>
                    <div class="pricing-body">
                        <ul class="pricing-features">
                            <li><i class="fas fa-check"></i> <span>Unlimited software testing</span></li>
                            <li><i class="fas fa-check"></i> <span>Instant interactive reports</span></li>
                            <li><i class="fas fa-check"></i> <span>Integrated security testing</span></li>
                            <li><i class="fas fa-check"></i> <span>Advanced performance and high-load testing</span></li>
                            <li><i class="fas fa-check"></i> <span>Dedicated 24/7 technical support</span></li>
                            <li><i class="fas fa-check"></i> <span>Weekly technical consultations</span></li>
                        </ul>
                        <a href="contact.php" class="btn" style="width: 100%; text-align: center;">Choose This Package</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Answers to the most common questions about our offers and services</p>
            </div>
            
            <div class="faq-container">
                <!-- Question 1 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Can I change the package later?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, you can upgrade or downgrade between packages at any time. When upgrading, the difference will be calculated for payment, and when downgrading, the remaining amount will be credited to your account.</p>
                    </div>
                </div>
                
                <!-- Question 2 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Do you offer a free trial?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we offer a 14-day free trial for all packages. During this period, you can test all the features of the selected package without any commitment.</p>
                    </div>
                </div>
                
                <!-- Question 3 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Do you offer discounts for large companies?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we offer special discounts for large companies and agencies that need to test more than 5 projects simultaneously. Contact us for a customized offer.</p>
                    </div>
                </div>
                
                <!-- Question 4 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How are reports delivered?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>You receive reports through our dedicated platform with email notifications. Reports are detailed and include analyses and repair suggestions, and can be exported in various formats (PDF, Excel, CSV).</p>
                    </div>
                </div>
                
                <!-- Question 5 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What is the contract duration?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>All packages are monthly and can be canceled at any time without cancellation fees. We also offer a 20% discount for annual subscriptions paid in advance.</p>
                    </div>
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
    <script>
        // Activate FAQ
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                
                question.addEventListener('click', () => {
                    // Close all other items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains('active')) {
                            otherItem.classList.remove('active');
                        }
                    });
                    
                    // Toggle current item
                    item.classList.toggle('active');
                });
            });
        });
    </script>
</body>
</html>