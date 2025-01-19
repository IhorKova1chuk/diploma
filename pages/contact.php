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
                <form action="" method="post">
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
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2587.693034221841841!2d24.030146315364465!3d49.839683079430746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473a01d0b4b6bb9b%3A0x40f1512fae6ca9be!2z0JfQs9C10LzRgdGC0LDRg9GC0LrQuNGG0LXQu9Cw!5e0!3m2!1sen!2sua!4v1624621499678!5m2!1sen!2sua" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>
        <!-- FAQ -->
        <section id="faq" class="bg-light py-5">
            <div class="container">
                <h2 class="text-center mb-4">Frequently Asked Questions</h2>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What sports clubs are available?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We offer a variety of sports clubs, including football, basketball, and swimming. You can find more details about each club on their respective pages.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How can I join a club?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can join a club by registering on our website and selecting the club you're interested in. Once registered, our team will get in touch with you for further details.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What age groups are available for the clubs?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our clubs cater to all age groups, from children to adults. We offer age-appropriate training and activities for everyone.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                How can I register for a club?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                To register, simply go to our registration page and select the club you wish to join.
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