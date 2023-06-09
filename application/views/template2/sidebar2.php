    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"><i class="fas fa-book" ></i></i>E-Raport</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="<?= site_url('orangtua/dashboard');?>" class="nav-item nav-link active">Home</a>
                    <a href="<?= site_url('orangtua/rekapnilai');?>" class="nav-item nav-link ">Rekap Nilai</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="course.html" class="nav-item nav-link">Courses</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="detail.html" class="dropdown-item">Course Detail</a>
                            <a href="feature.html" class="dropdown-item">Our Features</a>
                            <a href="team.html" class="dropdown-item">Instructors</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>

                    </div>                        

                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <ul class=" py-2 px-4 d-none d-lg-block">
                            <?php if($this->session->userdata('username')) { ?>
                            <div class="border-bottom border-top border-right border-left align-center ">wellcome <?php echo $this->session->userdata('username') ?>
                            <button class="btn btn-light px-10 px-lg-5"><?php echo anchor('auth/logout','logout') ?></button>
                            <?php } else {?>
                            <li><?php echo anchor('auth/login','login') ?></li>
                            <?php } ?>
                            </div>
                        </ul>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

