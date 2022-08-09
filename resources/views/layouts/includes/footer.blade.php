<section class="pt-10" id="footer">
    <footer class="bg-dark text-light">

        <!-- Section: Social media -->
        <div class="p-3 border-bottom">
            <div class="d-flex justify-content-center justify-content-lg-between align-items-center container">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with me on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a class="btn btn-primary btn-floating m-0 mx-1" style="background-color: #3b5998;" href="#!"
                        role="button"><i class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <a class="btn btn-primary btn-floating m-0 mx-1" style="background-color: #55acee;" href="#!"
                        role="button"><i class="fab fa-twitter"></i></a>

                    <!-- Google -->
                    <a class="btn btn-primary btn-floating m-0 mx-1" style="background-color: #dd4b39;" href="#!"
                        role="button"><i class="fab fa-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-primary btn-floating m-0 mx-1" style="background-color: #ac2bac;" href="#!"
                        role="button"><i class="fab fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-primary btn-floating m-0 mx-1" style="background-color: #0082ca;" href="#!"
                        role="button"><i class="fab fa-linkedin-in"></i></a>
                    <!-- Github -->
                    <a class="btn btn-primary btn-floating m-0 mx-1" style="background-color: #333333;" href="#!"
                        role="button"><i class="fab fa-github"></i></a>
                </div>
                <!-- Right -->
            </div>
        </div>
        <!-- Section: Social media -->


        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Form -->
            <div class="">
                <div class="row">

                    <div class="col-md-4 px-lg-4 my-4 my-md-2">
                        <h6 class="text-uppercase fw-bold mb-4 text-info">
                            <i class="fas fa-address-book me-1"></i> Contact Me
                        </h6>

                        <form action="{{ route('message.send') }}" method="POST" class="contact-form">
                            @csrf
                            <!-- Name input -->
                            <div class="form-outline mb-3">
                                <input type="text" name="name" id="form4Example1"
                                    class="form-control form-control-sm" />
                                <label class="form-label text-light" for="form4Example1">Name</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-3">
                                <input type="email" name="email" id="form4Example2"
                                    class="form-control form-control-sm" />
                                <label class="form-label text-light" for="form4Example2">Email address</label>
                            </div>

                            <!-- Message input -->
                            <div class="form-outline mb-3">
                                <textarea name="message" class="form-control form-control-sm" id="form4Example3" rows="3"></textarea>
                                <label class="form-label text-light" for="form4Example3">Message</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4"> Send Message
                                <i class="fas fa-paper-plane ms-1"></i></button>
                        </form>
                    </div>

                    <div class="col-md-4 px-lg-4 my-4 my-md-2">
                        <h6 class="text-uppercase fw-bold mb-4 text-info">
                            <i class="fas fa-address-card me-1"></i> My Address
                        </h6>

                        <ul class="list-group">
                            <li class="list-group-item bg-transparent text-light px-0"><i
                                    class="fa fa-home me-2"></i>3103,
                                Sylhet, Bangladesh
                            </li>
                            <li class="list-group-item bg-transparent text-light px-0"><i
                                    class="fa fa-envelope me-2"></i><a class="text-light"
                                    href="mailto:mrmamun20162017@gmail.com">mrmamun20162017@gmail.com</a>
                            </li>
                            <li class="list-group-item bg-transparent text-light px-0"><i
                                    class="fa fa-phone me-2"></i><a class="text-light" href="tel:+8801765700825">+880
                                    1765 700 825</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-4 px-lg-4 my-4 my-md-2">
                        <h6 class="text-uppercase fw-bold mb-4 text-info">
                            <i class="fas fa-map-marker-alt me-1"></i> I'm Here
                        </h6>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57903.17217897352!2d91.78922189373958!3d24.899746388443194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054d3d270329f%3A0xf58ef93431f67382!2sSylhet!5e0!3m2!1sen!2sbd!4v1659899004201!5m2!1sen!2sbd"
                            width="100%" height="210px" style="border:0; border-radius:10px" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
            <!-- Section: Form -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="p-3 fw-light small" style="background-color: rgba(0, 0, 0, 0.2);">
            <div class="container text-end">
                Copyright ©
                <script>
                    document.write(new Date().getFullYear())
                </script>.
                All Rights Reserved. Design and Developed by
                <a href="https://github.com/mr-mamun-50" target="blank"><b>M R Mamun</b></a>
            </div>
        </div>
        <!-- Copyright -->
    </footer>
</section>
