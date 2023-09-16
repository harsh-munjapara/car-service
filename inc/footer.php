    <div class="services py-5" id="service">
        <div class="container">
            <h2 class="text-center mb-5">OUR SERVICES</h2>
            <div class="row">
                <?php
                $qry = "select * from services where isActive='1'";
                $result = mysqli_query($conn, $qry);
                while ($r = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="./img/<?php echo $r['image']?>" class="card-img-top" alt="Service 1">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $r['sname']?></h5>
                            <p class="card-text"><?php echo $r['serviceDesc']?></p>
                            <a href="send_req.php" class="btn btn-dark">Send Request</a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- About Us div -->
    <div class="about py-5" id="aboutus">
        <div class="container">
            <h2 class="text-center mb-5">ABOUT US</h2>
            <div class="row row-gap-5">
                <div class="col-md-6">
                    <div class="card p-4 shadow">
                        <h3>Our Mission</h3>
                        <p>Our mission is to ensure the safety, reliability, and performance of your vehicles. We take
                            pride in offering a wide range of services, from routine maintenance to complex repairs, all
                            designed to keep you on the road with peace of mind.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-4 shadow">
                        <p>Morbi eget urna ut tellus venenatis tincidunt. Donec nec varius velit, sit amet laoreet
                            justo. Nulla facilisi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact div -->
    <div class="contact py-5 text-center" id="contect">
        <div class="container card border-dark">
            <h2 class="text-center mb-5 pt-4">CONTACT US</h2>
            <div>
                <h4>Contact Information</h4>
                <p>Email: hello@carservice.com</p>
                <p>Phone: +1 (123) 456-7890</p>
                <p>Address: 123 Sutex Complex, Surat, Bharat</p>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; Car Service by three partners</p>
                </div>
            </div>
        </div>
    </footer>