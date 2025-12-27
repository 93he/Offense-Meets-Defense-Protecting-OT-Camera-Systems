<?php include('header.php'); ?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Consultation Session - Advanced Software Company</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Styles unchanged */
    </style>
</head>
<body>
    <!-- Top bar -->
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
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="consultation.php" class="active">Free Consultation</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Page header -->
    <section class="page-header">
        <div class="container">
            <h1>Book a <span class="highlight">Free Consultation Session</span></h1>
            <p>Get a free technical consultation with one of our experts to analyze your software project needs.</p>
            <p>Session Duration: 30 minutes • Online • No obligation</p>
        </div>
    </section>

    <!-- Consultation booking section -->
    <section class="consultation-section">
        <div class="container">
            <div class="consultation-container">
                <!-- Consultation form -->
                <div class="consultation-form-container">
                    <div class="consultation-form">
                        <div class="form-header">
                            <h3>Book Your Free Consultation Now</h3>
                            <p>Fill out the form below and we will contact you to schedule your session.</p>
                        </div>
                        
                        <!-- Form progress bar -->
                        <div class="form-progress">
                            <div class="progress-step active" data-step="1">
                                <div class="step-circle">1</div>
                                <div class="step-label">Your Info</div>
                            </div>
                            <div class="progress-step" data-step="2">
                                <div class="step-circle">2</div>
                                <div class="step-label">Your Project</div>
                            </div>
                            <div class="progress-step" data-step="3">
                                <div class="step-circle">3</div>
                                <div class="step-label">Schedule</div>
                            </div>
                        </div>
                        
                        <!-- Form -->
                        <form id="consultationForm">
                            <!-- Step 1: Personal Info -->
                            <div class="form-step active" id="step1">
                                <h4 style="color: var(--primary-color); margin-bottom: 20px;">Contact Information</h4>
                                
                                <div class="form-row">
                                    <div class="form-group required">
                                        <label for="fullName">Full Name</label>
                                        <input type="text" id="fullName" required>
                                    </div>
                                    
                                    <div class="form-group required">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" required>
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group required">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" id="phone" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="company">Company Name</label>
                                        <input type="text" id="company">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="jobTitle">Job Title</label>
                                    <select id="jobTitle">
                                        <option value="">Select Job Title</option>
                                        <option value="owner">Owner/Company Manager</option>
                                        <option value="cto">CTO</option>
                                        <option value="developer">Software Developer</option>
                                        <option value="manager">Project Manager</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                
                                <div class="form-navigation">
                                    <div></div>
                                    <button type="button" class="btn btn-next" data-next="2">Next</button>
                                </div>
                            </div>
                            
                            <!-- Step 2: Project Info -->
                            <div class="form-step" id="step2">
                                <h4 style="color: var(--primary-color); margin-bottom: 20px;">Project Information</h4>
                                
                                <div class="form-group required">
                                    <label>Project Type</label>
                                    <div class="radio-group">
                                        <div class="radio-option">
                                            <input type="radio" id="projectType1" name="projectType" value="website" checked>
                                            <label for="projectType1">Website</label>
                                        </div>
                                        <div class="radio-option">
                                            <input type="radio" id="projectType2" name="projectType" value="mobile">
                                            <label for="projectType2">Mobile App</label>
                                        </div>
                                        <div class="radio-option">
                                            <input type="radio" id="projectType3" name="projectType" value="desktop">
                                            <label for="projectType3">Desktop Application</label>
                                        </div>
                                        <div class="radio-option">
                                            <input type="radio" id="projectType4" name="projectType" value="other">
                                            <label for="projectType4">Other</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="projectStage">Project Stage</label>
                                    <select id="projectStage">
                                        <option value="">Select Stage</option>
                                        <option value="idea">Idea</option>
                                        <option value="planning">Planning</option>
                                        <option value="development">In Development</option>
                                        <option value="testing">Testing</option>
                                        <option value="launched">Launched</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="projectDescription">Brief Project Description</label>
                                    <textarea id="projectDescription" rows="4" placeholder="Tell us briefly about your project..."></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label>Services you are interested in:</label>
                                    <div class="checkbox-group">
                                        <input type="checkbox" id="service1" name="services" value="testing">
                                        <label for="service1">Software Bug Testing</label>
                                    </div>
                                    <div class="checkbox-group">
                                        <input type="checkbox" id="service2" name="services" value="security">
                                        <label for="service2">Security & Vulnerability Testing</label>
                                    </div>
                                    <div class="checkbox-group">
                                        <input type="checkbox" id="service3" name="services" value="performance">
                                        <label for="service3">Performance & Load Testing</label>
                                    </div>
                                    <div class="checkbox-group">
                                        <input type="checkbox" id="service4" name="services" value="consulting">
                                        <label for="service4">Technical Consulting</label>
                                    </div>
                                </div>
                                
                                <div class="form-navigation">
                                    <button type="button" class="btn btn-previous" data-previous="1">Previous</button>
                                    <button type="button" class="btn btn-next" data-next="3">Next</button>
                                </div>
                            </div>
                            
                            <!-- Step 3: Schedule -->
                            <div class="form-step" id="step3">
                                <h4 style="color: var(--primary-color); margin-bottom: 20px;">Select Your Preferred Schedule</h4>
                                
                                <div class="form-group required">
                                    <label>Preferred Day</label>
                                    <div class="radio-group">
                                        <div class="radio-option">
                                            <input type="radio" id="day1" name="preferredDay" value="sunday" checked>
                                            <label for="day1">Sunday</label>
                                        </div>
                                        <div class="radio-option">
                                            <input type="radio" id="day2" name="preferredDay" value="monday">
                                            <label for="day2">Monday</label>
                                        </div>
                                        <div class="radio-option">
                                            <input type="radio" id="day3" name="preferredDay" value="tuesday">
                                            <label for="day3">Tuesday</label>
                                        </div>
                                        <div class="radio-option">
                                            <input type="radio" id="day4" name="preferredDay" value="wednesday">
                                            <label for="day4">Wednesday</label>
                                        </div>
                                        <div class="radio-option">
                                            <input type="radio" id="day5" name="preferredDay" value="thursday">
                                            <label for="day5">Thursday</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group required">
                                    <label>Preferred Time</label>
                                    <div class="radio-group">
                                        <div class="radio-option">
                                            <input type="radio" id="time1" name="preferredTime" value="morning" checked>
                                            <label for="time1">Morning (9 AM - 12 PM)</label>
                                        </div>
                                        <div class="radio-option">
                                            <input type="radio" id="time2" name="preferredTime" value="afternoon">
                                            <label for="time2">Afternoon (12 PM - 4 PM)</label>
                                        </div>
                                        <div class="radio-option">
                                            <input type="radio" id="time3" name="preferredTime" value="evening">
                                            <label for="time3">Evening (4 PM - 7 PM)</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="calendar-preview">
                                    <h4>Suggested Session Times</h4>
                                    <p>We will send a confirmation email with the final schedule.</p>
                                    <div class="calendar-slots">
                                        <div class="calendar-slot">Sunday 10:00 AM</div>
                                        <div class="calendar-slot">Monday 2:00 PM</div>
                                        <div class="calendar-slot">Tuesday 11:00 AM</div>
                                        <div class="calendar-slot">Wednesday 4:00 PM</div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="checkbox-group">
                                        <input type="checkbox" id="agreeTerms" required>
                                        <label for="agreeTerms">I agree to the Terms of Service & Privacy Policy and wish to receive offers and updates via email</label>
                                    </div>
                                </div>
                                
                                <div class="form-navigation">
                                    <button type="button" class="btn btn-previous" data-previous="2">Previous</button>
                                    <button type="submit" class="btn">Book Session</button>
                                </div>
                            </div>
                            
                            <!-- Success Message -->
                            <div class="success-message" id="successMessage">
                                <div class="success-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h3>Booking Successful!</h3>
                                <p>Thank you <span id="userName"></span>, your free consultation request has been successfully received. We will contact you at <span id="userPhone"></span> to confirm the final schedule within 24 hours.</p>
                                <p>A confirmation has been sent to your email: <span id="userEmail"></span></p>
                                <a href="index.php" class="btn" style="margin-top: 20px;">Back to Home</a>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Consultation Info -->
                <div class="consultation-info">
                    <h3>What You Will Learn in the Session</h3>
                    <p>The free consultation session lasts 30 minutes with one of our software testing experts. During the session, we will discuss:</p>
                    
                    <ul class="consultation-benefits">
                        <li><i class="fas fa-check-circle"></i> <span>Analyze your software project needs</span></li>
                        <li><i class="fas fa-check-circle"></i> <span>Identify strengths and weaknesses in your software</span></li>
                        <li><i class="fas fa-check-circle"></i> <span>Suggest the best software testing solutions</span></li>
                        <li><i class="fas fa-check-circle"></i> <span>Estimate costs and timelines</span></li>
                        <li><i class="fas fa-check-circle"></i> <span>Answer all your technical questions</span></li>
                        <li><i class="fas fa-check-circle"></i> <span>Create a custom action plan for your project</span></li>
                    </ul>
                    
                    <div class="expert-info">
                        <div class="expert-image">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h4>Dr. Ahmed Al-Khalid</h4>
                        <div class="expert-title">Software Testing Expert - 15 Years Experience</div>
                        <p>The consultation session will be led by one of our highly experienced software testing experts.</p>
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
                    <h4>About Us</h4>
                    <p>A leading company providing high-quality software testing solutions and tools, ensuring safe and error-free software products.</p>
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
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="consultation.php">Free Consultation</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h4>Our Services</h4>
                    <ul class="footer-links">
                        <li><a href="services.php#testing">Bug Testing</a></li>
                        <li><a href="services.php#security">Security Testing</a></li>
                        <li><a href="services.php#performance">Performance Testing</a></li>
                        <li><a href="services.php#consulting">Technical Consulting</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h4>Contact Info</h4>
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
    <script>
        /* JS unchanged */
    </script>
</body>
</html>

