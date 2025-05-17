    </main>
    <style>
        .whatsapp-link, .call-link {
            display: inline-block;
            margin-left: 4px;
            font-size: 0.9em;
            transition: transform 0.2s ease;
        }
        .whatsapp-link {
            color: #25D366;
        }
        .call-link {
            color: #007bff;
        }
        .whatsapp-link:hover, .call-link:hover {
            transform: scale(1.2);
        }
        .whatsapp-link:hover {
            color: #128C7E;
        }
        .call-link:hover {
            color: #0056b3;
        }
    </style>
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section about">
                    <h2>Sanduni Low Cost Homes</h2>
                    <p>Quality construction services at affordable prices. Building dreams one project at a time.</p>
                    <div class="contact">
                        <span>
                            <i class="fas fa-phone"></i> &nbsp; 
                            +94 727 160 139 
                            <a href="tel:+94727160139" class="call-link" title="Call via phone">
                                <i class="fas fa-phone-alt"></i>
                            </a>
                            <a href="https://wa.me/94727160139" class="whatsapp-link" target="_blank" title="Chat on WhatsApp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            / 
                            +94 718 160 139
                            <a href="tel:+94718160139" class="call-link" title="Call via phone">
                                <i class="fas fa-phone-alt"></i>
                            </a>
                            <a href="https://wa.me/94718160139" class="whatsapp-link" target="_blank" title="Chat on WhatsApp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </span>
                        <span><i class="fas fa-envelope"></i> &nbsp; info@sandunilowcosthomes.lk</span>
                        <span><i class="fas fa-map-marker-alt"></i> &nbsp; 26 Mahawatta, Kotugoda, Ja-Ela, Sri Lanka 11380</span>
                    </div>
                    <div class="socials">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="footer-section links">
                    <h2>Quick Links</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/projects">Projects</a></li>
                        <li><a href="/testimonials">Testimonials</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section contact-form" style="color: #000000;">
                    <h2 style="color: #000000;">Quick Inquiry</h2>
                    <?php
                    // Initialize variables
                    $footerNameErr = $footerEmailErr = $footerMessageErr = "";
                    $footerName = $footerEmail = $footerPhone = $footerMessage = "";
                    $footerFormSubmitted = false;
                    
                    // Check if form was submitted via POST method
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['footer_submit'])) {
                        // Validate name
                        if (empty($_POST["footer_name"])) {
                            $footerNameErr = "Name is required";
                        } else {
                            $footerName = test_footer_input($_POST["footer_name"]);
                        }
                        
                        // Validate email
                        if (empty($_POST["footer_email"])) {
                            $footerEmailErr = "Email is required";
                        } else {
                            $footerEmail = test_footer_input($_POST["footer_email"]);
                            if (!filter_var($footerEmail, FILTER_VALIDATE_EMAIL)) {
                                $footerEmailErr = "Invalid email format";
                            }
                        }
                        
                        // Phone is optional, but sanitize if provided
                        if (!empty($_POST["footer_phone"])) {
                            $footerPhone = test_footer_input($_POST["footer_phone"]);
                        }
                        
                        // Validate message
                        if (empty($_POST["footer_message"])) {
                            $footerMessageErr = "Message is required";
                        } else {
                            $footerMessage = test_footer_input($_POST["footer_message"]);
                        }
                        
                        // If no errors, process the form
                        if (empty($footerNameErr) && empty($footerEmailErr) && empty($footerMessageErr)) {
                            // In a real application, you would send an email here
                            // For example:
                            // $to = "info@sandunilowcosthomes.lk";
                            // $subject = "New Quick Inquiry from $footerName";
                            // $messageBody = "Name: $footerName\nEmail: $footerEmail\nPhone: $footerPhone\nMessage: $footerMessage";
                            // mail($to, $subject, $messageBody);
                            
                            $footerFormSubmitted = true;
                            
                            // Reset form fields
                            $footerName = $footerEmail = $footerPhone = $footerMessage = "";
                        }
                    }
                    
                    // Function to sanitize input data
                    function test_footer_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
                    ?>
                    
                    <?php if ($footerFormSubmitted): ?>
                        <div class="footer-success-message">
                            <p><i class="fas fa-check-circle"></i> Thank you for reaching out! We'll get back to you soon.</p>
                        </div>
                    <?php else: ?>
                        <form method="post" action="/<?php echo $page; ?>" class="footer-contact-form">
                            <div class="form-row">
                                <div class="form-group footer-form-group<?php echo !empty($footerNameErr) ? ' has-error' : ''; ?>">
                                    <input type="text" name="footer_name" class="text-input contact-input" placeholder="Your name" value="<?php echo $footerName; ?>">
                                    <?php if (!empty($footerNameErr)): ?>
                                        <span class="footer-error"><?php echo $footerNameErr; ?></span>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="form-group footer-form-group<?php echo !empty($footerEmailErr) ? ' has-error' : ''; ?>">
                                    <input type="email" name="footer_email" class="text-input contact-input" placeholder="Your email" value="<?php echo $footerEmail; ?>">
                                    <?php if (!empty($footerEmailErr)): ?>
                                        <span class="footer-error"><?php echo $footerEmailErr; ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <div class="form-group footer-form-group">
                                <input type="text" name="footer_phone" class="text-input contact-input" placeholder="Your phone (optional)" value="<?php echo $footerPhone; ?>">
                            </div>
                            
                            <div class="form-group footer-form-group<?php echo !empty($footerMessageErr) ? ' has-error' : ''; ?>">
                                <textarea name="footer_message" class="text-input contact-input" placeholder="How can we help you?" rows="3"><?php echo $footerMessage; ?></textarea>
                                <?php if (!empty($footerMessageErr)): ?>
                                    <span class="footer-error"><?php echo $footerMessageErr; ?></span>
                                <?php endif; ?>
                            </div>
                            
                            <button type="submit" name="footer_submit" class="btn btn-primary btn-block">Send Message</button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; <?php echo date('Y'); ?> Sanduni Low Cost Homes. All rights reserved.
            </div>
        </div>
    </footer>
    <!-- JavaScript Files -->
    <script src="js/script.js"></script>
</body>
</html>
