<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Digital Solutions - Jasa Pembuatan Website</title>
  <meta name="description" content="Digital Solutions — Solusi Digital Untuk Jasa pembuatan website untuk Profil, UMKM, startup, dan perusahaan. Website cepat, aman, dan mobile-friendly.">
  <meta name="keywords" content="jasa pembuatan website,website personal, website perusahaan, web design, hosting domain">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/dslogo2.png') }}" rel="icon">
  <link href="{{ asset('assets/img/dslogo2.png') }}" rel="dslogo-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

    <!-- <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:imubaidori@gmail.com">ubaidori.my.id</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 812-3456-7890</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="#" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{ asset('assets/img/dslogo2.png') }}" alt="">
          <h1 class="sitename">Digital Solutions</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#services">Layanan</a></li>
            <li><a href="#portfolio">Portofolio</a></li>
            <!-- Megamenu 2 -->
            <li class="megamenu-2"><a href="#"><span>Semua Menu</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>

                <!-- Mobile Megamenu -->
                <ul class="mobile-megamenu">

                  <li><a href="/services/web-development">Website Development</a></li>
                  <li><a href="/services/e-commerce">E-commerce</a></li>
                  <li><a href="/services/cms-integration">CMS / WordPress</a></li>

                  <li class="dropdown"><a href="#"><span>Design &amp; Branding</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                      <li><a href="/services/ui-ux-design">UI / UX Design</a></li>
                      <li><a href="/services/branding">Branding &amp; Visual Identity</a></li>
                      <li><a href="/services/landing-page">Landing Pages</a></li>
                      <li><a href="/portfolio">Portfolio</a></li>
                    </ul>
                  </li>

                  <li class="dropdown"><a href="#"><span>Digital Marketing</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                      <li><a href="/services/seo">SEO</a></li>
                      <li><a href="/services/sem-ppc">SEM / PPC</a></li>
                      <li><a href="/services/social-media">Social Media</a></li>
                      <li><a href="/services/content">Content Marketing</a></li>
                    </ul>
                  </li>

                  <li class="dropdown"><a href="#"><span>Support &amp; Hosting</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                      <li><a href="/services/hosting">Managed Hosting</a></li>
                      <li><a href="/services/maintenance">Maintenance &amp; Updates</a></li>
                      <li><a href="/services/security">Security &amp; Backups</a></li>
                      <li><a href="/pricing">Packages &amp; Pricing</a></li>
                    </ul>
                  </li>

                  <li><a href="/case-studies">Case Studies</a></li>
                  <li><a href="/blog">Blog</a></li>
                  <li><a href="/contact">Contact / Request Quote</a></li>

                </ul><!-- End Mobile Megamenu -->

                <!-- Desktop Megamenu -->
                <div class="desktop-megamenu">

                  <div class="tab-navigation">
                    <ul class="nav nav-tabs flex-column" id="2190-megamenu-tabs" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="2190-tab-1-tab" data-bs-toggle="tab" data-bs-target="#2190-tab-1" type="button" role="tab" aria-controls="2190-tab-1" aria-selected="true">
                          <i class="bi bi-laptop"></i>
                          <span>Services</span>
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="2190-tab-2-tab" data-bs-toggle="tab" data-bs-target="#2190-tab-2" type="button" role="tab" aria-controls="2190-tab-2" aria-selected="false">
                          <i class="bi bi-palette"></i>
                          <span>Design &amp; Branding</span>
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="2190-tab-3-tab" data-bs-toggle="tab" data-bs-target="#2190-tab-3" type="button" role="tab" aria-controls="2190-tab-3" aria-selected="false">
                          <i class="bi bi-megaphone"></i>
                          <span>Marketing</span>
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="2190-tab-4-tab" data-bs-toggle="tab" data-bs-target="#2190-tab-4" type="button" role="tab" aria-controls="2190-tab-4" aria-selected="false">
                          <i class="bi bi-journal-text"></i>
                          <span>Resources</span>
                        </button>
                      </li>
                    </ul>
                  </div>

                  <div class="tab-content">

                    <!-- Services Tab -->
                    <div class="tab-pane fade show active" id="2190-tab-1" role="tabpanel" aria-labelledby="2190-tab-1-tab">
                      <div class="content-grid">
                        <div class="product-section">
                          <h4>Web Development</h4>
                          <div class="product-list">
                            <a href="/services/web-development" class="product-link">
                              <i class="bi bi-laptop"></i>
                              <div>
                                <span>Custom Website</span>
                                <small>Responsive, performant websites tailored to your goals</small>
                              </div>
                            </a>
                            <a href="/services/e-commerce" class="product-link">
                              <i class="bi bi-journal-text"></i>
                              <div>
                                <span>Project Assignments</span>
                                <small>Collaborative projects tailored to your needs</small>
                              </div>
                            </a>
                            <a href="/services/cms-integration" class="product-link">
                              <i class="bi bi-wordpress"></i>
                              <div>
                                <span>CMS Integration</span>
                                <small>WordPress, Headless CMS, content workflows</small>
                              </div>
                            </a>
                          </div>
                        </div>

                        <div class="product-section">
                          <h4>Technical Services</h4>
                          <div class="product-list">
                            <a href="/services/hosting" class="product-link">
                              <i class="bi bi-cloud-upload"></i>
                              <div>
                                <span>Managed Hosting</span>
                                <small>Fast, secure hosting with automatic backups</small>
                              </div>
                            </a>
                            <a href="/services/maintenance" class="product-link">
                              <i class="bi bi-wrench"></i>
                              <div>
                                <span>Maintenance</span>
                                <small>Updates, monitoring, uptime guarantees</small>
                              </div>
                            </a>
                            <a href="/services/integrations" class="product-link">
                              <i class="bi bi-link-45deg"></i>
                              <div>
                                <span>3rd-party Integrations</span>
                                <small>APIs, payment gateways, CRM & more</small>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div class="featured-banner">
                        <div class="banner-content">
                          <img src="{{ asset('assets/img/dslogo2.png') }}" alt="Web Development" class="banner-image">
                          <div class="banner-info">
                            <h5>Starter Website Package</h5>
                            <p>Ideal for small businesses: fast launch, SEO-ready, easy to manage.</p>
                            <a href="/pricing" class="cta-btn">See Packages <i class="bi bi-arrow-right"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Design & Branding Tab -->
                    <div class="tab-pane fade" id="2190-tab-2" role="tabpanel" aria-labelledby="2190-tab-2-tab">
                      <div class="content-grid">
                        <div class="product-section">
                          <h4>Visual Design</h4>
                          <div class="product-list">
                            <a href="/services/ui-ux-design" class="product-link">
                              <i class="bi bi-brush"></i>
                              <div>
                                <span>UI / UX Design</span>
                                <small>User-centered interfaces & interactive prototypes</small>
                              </div>
                            </a>
                            <a href="/services/branding" class="product-link">
                              <i class="bi bi-award"></i>
                              <div>
                                <span>Branding</span>
                                <small>Logo, color systems, brand guidelines</small>
                              </div>
                            </a>
                            <a href="/services/landing-page" class="product-link">
                              <i class="bi bi-card-heading"></i>
                              <div>
                                <span>Landing Pages</span>
                                <small>Conversion-focused pages for campaigns</small>
                              </div>
                            </a>
                          </div>
                        </div>

                        <div class="product-section">
                          <h4>UX Services</h4>
                          <div class="product-list">
                            <a href="/services/research" class="product-link">
                              <i class="bi bi-search"></i>
                              <div>
                                <span>User Research</span>
                                <small>Interviews, testing & analytics-driven insights</small>
                              </div>
                            </a>
                            <a href="/services/prototyping" class="product-link">
                              <i class="bi bi-columns-gap"></i>
                              <div>
                                <span>Prototyping</span>
                                <small>Clickable prototypes for validation</small>
                              </div>
                            </a>
                            <a href="/portfolio" class="product-link">
                              <i class="bi bi-image"></i>
                              <div>
                                <span>Our Work</span>
                                <small>Explore case studies and design examples</small>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div class="featured-banner">
                        <div class="banner-content">
                          <img src="{{ asset('assets/img/dslogo2.png') }}" alt="Design & Branding" class="banner-image">
                          <div class="banner-info">
                            <h5>Free Design Consultation</h5>
                            <p>Book a session to review your brand and website goals.</p>
                            <a href="/contact" class="cta-btn">Book Now <i class="bi bi-arrow-right"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Marketing Tab -->
                    <div class="tab-pane fade" id="2190-tab-3" role="tabpanel" aria-labelledby="2190-tab-3-tab">
                      <div class="content-grid">
                        <div class="product-section">
                          <h4>Search &amp; Growth</h4>
                          <div class="product-list">
                            <a href="/services/seo" class="product-link">
                              <i class="bi bi-graph-up"></i>
                              <div>
                                <span>SEO</span>
                                <small>On-page, technical & content SEO to increase visibility</small>
                              </div>
                            </a>
                            <a href="/services/sem-ppc" class="product-link">
                              <i class="bi bi-currency-dollar"></i>
                              <div>
                                <span>SEM / PPC</span>
                                <small>Targeted ads that convert</small>
                              </div>
                            </a>
                            <a href="/services/email-marketing" class="product-link">
                              <i class="bi bi-envelope"></i>
                              <div>
                                <span>Email Marketing</span>
                                <small>Campaigns & automation to nurture leads</small>
                              </div>
                            </a>
                          </div>
                        </div>

                        <div class="product-section">
                          <h4>Social &amp; Content</h4>
                          <div class="product-list">
                            <a href="/services/social-media" class="product-link">
                              <i class="bi bi-share"></i>
                              <div>
                                <span>Social Media</span>
                                <small>Content strategy, ads, and community management</small>
                              </div>
                            </a>
                            <a href="/services/content" class="product-link">
                              <i class="bi bi-journal-text"></i>
                              <div>
                                <span>Content Marketing</span>
                                <small>Blogs, guides, and campaigns that drive traffic</small>
                              </div>
                            </a>
                            <a href="/case-studies" class="product-link">
                              <i class="bi bi-bar-chart-line"></i>
                              <div>
                                <span>Success Stories</span>
                                <small>Results we've delivered for clients</small>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>

                      <div class="featured-banner">
                        <div class="banner-content">
                          <img src="{{ asset('assets/img/dslogo2.png') }}" alt="Marketing" class="banner-image">
                          <div class="banner-info">
                            <h5>Growth Audit</h5>
                            <p>Get a free audit of your website's performance and quick wins.</p>
                            <a href="/contact" class="cta-btn">Request Audit <i class="bi bi-arrow-right"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Resources Tab -->
                    <div class="tab-pane fade" id="2190-tab-4" role="tabpanel" aria-labelledby="2190-tab-4-tab">
                      <div class="resources-layout">
                        <div class="resource-categories">
                          <div class="resource-category">
                            <i class="bi bi-newspaper"></i>
                            <h5>Blog &amp; Insights</h5>
                            <p>Articles on web design, development, and digital strategy.</p>
                            <a href="/blog" class="resource-link">Read Blog <i class="bi bi-arrow-right"></i></a>
                          </div>
                          <div class="resource-category">
                            <i class="bi bi-file-earmark-text"></i>
                            <h5>Guides &amp; Checklists</h5>
                            <p>Practical resources to help you plan and launch your site.</p>
                            <a href="/resources" class="resource-link">Browse Resources <i class="bi bi-arrow-right"></i></a>
                          </div>
                          <div class="resource-category">
                            <i class="bi bi-people"></i>
                            <h5>Client Support</h5>
                            <p>Help center, support plans, and contact for urgent issues.</p>
                            <a href="/support" class="resource-link">Get Support <i class="bi bi-arrow-right"></i></a>
                          </div>
                          <div class="resource-category">
                            <i class="bi bi-phone"></i>
                            <h5>Contact &amp; Quote</h5>
                            <p>Ready to start? Request a quote or schedule a quick call.</p>
                            <a href="/contact" class="resource-link">Contact Us <i class="bi bi-arrow-right"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                </div><!-- End Desktop Megamenu -->

              </li><!-- End Megamenu 2 -->


            <li><a href="#faq">FAQ</a></li>
            <li><a href="#contact">Kontak</a></li>
            <li><a href="https://www.instagram.com/ubaid_ori/" class="instagram"><i class="bi bi-instagram" ></i></a></li>
            <li><a href="https://wa.me/6285232689199" class="whatsapp"><i class="bi bi-whatsapp" ></i></a></li>

          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="hero-background">
        <img src="{{ asset('assets/img/bg/bg-14.webp') }}" alt="" data-aos-duration="1000">
        <div class="overlay"></div>
      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content">
              <h1>Bangun Website Profesional untuk Bisnis Anda</h1>
              <p>Tingkatkan kepercayaan pelanggan dan maksimalkan potensi bisnis Anda. Kami merancang website modern, cepat, aman, dan mobile-friendly khusus untuk UMKM, startup, perusahaan dan personal branding.</p>
              <div class="hero-actions">
                <a href="#services" class="btn-primary">Lihat Layanan</a>
                <a href="https://wa.me/6285232689199" class="btn-secondary"><i class="bi bi-whatsapp"></i><span>Hubungi Kami</span></a>
              </div>
              <!-- <div class="hero-stats">
                <div class="stat-item">
                  h+</span>
                  <span class="stat-label">Projects Completed</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">95%</span>
                  <span class="stat-label">Client Satisfaction</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">3</span>
                  <span class="stat-label">Bulan Support</span>
                </div>
              </div> -->
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-content2">
              <span class="hero-badge">Grow Together</span>
            </div>
            <div class="hero-visual">
              <div class="row g-3">
                <div class="col-6">
                  <div class="feature-card">
                    <i class="bi bi-building-gear"></i>
                    <span>Company Profile</span>
                  </div>
                  <div class="feature-card">
                    <i class="bi bi-grid"></i>
                    <span>Instansi / Organisasi</span>
                  </div>
                </div>
                <div class="col-6">
                  <div class="feature-card">
                    <i class="bi bi-laptop"></i>
                    <span>Landing Page</span>
                  </div>
                  <div class="feature-card">
                    <i class="bi bi-people"></i>
                    <span>Personal Brand</span>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="content">
              <h2>Digital Solutions - Solusi Kebutuhan Website Anda</h2>
              <p class="lead">Membangun Kehadiran Digital Sesuai Kebutuhan Anda</p>
              <p>Digital Solutions adalah penyedia layanan pembuatan website yang bertujuan untuk membantu pelaku bisnis, UMKM, dan individu tampil lebih kredibel, modern, dan mudah ditemukan di dunia digital.
                Kami percaya bahwa setiap bisnis berhak memiliki identitas online yang kuat, dan kami hadir untuk mewujudkannya melalui desain yang menarik, performa cepat, serta strategi digital yang efektif.</p>
              <!-- <div class="stats-container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="stat-item">
                      <div class="number">5+</div>
                      <div class="label">Years Experience</div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="stat-item">
                      <div class="number">50+</div>
                      <div class="label">Projects Completed</div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="stat-item">
                      <div class="number">5</div>
                      <div class="label">Team Members</div>
                    </div>
                  </div>
                </div>
              </div> -->

              <div class="cta-wrapper">
                <a href="https://wa.me/6285232689199" class="btn btn-primary">Konsultasi Sekarang</a>
                <a href="https://wa.me/6285232689199" class="btn btn-outline">Temui Tim Kami</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="image-wrapper">
              <img src="{{ asset('assets/img/about/dsteam.png') }}" alt="About Us" class="img-fluid main-image">
              <div class="floating-card">
                <div class="card-content">
                  <i class="bi bi-gear"></i>
                  <div class="text">
                    <h5>Agile Development</h5>
                    <span>Is The System We Use</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Technology Section -->
    <section id="tech" class="tech section">

      <div>

        <div class="tech-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 6000,
              "autoplay": {
                "delay": 1,
                "disableOnInteraction": false
              },
              "centeredSlides": true,
              "slideToClickedSlide": true,
              "slidesPerView": "auto",
              "spaceBetween": 40,
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 20
                },
                "640": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "992": {
                  "slidesPerView": 4,
                  "spaceBetween": 30
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 40
                }
              }
            }
          </script>

          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="tech-logo">
                <img src="{{ asset('assets/img/technology/tech-01.png') }}" class="img-fluid" alt="html">
              </div>
            </div><!-- End Client Item -->

            <div class="swiper-slide">
              <div class="tech-logo">
                <img src="{{ asset('assets/img/technology/tech-02.png') }}" class="img-fluid" alt="css">
              </div>
            </div><!-- End Client Item -->

            <div class="swiper-slide">
              <div class="tech-logo">
                <img src="{{ asset('assets/img/technology/tech-03.png') }}" class="img-fluid" alt="javascript">
              </div>
            </div><!-- End Client Item -->

            <div class="swiper-slide">
              <div class="tech-logo">
                <img src="{{ asset('assets/img/technology/tech-04.png') }}" class="img-fluid" alt="php">
              </div>
            </div><!-- End Client Item -->

            <div class="swiper-slide">
              <div class="tech-logo">
                <img src="{{ asset('assets/img/technology/tech-05.png') }}" class="img-fluid" alt="python">
              </div>
            </div><!-- End Client Item -->

            <div class="swiper-slide">
              <div class="tech-logo">
                <img src="{{ asset('assets/img/technology/tech-06.png') }}" class="img-fluid" alt="nodejs">
              </div>
            </div><!-- End Client Item -->

            <div class="swiper-slide">
              <div class="tech-logo">
                <img src="{{ asset('assets/img/technology/tech-07.png') }}" class="img-fluid" alt="mysql">
              </div>
            </div><!-- End Client Item -->

            <div class="swiper-slide">
              <div class="tech-logo">
                <img src="{{ asset('assets/img/technology/tech-08.png') }}" class="img-fluid" alt="wordpress">
              </div>
            </div><!-- End Client Item -->

            <div class="swiper-slide">
              <div class="tech-logo">
                <img src="{{ asset('assets/img/technology/tech-09.png') }}" class="img-fluid" alt="laravel">
              </div>
            </div><!-- End Client Item -->

            <div class="swiper-slide">
              <div class="tech-logo">
                <img src="{{ asset('assets/img/technology/tech-10.png') }}" class="img-fluid" alt="figma">
              </div>
            </div><!-- End Client Item -->

            <div class="swiper-slide">
              <div class="tech-logo">
                <img src="{{ asset('assets/img/technology/tech-11.png') }}" class="img-fluid" alt="tailwind">
              </div>
            </div><!-- End Client Item -->

            <div class="swiper-slide">
              <div class="tech-logo">
                <img src="{{ asset('assets/img/technology/tech-12.png') }}" class="img-fluid" alt="adobe family">
              </div>
            </div><!-- End Client Item -->

          </div>

        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Agile Development</h2>
        <p>Tim Digital Solutions menerapkan metode Agile Development untuk memastikan <br>
          proyek sesuai keinginan Anda, efisien serta responsive terhadap perubahan kebutuhan di masa depan.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <div class="services-content" data-aos-duration="900">
              <!-- <span class="subtitle">Tim Digital Solutions</span> -->
              <h2 data-aos-duration="600">Mengapa Agile Development?</h2>
              <p data-aos-duration="800">Penerapan <strong>Agile Development</strong> berguna untuk memastikan fleksibilitas, kolaborasi, dan hasil yang optimal.
                Pendekatan ini berfokus pada pengembangan bertahap (iteratif), komunikasi yang terbuka antara tim dan klien, serta adaptasi cepat terhadap perubahan kebutuhan bisnis.
                Dengan Agile, setiap tahap pengembangan menjadi lebih transparan dan efisien, sehingga produk akhir benar-benar sesuai dengan tujuan dan harapan klien.</p>
              <div class="mt-4" data-aos-duration="1100">
                <a href="https://wa.me/6285232689199" class="btn-consultation"><span>Request a Consultation</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-image d-flex justify-content-center" data-aos-duration="1200">
              <img src="{{ asset('assets/img/services/agile.png') }}" alt="Agile Software Development" class="img-fluid" id="geserkiri">
              <div class="shape-circle"></div>
              <div class="shape-accent"></div>
            </div>
          </div>
        </div>

        <div class="row mt-5" data-aos-duration="1000">
          <div class="col-12">
            <div class="services-slider swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "slidesPerView": 3,
                  "spaceBetween": 20,
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "navigation": {
                    "nextEl": ".swiper-nav-next",
                    "prevEl": ".swiper-nav-prev"
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1
                    },
                    "768": {
                      "slidesPerView": 2
                    },
                    "992": {
                      "slidesPerView": 3
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="service-card">
                    <div class="icon-box">
                      <i class="bi-chat-dots"></i>
                    </div>
                    <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                    <div class="content">
                      <h4><a href="#">Meet & Plan</a></h4>
                      <p>Tim dan klien berdiskusi menentukan tujuan, fitur utama, serta rencana kerja sprint agar arah pengembangan jelas dan terukur.</p>
                      <div class="service-number">01</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="service-card">
                    <div class="icon-box">
                      <i class="bi-diagram-3"></i>
                    </div>
                    <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                    <div class="content">
                      <h4><a href="#">Design</a></h4>
                      <p>Merancang struktur sistem, alur data, dan tampilan UI/UX agar website berfungsi optimal serta mudah digunakan pengguna.</p>
                      <div class="service-number">02</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="service-card">
                    <div class="icon-box">
                      <i class="bi-code-slash"></i>
                    </div>
                    <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                    <div class="content">
                      <h4><a href="#">Code &amp; Test</a></h4>
                      <p>Developer menulis kode dan melakukan pengujian simultan agar setiap fitur berfungsi baik dan bebas dari bug sejak awal.</p>
                      <div class="service-number">03</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="service-card">
                    <div class="icon-box">
                      <i class="bi-rocket-takeoff"></i>
                    </div>
                    <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                    <div class="content">
                      <h4><a href="#">Release</a></h4>
                      <p>Setelah pengujian selesai, fitur dirilis dalam versi awal atau stagging ke lingkungan produksi dan dapat ditinjau dan diuji oleh pengguna.</p>
                      <div class="service-number">04</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="service-card">
                    <div class="icon-box">
                      <i class="bi-arrow-repeat"></i>
                    </div>
                    <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                    <div class="content">
                      <h4><a href="#">Feedback</a></h4>
                      <p>Tim dan klien memeninjau fitur yang telah dirilis, mengumpulkan masukan, dan merencanakan perbaikan atau pengembangan lebih lanjut.</p>
                      <div class="service-number">05</div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="swiper-navigation">
              <button class="swiper-nav-prev"><i class="bi bi-chevron-left"></i></button>
              <button class="swiper-nav-next"><i class="bi bi-chevron-right"></i></button>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Featured Services Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Layanan Kami</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 col-md-6">
            <div class="service-card featured">
              <div class="service-icon">
                <i class="bi bi-code-slash"></i>
              </div>
              <div class="service-content">
                <h3><a href="https://wa.me/6285232689199">Software Development</a></h3>
                <p>Mengembangkan solusi digital berupa <strong>website</strong> dan <strong>aplikasi mobile</strong> yang inovatif, responsif, dan disesuaikan dengan kebutuhan bisnis Anda.</p>
                <div class="service-meta">
                  <span class="badge popular">Most Popular</span>
                  <span class="price">Mulai dari Rp300.000</span>
                </div>
                <a href="https://wa.me/6285232689199" class="btn-cta">
                  <span>Get Started</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
              <div class="service-bg"></div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-vector-pen"></i>
              </div>
              <div class="service-content">
                <h3><a href="https://wa.me/6285232689199">Graphic Design</a></h3>
                <p>Menciptakan desain visual yang menarik dan beridentitas kuat untuk memperkuat citra serta komunikasi brand Anda.</p>
                <div class="service-meta">
                  <span class="price">Mulai dari Rp50.000</span>
                </div>
                <a href="https://wa.me/6285232689199" class="btn-cta">
                  <span>Explore</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
              <div class="service-bg"></div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-card compact">
              <div class="service-icon">
                <i class="bi bi-camera"></i>
              </div>
              <div class="service-content">
                <h3><a href="https://wa.me/6285232689199">Photo &amp; Video Editing</a></h3>
                <p>Menyediakan layanan editing profesional untuk menghasilkan konten foto dan video yang lebih estetis dan berkualitas tinggi.</p>
                <a href="https://wa.me/6285232689199" class="btn-cta">
                  <span>Explore</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
              <div class="service-bg"></div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-card compact">
              <div class="service-icon">
                <i class="bi bi-box"></i>
              </div>
              <div class="service-content">
                <h3><a href="https://wa.me/6285232689199">3D Modeling</a></h3>
                <p>Membuat model 3D realistis dan detail untuk kebutuhan animasi, arsitektur, produk, maupun presentasi digital.</p>
                <a href="https://wa.me/6285232689199" class="btn-cta">
                  <span>Explore</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
              <div class="service-bg"></div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-card compact">
              <div class="service-icon">
                <i class="bi bi-collection-play"></i>
              </div>
              <div class="service-content">
                <h3><a href="https://wa.me/6285232689199">Motion Graphics</a></h3>
                <p>Membuat animasi visual yang kreatif dan informatif untuk memperkuat pesan, promosi, serta identitas brand Anda secara menarik.</p>
                <a href="https://wa.me/6285232689199" class="btn-cta">
                  <span>Explore</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
              <div class="service-bg"></div>
            </div>
          </div>

        </div>

        <div class="stats-highlight">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="stat-item">
                <div class="stat-number">50+</div>
                <div class="stat-label">Projects Completed</div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stat-item">
                <div class="stat-number">98%</div>
                <div class="stat-label">Client Satisfaction</div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stat-item">
                <div class="stat-number">24/7</div>
                <div class="stat-label">Support Available</div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stat-item">
                <div class="stat-number">4+</div>
                <div class="stat-label">Years Experience</div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- How We Work Section -->
    <section id="how-to-order" class="how-we-work section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Alur Order</h2>
        <p>Proses pembuatan website dilakukan secara terstruktur, dimulai dari konsultasi hingga peluncuran untuk memastikan hasil optimal.</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="steps-wrapper">
          <div class="steps-grid">
            <div class="step-card">
              <div class="step-icon"><i class="bi bi-chat-dots"></i></div>
              <div class="step-number">Step 1</div>
              <h3>Konsultasi &amp; Penawaran</h3>
              <p>Klien dan tim berdiskusi mengenai kebutuhan, fitur yang diinginkan, serta menentukan estimasi biaya dan waktu pengerjaan proyek.</p>
            </div>

            <div class="step-card">
              <div class="step-icon"><i class="bi bi-folder-check"></i></div>
              <div class="step-number">Step 2</div>
              <h3>Pengumpulan Materi &amp; Perancangan</h3>
              <p>Klien menyiapkan konten, tim membuat rancangan desain dan struktur halaman sesuai identitas serta tujuan bisnis.</p>
            </div>

            <div class="step-card">
              <div class="step-icon"><i class="bi-code-slash"></i></div>
              <div class="step-number">Step 3</div>
              <h3>Pengembangan &amp; Uji Coba</h3>
              <p>Website dikembangkan berdasarkan rancangan, lalu diuji untuk memastikan semua fitur berjalan lancar di berbagai perangkat.</p>
            </div>

            <div class="step-card">
              <div class="step-icon"><i class="bi-send-check"></i></div>
              <div class="step-number">Step 4</div>
              <h3>Peluncuran &amp; Penyerahan</h3>
              <p>Website diluncurkan ke domain resmi, dilakukan finalisasi, serta diberikan panduan pengelolaan dan dukungan pasca-rilis.</p>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /How We Work Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Paket Harga</h2>
        <p>Pilih paket yang sesuai dengan kebutuhan website Anda.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 justify-content-center">

          <!-- Starter Plan -->
          <div class="col-lg-4 col-md-6">
            <div class="pricing-item">
              <div class="pricing-icon">
                <i class="bi bi-star"></i>
              </div>
              <h3>Starter</h3>
              <div class="price price--badge">
                <span class="price-label">start from</span>
                <span class="currency">Rp</span>500.000
              </div>
              <p class="description">Paket ini cocok untuk Personal, portofolio, atau landing page promosi tunggal.</p>
              <ul class="features-list">
                <li>
                  <i class="bi bi-check2"></i>
                  Pengerjaan 1-2 hari
                </li>
                <li>
                  <i class="bi bi-check2"></i>
                  1-5 Halaman
                </li>
                <li>
                  <i class="bi bi-check2"></i>
                  Garansi error dan bug 30 hari
                </li>
              </ul>
              <a href="https://wa.me/6285232689199" class="btn-pricing">Buy Now</a>
            </div>
          </div><!-- End Starter Plan -->

          <!-- Professional Plan -->
          <div class="col-lg-4 col-md-6">
            <div class="pricing-item featured">
              <div class="pricing-badge">Recommended</div>
              <div class="pricing-icon">
                <i class="bi bi-stars"></i>
              </div>
              <h3>Professional</h3>
              <div class="price price--badge">
                <span class="price-label">start from</span>
                <span class="currency">Rp</span>1.500.000
              </div>
              <p class="description">Cocok untuk UMKM, bisnis, atau perusahaan yang butuh website lengkap dengan halaman profil & layanan.</p>
              <ul class="features-list">
                <li>
                  <i class="bi bi-check2"></i>
                  Pengerjaan 3-7 hari
                </li>
                <li>
                  <i class="bi bi-check2"></i>
                  10 Halaman
                </li>
                <li>
                  <i class="bi bi-check2"></i>
                  Garansi error dan bug 30 hari
                </li>
              </ul>
              <a href="https://wa.me/6285232689199" class="btn-pricing">Buy Now</a>
            </div>
          </div><!-- End Professional Plan -->

          <!-- Ultimate Plan -->
          <div class="col-lg-4 col-md-6">
            <div class="pricing-item">
              <div class="pricing-icon">
                <i class="bi bi-star-fill"></i>
              </div>
              <h3>Ultimate</h3>
              <div class="price price--badge">
                <span class="price-label">start from</span>
                <span class="currency">Rp</span>3.500.000
              </div>
              <p class="description">Paket ini cocok untuk perusahaan besar atau proyek dengan kebutuhan khusus (Custom Project).</p>
              <ul class="features-list">
                <li>
                  <i class="bi bi-check2"></i>
                  Pengerjaan -+14 hari
                </li>
                <li>
                  <i class="bi bi-check2"></i>
                  Halaman & Fitur Custom
                </li>
                <li>
                  <i class="bi bi-check2"></i>
                  Garansi error dan bug 60 hari
                </li>
              </ul>
              <a href="https://wa.me/6285232689199" class="btn-pricing">Buy Now</a>
            </div>
          </div><!-- End Ultimate Plan -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>FAQ</h2>
        <p>Pilih paket yang sesuai dengan kebutuhan website Anda.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-10">

            <div class="faq-wrapper">

              <div class="faq-item faq-active">
                <div class="faq-header">
                  <div class="faq-icon">
                    <i class="bi bi-question-circle"></i>
                  </div>
                  <h4>Apa saja jasa pembuatan website yang kami tawarkan?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>Kami menyediakan layanan pembuatan website untuk berbagai kebutuhan — mulai dari <strong>landing page</strong>, <strong>company profile</strong>, <strong>undangan digital</strong>, <strong>POS Sistem</strong> hingga sistem custom sesuai permintaan.</p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item">
                <div class="faq-header">
                  <div class="faq-icon">
                    <i class="bi bi-question-circle"></i>
                  </div>
                  <h4>Berapa biaya untuk membuat website?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>Biaya pembuatan website bervariasi tergantung jenis dan fitur yang dibutuhkan.
                        Kami menyediakan beberapa paket mulai dari <strong>Rp300 ribuan</strong> untuk website sederhana hingga custom project dengan fitur khusus.
                        Konsultasikan kebutuhan Anda, dan kami akan bantu berikan penawaran harga terbaik.</p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item">
                <div class="faq-header">
                  <div class="faq-icon">
                    <i class="bi bi-question-circle"></i>
                  </div>
                  <h4>Berapa lama waktu pengerjaannya?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>Waktu pengerjaan website tergantung tingkat kompleksitas dan kelengkapan konten yang anda berikan. Seperti contoh untuk <strong>Landing Page</strong> berkisar antara <strong>1-3 hari kerja</strong>, sesuai dari banyaknya halaman yang diminta.
                        Kami akan selalu memberikan update progres sesuai <strong>Agile System</strong> yang kita terapkan dalam pembuatan website agar anda tahu setiap tahapannya.</p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item">
                <div class="faq-header">
                  <div class="faq-icon">
                    <i class="bi bi-question-circle"></i>
                  </div>
                  <h4>Apakah ada garansi setelah website selesai dibuat?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>Kami memberikan <strong>garansi teknis selama 30 hari</strong> setelah website selesai.
                        Jika ada <strong>error</strong> atau <strong>bug</strong> dari sistem kami, perbaikan akan dilakukan tanpa biaya tambahan.</p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item">
                <div class="faq-header">
                  <div class="faq-icon">
                    <i class="bi bi-question-circle"></i>
                  </div>
                  <h4>Bagaimana alur proses pembuatan website di sini?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>
                      Berikut tahapan umum pengerjaannya:</br>
                      1. Konsultasi & Penawaran Harga</br>
                      2. Pembayaran DP & Pengumpulan Konten</br>
                      3. Desain Website & Persetujuan Klien</br>
                      4. Proses Development</br>
                      5. Revisi & Finalisasi</br>
                      6. Website Go Live & Serah Terima</br>
                      Kami berusaha membuat prosesnya transparan dan mudah dipahami.
                    </p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

            </div>

          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Call To Action Section -->
    {{-- <section id="call-to-action" class="call-to-action section light-background">

      <div class="container">

        <div class="cta-wrapper">
          <div class="cta-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
          </div>

          <div class="row g-0">
            <div class="col-lg-7">
              <div class="cta-content p-5">
                <span class="badge-custom">Premium Offer</span>
                <h2 class="mt-4 mb-4">Transform Your Experience With Our Solution</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                <div class="row benefits-row mb-5">
                  <div class="col-md-6">
                    <div class="benefit-item">
                      <div class="icon-box">
                        <i class="bi bi-lightning-charge-fill"></i>
                      </div>
                      <div class="benefit-content">
                        <h5>Quick Setup</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="benefit-item">
                      <div class="icon-box">
                        <i class="bi bi-shield-check"></i>
                      </div>
                      <div class="benefit-content">
                        <h5>Full Security</h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="action-buttons">
                  <a href="#" class="btn btn-primary">Dapatkan Penawaran</a>
                  <a href="#" class="btn btn-outline">Learn More</a>
                  <div class="guarantee-badge">
                    <i class="bi bi-patch-check-fill"></i>
                    <span>30-Day Guarantee</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-5">
              <div class="cta-image-container">
                <img src="{{ asset('assets/img/illustration/illustration-3.webp') }}" alt="Illustration" class="img-fluid main-image">
                <div class="floating-element element-1">
                  <i class="bi bi-star-fill"></i>
                  <span>4.9 Rating</span>
                </div>
                <div class="floating-element element-2">
                  <i class="bi bi-people-fill"></i>
                  <span>10k+ Users</span>
                </div>
                <div class="pattern-dots"></div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- /Call To Action Section --> --}}

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Portofolio</h2>
        <p>Pilih paket yang sesuai dengan kebutuhan website Anda.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center mt-4">
              <ul class="portfolio-filters isotope-filters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-compro">Company Profile</li>
                <li data-filter=".filter-sisteminformasi">Sistem Informasi</li>
                <li data-filter=".filter-customwebapp">Custom Web App</li>
                <li data-filter=".filter-invitation">Invitation</li>
              </ul>
            </div>
          </div>

          <div class="row gy-4 portfolio-container isotope-container">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-invitation">
              <div class="portfolio-wrap">
                <img src="{{ asset('assets/img/portfolio/pp1.png') }}" class="img-fluid" alt="Portfolio Image" loading="lazy">
                <div class="portfolio-info">
                  <h4>Digital Invitation</h4>
                  <p>Invitation</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('assets/img/portfolio/pp1.png') }}" class="glightbox" title="Digital Invitation"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.blade.php" title="More Details"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-compro">
              <div class="portfolio-wrap">
                <img src="{{ asset('assets/img/portfolio/pl1.png') }}" class="img-fluid" alt="Portfolio Image" loading="lazy">
                <div class="portfolio-info">
                  <h4>Startup Profile</h4>
                  <p>Company Profile</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('assets/img/portfolio/pl1.png') }}" class="glightbox" title="Company Profile"><i class="bi bi-zoom-in"></i></a>
                    <a href="#" title="More Details"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-customwebapp">
              <div class="portfolio-wrap">
                <img src="{{ asset('assets/img/portfolio/pp2.png') }}" class="img-fluid" alt="Portfolio Image" loading="lazy">
                <div class="portfolio-info">
                  <h4>POS System</h4>
                  <p>Custom Web App</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('assets/img/portfolio/pp2.png') }}" class="glightbox" title="POS System"><i class="bi bi-zoom-in"></i></a>
                    <a href="#" title="More Details"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-sisteminformasi">
              <div class="portfolio-wrap">
                <img src="{{ asset('assets/img/portfolio/pp3.png') }}" class="img-fluid" alt="Portfolio Image" loading="lazy">
                <div class="portfolio-info">
                  <h4>Web Monitoring</h4>
                  <p>Sistem Informasi</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('assets/img/portfolio/pp3.png') }}" class="glightbox" title="Web Monitoring"><i class="bi bi-zoom-in"></i></a>
                    <a href="#" title="More Details"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-compro">
              <div class="portfolio-wrap">
                <img src="{{ asset('assets/img/portfolio/pl2.png') }}" class="img-fluid" alt="Portfolio Image" loading="lazy">
                <div class="portfolio-info">
                  <h4>Business Profile</h4>
                  <p>Company Profile</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('assets/img/portfolio/pl2.png') }}" class="glightbox" title="Business Profile"><i class="bi bi-zoom-in"></i></a>
                    <a href="#" title="More Details"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-compro">
              <div class="portfolio-wrap">
                <img src="{{ asset('assets/img/portfolio/pl3.png') }}" class="img-fluid" alt="Portfolio Image" loading="lazy">
                <div class="portfolio-info">
                  <h4>Organization Profile</h4>
                  <p>Company Profile</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('assets/img/portfolio/pl3.png') }}" class="glightbox" title="Organization Profile"><i class="bi bi-zoom-in"></i></a>
                    <a href="#" title="More Details"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <!-- Section Title -->
      <div class="container section-title">
        <h2>Contact</h2>
        <p>Dengan senang hati kami dapat berinteraksi dengan Anda.</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="contact-main-wrapper">
          <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0844086057305!2d110.39334257400782!3d-7.780874892238735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59c470ed6263%3A0x129fe3064c3a5bb0!2sJl.%20Petung%20No.8%2C%20Demangan%20Baru%2C%20Caturtunggal%2C%20Kec.%20Depok%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta%2055281!5e0!3m2!1sid!2sid!4v1759804961719!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="contact-content">
            <div class="contact-cards-container">
              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="contact-text">
                  <h4>Location</h4>
                  <p>Jl Petung 8c, Sleman DIY</p>
                </div>
              </div>

              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="contact-text">
                  <h4>Email</h4>
                  <p>consultant.digitalsolutions@gmail.com</p>
                </div>
              </div>

              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="contact-text">
                  <h4>Call</h4>
                  <p>+62 852-3268-9199</p>
                </div>
              </div>

              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-clock"></i>
                </div>
                <div class="contact-text">
                  <h4>Open Hours</h4>
                  <p>Monday-Friday: 9AM - 8PM</p>
                </div>
              </div>
            </div>

            <div class="contact-form-container">
              <h3>Hubungi Kami</h3>
              <p>Silakan isi formulir di bawah ini untuk menghubungi kami.</p>

              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
                </div>

                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <div class="form-submit">
                  <button type="submit">Send Message</button>
                  <div class="social-links">
                    <a href="https://wa.me/6285232689199"><i class="bi bi-whatsapp"></i></a>
                    <a href="https://instagram.com/ubaid_ori"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="#" class="logo d-flex align-items-center">
            <span class="sitename">Digital Solutions</span>
          </a>
          <p>Senantiasa memberikan solusi kebutuhan digital Anda. </p>
          <div class="social-links d-flex mt-4">
            <a href="https://wa.me/6285232689199"><i class="bi bi-whatsapp"></i></a>
            <a href="https://instagram.com/ubaid_ori"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#services">Layanan</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#faq">FAQ</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Desain Web</a></li>
            <li><a href="#">Pengembangan Web</a></li>
            <li><a href="#">Manajemen Sistem Informasi</a></li>
            <li><a href="#">Pemasaran</a></li>
            <li><a href="#">Desain Grafis</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>Jl Petung 8C, Papringan</p>
          <p>Sleman DIY</p>
          <p>Indonesia</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+62 852 3268 9199</span></p>
          <p><strong>Email:</strong> <span>consultant.digitalsolutions@gmail.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Digital Solutions</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://ubaidori.my.id/">Team Digital Solutions</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>