<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Happiness Horizon Travel</title>
    <link rel="stylesheet" href="Css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <?php require_once 'includes/templates/header.html.php'; ?>


    <!-- Page Hero -->
    <section class="page-hero contact-hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Get in Touch</h1>
            <p>Start your journey to happiness with us</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-page">
        <div class="container">
            <div class="contact-page-layout">
                <!-- Contact Form -->
                <div class="contact-form-section">
                    <h2>Send Us a Message</h2>
                    <p>Fill out the form below and we'll get back to you within 24 hours</p>

                    <form class="contact-form-detailed">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name *</label>
                                <input type="text" id="firstName" name="firstName" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name *</label>
                                <input type="text" id="lastName" name="lastName" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" id="country" name="country">
                        </div>

                        <div class="form-group">
                            <label for="tour">Interested Tour Package</label>
                            <select id="tour" name="tour">
                                <option value="">Select a tour (optional)</option>
                                <option value="5-day">Quick Bhutan Getaway (5 Days)</option>
                                <option value="6-day">Taste of Happiness (6 Days)</option>
                                <option value="7-day">The Living Heritage (7 Days)</option>
                                <option value="8-day">Journey Through Culture (8 Days)</option>
                                <option value="9-day">Best of Bhutan (9 Days)</option>
                                <option value="honeymoon">Honeymoon Package</option>
                                <option value="custom">Custom Tour</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="travelers">Number of Travelers</label>
                                <input type="number" id="travelers" name="travelers" min="1" value="1">
                            </div>
                            <div class="form-group">
                                <label for="travelDate">Preferred Travel Date</label>
                                <input type="date" id="travelDate" name="travelDate">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="meal">Meal Types</label>
                            <select id="meal" name="meal">
                                <option value="">Select a meal type (optional)</option>
                                <option value="EP">European Plan (EP)</option>
                                <option value="CP">Continental Plan (CP)</option>
                                <option value="BP">Bermuda Plan (BP)</option>
                                <option value="MAP">Modified American Plan (MAP)</option>
                                <option value="AP">American Plan (AP)</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="message">Your Message *</label>
                            <textarea id="message" name="message" rows="6" required placeholder="Tell us about your travel plans, interests, and any special requirements..."></textarea>
                        </div>

                        <div class="form-group">
                            <label class="checkbox-label">
                                <input type="checkbox" required>
                                I agree to receive travel information and updates from Happiness Horizon Travel
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-full">Send Message</button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="contact-info-section">
                    <div class="contact-info-card">
                        <h3>Contact Information</h3>
                        <p>We're here to help you plan your perfect Bhutan adventure</p>

                        <div class="contact-details-list">
                            <div class="contact-detail-item">
                                <div class="contact-icon">📧</div>
                                <div>
                                    <strong>Email</strong>
                                    <p>info@happinesshorizontravel.com</p>
                                </div>
                            </div>

                            <div class="contact-detail-item">
                                <div class="contact-icon">📞</div>
                                <div>
                                    <strong>Phone</strong>
                                    <p>+975 16108570</p>
                                </div>
                            </div>

                            <div class="contact-detail-item">
                                <div class="contact-icon">💬</div>
                                <div>
                                    <strong>WhatsApp</strong>
                                    <p>+975 16108570</p>
                                </div>
                            </div>

                            <div class="contact-detail-item">
                                <div class="contact-icon">📍</div>
                                <div>
                                    <strong>Location</strong>
                                    <p>Thimphu, Bhutan</p>
                                </div>
                            </div>

                            <!-- <div class="contact-detail-item">
                                <div class="contact-icon">🕐</div>
                                <div>
                                    <strong>Office Hours</strong>
                                    <p>Monday - Friday: 9:00 AM - 6:00 PM (BTT)</p>
                                    <p>Saturday: 9:00 AM - 1:00 PM</p>
                                    <p>Sunday: Closed</p>
                                </div>
                            </div> -->
                        </div>
                    </div>

                    <div class="quick-contact-card">
                        <h4>Quick Response</h4>
                        <p>Need immediate assistance? Reach us through:</p>
                        <div class="quick-contact-buttons">
                            <a href="#" class="quick-contact-btn whatsapp">
                                <span>💬</span> WhatsApp
                            </a>
                            <a href="tel:+97516108570" class="quick-contact-btn phone">
                                <span>📞</span> Call Now
                            </a>
                            <a href="mailto:info@happinesshorizontravel.com" class="quick-contact-btn email">
                                <span>✉️</span> Email
                            </a>
                        </div>
                    </div>

                    <div class="social-media-card">
                        <h4>Follow Us</h4>
                        <p>Stay updated with our latest tours and travel tips</p>
                        <div class="social-media-links">
                            <a href="https://www.facebook.com/share/1Cf6CmHeWk/?mibextid=wwXIfr" class="social-media-btn facebook">Facebook</a>
                            <a href="#" class="social-media-btn instagram">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-grid">
                <div class="faq-item">
                    <h3>How do I book a tour?</h3>
                    <p>You can book by filling out the contact form above, emailing us directly, or calling/WhatsApp us. We'll respond within 24 hours with a detailed quote.</p>
                </div>
                <div class="faq-item">
                    <h3>What is the Sustainable Development Fee (SDF)?</h3>
                    <p>The SDF is a daily fee required by the Bhutanese government for all tourists. It supports sustainable tourism and community development in Bhutan.</p>
                </div>
                <div class="faq-item">
                    <h3>Can you customize tour itineraries?</h3>
                    <p>We specialize in creating personalized itineraries based on your interests, budget, and travel duration.</p>
                </div>

                <div class="faq-item">
                    <h3>Do I need a visa to visit Bhutan?</h3>
                    <p>Yes, all tourists (except Indian, Bangladeshi, and Maldivian nationals) need a visa. We handle the visa process for you as part of our service.</p>
                </div>
                <div class="faq-item">
                    <h3>What is the best time to visit Bhutan?</h3>
                    <p>The best times are spring (March-May) and autumn (September-November) for clear skies and pleasant weather. However, each season offers unique experiences.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Happiness Horizon Travel</h3>
                    <p>Where Every Journey Begins with Happiness</p>
                    <p class="tagline">Tashi Delek!</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.html.php">Home</a></li>
                        <li><a href="tours.html.php">Tours</a></li>
                        <li><a href="#destinations">Destinations</a></li>
                        <li><a href="#festivals">Festivals</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="about.html.php">About Us</a></li>
                        <li><a href="contact.html.php">Contact</a></li>
                        <li><a href="https://immi.gov.bt/home/">Visa Information</a></li>
                        <li><a href="#policy">Cancellation Policy</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Connect With Us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/share/1Cf6CmHeWk/?mibextid=wwXIfr" class="social-link">Facebook</a>
                        <a href="#" class="social-link">Instagram</a>
                        <a href="#" class="social-link">WhatsApp</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Happiness Horizon Travel. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        }

        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>