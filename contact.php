<?php
include("./header.php")
?>



<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">

            “Let’s chat! We’d love to hear from you and help bring your ideas to life.”</h1>

    </div>
</div>
<!-- Page Header End -->



<!-- contact start -->

<div class="container-fluid py-5 mt-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h1 class="text-primary">Get In Touch with us !</h1>
            <h5 class="mb-3">"No dream is too big when creativity meets growth!"
                OG Growth Solutions is where your business aspirations transform into market dominance.
            </h5>
            <p class="mb-2">
                At OG Growth Solutions, we’re excited to help you take your business to new heights! Whether you’re looking to supercharge your digital presence,
                run effective ad campaigns, or create captivating content, our team is ready to assist you.
            </p>
        </div>
        <div class="contact-detail position-relative p-5">
            <div class="row g-5 mb-5 justify-content-center">
                <div class="col-12 col-md-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle d-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-dark">Address</h4>
                            <a href="https://maps.app.goo.gl/NQzwxL8sF7Exaj6c9" target="_blank" rel="noopener noreferrer">
                                A27, Shivaji Extension, Rajouri Garden, Delhi
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle d-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                            <i class="fa fa-phone text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Call Us</h4>
                            <a class="p text-dark" href="tel:+0123456789" target="_blank">+91-7734-884287 </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle d-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                            <i class="fa fa-envelope text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Email Us</h4>
                            <a class="p text-dark contact-email" href="mailto:info@example.com" target="_blank">info@oggrowthsolutions.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="p-5 h-100 rounded contact-map">
                        <iframe class="rounded w-100 h-100" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=A27,%20Shivaji%20Extension,%20Rajouri%20Garden,%20Delhi+(%20OG%20Growth%20Solutions)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
                <div class="col-12 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <form id="contactForm" action="./connection/submit_contact.php" method="post" onsubmit="return validateForm()">
                        <div class="p-5 rounded contact-form">
                            <div class="mb-4">
                                <input type="text" id="name" name="name" required class="form-control border-0 py-3" placeholder="Your Name">
                                <span id="nameError" style="color:red; display:none;">Please enter your name</span>
                            </div>
                            <div class="mb-4">
                                <input type="email" id="email" name="email" required class="form-control border-0 py-3" placeholder="Your Email">
                                <span id="emailError" style="color:red; display:none;">Please enter a valid email</span>
                            </div>
                            <div class="mb-4">
                                <textarea class="w-100 form-control border-0 py-3" id="message" name="message" rows="6" placeholder="Message"></textarea>
                                <span id="messageError" style="color:red; display:none;">Please enter a message</span>
                            </div>
                            <div class="text-start">
                                <button class="btn bg-primary text-white py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- contact end  -->



<!-- Footer Start -->
<div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
    <div class="container pt-5 pb-4">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <a href="index.html">
                    <h1 class="text-white fw-bold d-block">OG <span class="text-secondary">Growth Solutions</span></h1>
                </a>
                <p class="mt-4 text-light">
                    Welcome to OG Growth Solutions – Where Creativity Meets Hustle! Tired of the same old marketing blah-blah? So are we!
                    At OG Growth Solutions, we don’t just follow trends — we create them! We’re here to make your brand go viral, your ROI
                    skyrocket, and your competitors sit up and take notes.
                </p>
                <div class="d-flex hightech-link">
                    <a href="#" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-facebook-f text-primary"></i></a>
                    <a href="#" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-youtube text-primary"></i></a>
                    <a href="#" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-instagram text-primary"></i></a>
                    <a href="#" class="btn-light nav-fill btn btn-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="#" class="h3 text-secondary">Help Link</a>
                <div class="mt-4 d-flex flex-column help-link">
                    <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Terms Of Use</a>
                    <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Privacy Policy</a>
                    <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Helps</a>
                    <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>FAQs</a>
                    <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact</a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <a href="#" class="h3 text-secondary">Contact Us</a>
                <div class="text-white mt-4 d-flex flex-column contact-link">
                    <a href="https://maps.app.goo.gl/NQzwxL8sF7Exaj6c9" target="_blank" class="pb-3 text-light border-bottom border-primary">
                        <i class="fas fa-map-marker-alt text-secondary me-2"></i> A27, Shivaji Extension, Rajouri Garden, Delhi</a>
                    <a href="tel:+917734884287" class="py-3 text-light border-bottom border-primary">
                        <i class="fas fa-phone-alt text-secondary me-2"></i> +91-7734-884287</a>
                    <a href="mailto:info@oggrowthsolutions.com" class="py-3 text-light border-bottom border-primary">
                        <i class="fas fa-envelope text-secondary me-2"></i> info@oggrowthsolutions.com</a>
                    <p class="py-3 text-light"><i class="fas fa-clock text-secondary me-2"></i>Monday to Friday: 9 AM – 6 PM</p>
                </div>
            </div>
        </div>
        <hr class="text-light mt-5 mb-4">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <span class="text-light">
                    <a href="#" class="text-secondary"><i class="fas fa-copyright text-secondary me-2"></i>OG Growth Solutions</a>, All rights reserved.
                </span>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <span class="text-light">Designed By <a href="https://htmlcodex.com" class="text-secondary">HTML Codex</a> Distributed By
                    <a href="https://catalystprogrammers.in/" class="text-secondary">Catalyst Programmers</a></span>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script>
    function validateForm() {
        let isValid = true;

        // Get form inputs
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();

        // Name validation
        if (name === "") {
            document.getElementById('nameError').style.display = "block";
            isValid = false;
        } else {
            document.getElementById('nameError').style.display = "none";
        }

        // Email validation (simple regex for basic email format)
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email)) {
            document.getElementById('emailError').style.display = "block";
            isValid = false;
        } else {
            document.getElementById('emailError').style.display = "none";
        }

        // Message validation
        if (message === "") {
            document.getElementById('messageError').style.display = "block";
            isValid = false;
        } else {
            document.getElementById('messageError').style.display = "none";
        }

        // Return the final validation status
        return isValid;
    }
</script>
</body>

</html>