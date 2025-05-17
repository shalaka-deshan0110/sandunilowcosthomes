<div class="page-header">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in touch with our team to discuss your construction project</p>
    </div>
</div>

<style>
    .whatsapp-link, .call-link {
        display: inline-block;
        margin-left: 8px;
        font-size: 1.2em;
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

<section class="contact-section">
    <div class="container">
        <div class="contact-info-form">
            <div class="contact-info">
                <h2>Our Contact Information</h2>
                <p>We're here to help with your construction needs. Reach out to us through any of the following channels:</p>
                
                <div class="info-item">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="details">
                        <h3>Address</h3>
                        <p>26 Mahawatta, Kotugoda<br>Ja-Ela, Sri Lanka 11380</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="details">
                        <h3>Phone</h3>
                        <p>
                            Office: +94 727 160 139 
                            <a href="tel:+94727160139" class="call-link" title="Call via phone">
                                <i class="fas fa-phone-alt"></i>
                            </a>
                            <a href="https://wa.me/94727160139" class="whatsapp-link" target="_blank" title="Chat on WhatsApp">
                                <i class="fab fa-whatsapp"></i>
                            </a><br>
                            Mobile: +94 718 160 139
                            <a href="tel:+94718160139" class="call-link" title="Call via phone">
                                <i class="fas fa-phone-alt"></i>
                            </a>
                            <a href="https://wa.me/94718160139" class="whatsapp-link" target="_blank" title="Chat on WhatsApp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="details">
                        <h3>Email</h3>
                        <p>info@sandunilowcosthomes.lk<br>support@sandunilowcosthomes.lk</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="details">
                        <h3>Hours of Operation</h3>
                        <p>Monday - Friday: 8:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 2:00 PM<br>Sunday: Closed</p>
                    </div>
                </div>
                
                <div class="social-media">
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/sandunilowcosthomes" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/sandunilowcosthomes" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/sandunilowcosthomes" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/sandunilowcosthomes" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <h2>Send Us a Message</h2>
                <p>Fill out the form below, and we'll get back to you as soon as possible.</p>
                
                <?php
                $nameErr = $emailErr = $phoneErr = $messageErr = "";
                $name = $email = $phone = $subject = $message = "";
                $formSubmitted = false;
                
                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Validate name
                    if (empty($_POST["name"])) {
                        $nameErr = "Name is required";
                    } else {
                        $name = test_input($_POST["name"]);
                    }
                    
                    // Validate email
                    if (empty($_POST["email"])) {
                        $emailErr = "Email is required";
                    } else {
                        $email = test_input($_POST["email"]);
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $emailErr = "Invalid email format";
                        }
                    }
                    
                    // Validate phone (optional)
                    if (!empty($_POST["phone"])) {
                        $phone = test_input($_POST["phone"]);
                    }
                    
                    // Subject (optional)
                    if (!empty($_POST["subject"])) {
                        $subject = test_input($_POST["subject"]);
                    } else {
                        $subject = "Website Contact Form: $name";
                    }
                    
                    // Validate message
                    if (empty($_POST["message"])) {
                        $messageErr = "Message is required";
                    } else {
                        $message = test_input($_POST["message"]);
                    }
                    
                    // If no errors, process the form
                    if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
                        // Send email
                        $to = 'nandanapathmasiri94@gmail.com, info@sandunilowcosthomes.lk, salu86er@gmail.com, sandunilowcosthomes.1scyzg@zapiermail.com';
                        $email_subject = $subject;
                        $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage:\n$message";
                        $headers = "From: noreply@sandunilowcosthomes.lk\n";
                        $headers .= "Reply-To: $email";
                        
                        $mail_sent = mail($to, $email_subject, $email_body, $headers);
                        
                        $formSubmitted = true;
                        
                        // Reset form fields
                        $name = $email = $phone = $subject = $message = "";
                    }
                }
                ?>
                
                <?php if ($formSubmitted): ?>
                <div class="success-message">
                    <p><i class="fas fa-check-circle"></i> Thank you for contacting us! We'll get back to you soon.</p>
                </div>
                <?php endif; ?>
                
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?page=contact"); ?>">
                    <div class="form-group">
                        <label for="name">Name <span class="required">*</span></label>
                        <input type="text" id="name" name="name" value="<?php echo $name; ?>" class="<?php echo !empty($nameErr) ? 'error-input' : ''; ?>">
                        <?php if (!empty($nameErr)): ?>
                        <span class="error-message"><?php echo $nameErr; ?></span>
                        <?php endif; ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email <span class="required">*</span></label>
                        <input type="email" id="email" name="email" value="<?php echo $email; ?>" class="<?php echo !empty($emailErr) ? 'error-input' : ''; ?>">
                        <?php if (!empty($emailErr)): ?>
                        <span class="error-message"><?php echo $emailErr; ?></span>
                        <?php endif; ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" value="<?php echo $phone; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" value="<?php echo $subject; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message <span class="required">*</span></label>
                        <textarea id="message" name="message" rows="5" class="<?php echo !empty($messageErr) ? 'error-input' : ''; ?>"><?php echo $message; ?></textarea>
                        <?php if (!empty($messageErr)): ?>
                        <span class="error-message"><?php echo $messageErr; ?></span>
                        <?php endif; ?>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="map-section">
    <div class="container">
        <div class="section-header">
            <h2>Find Us</h2>
            <p>Visit our office location</p>
        </div>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3936.6938442133547!2d79.8947014!3d7.1132563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f1ba0831d429%3A0x6bfc959a76d533f7!2sSanduni%20Low%20Cost%20Homes!5e0!3m2!1sen!2slk!4v1700000000000!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2>Frequently Asked Questions</h2>
            <p>Common questions about our construction services</p>
        </div>
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How long does a typical construction project take?</h3>
                    <span class="toggle-icon"><i class="fas fa-plus"></i></span>
                </div>
                <div class="faq-answer">
                    <p>The duration of a construction project depends on its size and complexity. A small renovation might take a few weeks, while a custom home build could take several months. During your initial consultation, we'll provide a detailed timeline for your specific project.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Do you provide free estimates?</h3>
                    <span class="toggle-icon"><i class="fas fa-plus"></i></span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we provide free estimates for all our construction services. Contact us through our form or call us directly to schedule a consultation.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Are you licensed and insured?</h3>
                    <span class="toggle-icon"><i class="fas fa-plus"></i></span>
                </div>
                <div class="faq-answer">
                    <p>Yes, Sanduni Low Cost Homes is fully licensed and insured. We maintain all necessary certifications and insurance policies to protect our clients and our work.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Do you provide warranties for your work?</h3>
                    <span class="toggle-icon"><i class="fas fa-plus"></i></span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we stand behind our work with a comprehensive warranty. The specifics vary by project type, but we'll provide detailed warranty information in your contract.</p>
                </div>
            </div>
        </div>
    </div>
</section>
