<?php include_once "../app/include/header.php"; ?>
    <div class="container">
        <section id="contact-info" class="py-5">
            <div class="container text-center">
                <h2 class="mb-4">Contact Information</h2>
                <p>
                    <strong>Address:</strong> 123 Example St, Lviv, Ukraine<br>
                    <strong>Email:</strong> info@example.com<br>
                    <strong>Phone:</strong> +38 123 456 789<br>
                    <strong>Business Hours:</strong> Monday to Friday, 9 AM - 6 PM
                </p>
            </div>
        </section>
        <section id="contact-form" class="bg-light py-5">
            <div class="container">
                <h2 class="text-center mb-4">Get in Touch</h2>
                <form action="process_form.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <!-- Google Map -->
        <section id="google-map" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">Our Location</h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.google.com/maps/embed?pb=...your-location-here..."
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>
        <!-- FAQ -->
        <section id="faq" class="bg-light py-5">
            <div class="container">
                <h2 class="text-center mb-4">Frequently Asked Questions</h2>
                <div class="accordion" id="faqAccordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How do I contact support?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                            <div class="card-body">
                                You can contact our support team by filling out the contact form on this page or emailing us directly at support@example.com.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What are your business hours?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                            <div class="card-body">
                                We are available Monday to Friday, from 9 AM to 6 PM. We are closed on weekends.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Where are you located?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                            <div class="card-body">
                                We are located in the heart of Lviv, Ukraine. Our office address is listed above under contact information.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Social Media Links -->
        <section id="social-media" class="py-5">
            <div class="container text-center">
                <h2 class="mb-4">Follow Us</h2>
                <ul class="list-unstyled d-flex justify-content-center mt-2">
                    <li><a href="#" class="mx-2"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="mx-2"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="mx-2"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" class="mx-2"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </section>
    </div>

<?php include_once "../app/include/footer.php"; ?>