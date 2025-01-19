<?php include_once "../app/include/header.php"; ?>

    <!-- Hero Section -->
    <section id="hero" class="bg-dark text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Explore Our Classes</h1>
            <p class="lead">Discover classes designed to inspire, educate, and transform your life.</p>
            <a href="#categories" class="btn btn-primary btn-lg mt-3">View All Classes</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container text-center">
            <h2>About Our Classes</h2>
            <p class="mt-3">Our classes are tailored to suit different interests and skill levels. Whether you're looking to enhance your fitness, develop a new skill, or explore your creative side, we have something for everyone.</p>
        </div>
    </section>

    <!-- Class Categories Section -->
    <section id="categories" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Class Categories</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="../assets/img/1.jpg" class="card-img-top" alt="Fitness Classes">
                        <div class="card-body text-center">
                            <h5 class="card-title">Fitness Classes</h5>
                            <p class="card-text">Boost your health with yoga, pilates, and more.</p>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../assets/img/1.jpg" class="card-img-top" alt="Language Classes">
                        <div class="card-body text-center">
                            <h5 class="card-title">Language Classes</h5>
                            <p class="card-text">Master a new language with expert instructors.</p>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../assets/img/1.jpg" class="card-img-top" alt="Art Workshops">
                        <div class="card-body text-center">
                            <h5 class="card-title">Art Workshops</h5>
                            <p class="card-text">Unleash your creativity with hands-on art projects.</p>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Classes Section -->
    <section id="featured" class="py-5">
        <div class="container">
            <h2 class="text-center">Featured Classes</h2>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../assets/img/1.jpg" class="img-fluid rounded-start" alt="Featured Class">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Advanced Yoga</h5>
                                    <p class="card-text">Elevate your yoga practice with advanced techniques.</p>
                                    <a href="#" class="btn btn-outline-primary">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../assets/img/1.jpg" class="img-fluid rounded-start" alt="Featured Class">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Watercolor Painting</h5>
                                    <p class="card-text">Learn the art of watercolor with our expert-guided class.</p>
                                    <a href="#" class="btn btn-outline-primary">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container text-center">
            <h2>Get in Touch</h2>
            <p>Have questions or want to sign up? Contact us today!</p>
            <form class="mt-4">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>

<?php include_once "../app/include/footer.php"; ?>