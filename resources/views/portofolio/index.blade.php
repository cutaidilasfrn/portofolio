@extends('layouts.app')

@section('content')

<section id="home" class="hero-section fade-up">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            
            <div class="col-lg-6">
                
                <h1 class="hero-title-modern" data-aos="fade-right" data-aos-delay="100">
                    <span class="text-solid-dark">Cut Aidila</span>
                    <span class="text-outline-pink">Safriana</span>
                </h1>
                
                <h3 class="hero-subtitle" data-aos="fade-right" data-aos-delay="200" style="font-weight: 600;">
                    Informatics Student & UI Designer
                </h3>
                
                <p class="hero-description mt-3" data-aos="fade-right" data-aos-delay="300">
                    Passionate about translating complex logic into elegant web development, design, and beautiful digital experiences.
                </p>
            
                <div class="mt-5 d-flex align-items-center gap-3" data-aos="fade-right" data-aos-delay="400">
                    <a href="#projects" class="btn-glow">
                        Explore My Work 
                    </a>
                    
                    <a href="{{ asset('cv.pdf') }}" class="btn-outline-pink" target="_blank" style="padding: 13px 32px; font-weight: 600;">
                        Download CV
                    </a>
                </div>
                
                <div class="hero-stats mt-5" data-aos="fade-up" data-aos-delay="500">
                    <div>
                        <h4>3+</h4>
                        <span>Projects</span>
                    </div>
                    <div>
                        <h4>2+</h4>
                        <span>Years Learning</span>
                    </div>
                    <div>
                        <h4>5+</h4>
                        <span>Skills</span>
                    </div>
                </div>
            </div> <div class="col-lg-6 text-center">
                <div class="profile-wrapper" data-aos="zoom-in" data-aos-delay="200">
                    <div class="blob"></div>
                    <img src="{{ asset('images/aku.jpeg') }}" alt="Profile" class="profile-img">
                </div>
            </div> </div> </div>
    
    <div class="wave-divider">
        <svg viewBox="0 0 1440 120">
            <path fill="#FFF8FA" d="M0,64L80,74.7C160,85,320,107,480,106.7C640,107,800,85,960,69.3C1120,53,1280,43,1360,37.3L1440,32V120H0Z"></path>
        </svg>
    </div>
    <div class="scroll-down">↓</div>
</section>

<section id="about" data-aos="fade-up" class="py-5 bg-soft">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">About Me </h2>
            <p>A little story about myself.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="about-card">
                    <h3 class="mb-3 text-pink fw-bold">Who Am I? </h3>
                    <p>
                        Halo! Saya adalah mahasiswa Informatika yang memiliki ketertarikan besar pada dunia Web Development dan UI Design.
                    </p>
                    <p>
                        Saya senang mempelajari teknologi baru, membangun website yang modern, dan menciptakan pengalaman pengguna yang nyaman serta menarik.
                    </p>
                    <p>
                        Saat ini saya terus mengembangkan kemampuan dalam pengembangan web menggunakan Laravel, Bootstrap, dan berbagai teknologi frontend lainnya.
                    </p>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="mini-card">
                            💻
                            <h6>Web Development</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mini-card">
                            🎨
                            <h6>UI Design</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mini-card">
                            🚀
                            <h6>Continuous Learning</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="skills" class="py-5">
    <div class="container-fluid overflow-hidden">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">My Skills </h2>
            <p>Technologies and tools I enjoy working with.</p>
        </div>
        <div class="marquee-container" data-aos="fade-up" data-aos-delay="100">
            <div class="marquee-content">
                <span class="marquee-pill"> Laravel</span>
                <span class="marquee-pill"> Microsoft Office</span>
                <span class="marquee-pill"> SQL & BigQuery</span>
                <span class="marquee-pill"> HTML & CSS</span>
                <span class="marquee-pill"> Looker Studio</span>
                <span class="marquee-pill"> JavaScript</span>
                <span class="marquee-pill"> PHP</span>
                <span class="marquee-pill"> Laragon</span>
                <span class="marquee-pill"> Canva</span>
                <span class="marquee-pill"> Python</span>
                
                <span class="marquee-pill"> Laravel</span>
                <span class="marquee-pill"> Microsoft office</span>
                <span class="marquee-pill"> SQL & BigQuery</span>
                <span class="marquee-pill"> HTML & CSS</span>
                <span class="marquee-pill"> Looker Studio</span>
                <span class="marquee-pill"> JavaScript</span>
                <span class="marquee-pill"> PHP</span>
                <span class="marquee-pill"> Laragon</span>
                <span class="marquee-pill"> Canva</span>
                <span class="marquee-pill"> Python</span>
            </div>
        </div>
    </div>
</section>

<section id="projects" data-aos="fade-up" class="py-5 bg-soft">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">My Projects </h2>
            <p>Some projects that I have worked on.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-5">
                <div class="project-card p-4 h-100">
                    <div>
                        <span class="tech-badge">🌷 Laravel</span>
                    </div>
                    <h4 class="mt-3 fw-bold text-pink"> Hospital Management Website</h4>
                    <p>
                        Web-based hospital management system developed using Laravel. Features include patient records, doctor scheduling, and healthcare service information management.
                    </p>
                    <a href="/projects/hospital-management" class="project-btn mt-auto">
                        View Project →
                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="project-card p-4 h-100">
                    <div>
                        <span class="tech-badge">📊 Looker Studio</span>
                    </div>
                    <h4 class="mt-3 fw-bold text-pink">Furniture Sales Analytics Dashboard</h4>
                    <p>
                        Interactive sales analytics dashboard used to monitor revenue, order trends, product performance, and regional sales insights within the furniture industry.
                    </p>
                    <a href="/projects/furniture-dashboard" class="project-btn mt-auto">
                        View Project →
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="certifications" class="py-5">

    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title">Certifications</h2>
            <p>Courses and training that I have completed.</p>
        </div>

        <div class="cert-timeline">

            <!-- CERT 1 -->

            <div class="cert-item left" data-aos="fade-right">

                <div class="cert-card">

                    <img src="{{ asset('images/karir.jpg') }}"
                        class="cert-image"
                        alt="Data Analyst Bootcamp">

                    <div class="p-4">

                        <h5 class="text-pink fw-bold">
                            🏆 Data Analyst Bootcamp
                        </h5>

                        <p class="fw-bold mb-2">
                            KarirNex (Expert Level)
                        </p>

                        <p class="text-muted mb-0">
                            Intensive bootcamp focusing on SQL,
                            BigQuery, Python, Google Colab,
                            and Data Visualization using
                            Looker Studio.
                        </p>

                    </div>

                </div>

            </div>

            <!-- CERT 2 -->

            <div class="cert-item right" data-aos="fade-left">

                <div class="cert-card">

                    <img src="{{ asset('images/darul.jpeg') }}"
                        class="cert-image"
                        alt="Arabic Language Training">

                    <div class="p-4">

                        <h5 class="text-pink fw-bold">
                            📜 Arabic Language Training
                        </h5>

                        <p class="fw-bold mb-2">
                            Darul Lughah Al-Arabiyah, Indonesia
                        </p>

                        <p class="text-muted mb-0">
                            90 Days Intensive Program
                            (2018 - 2019).
                            Final Score: 91.85
                            (Achievement: Excellent).
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section id="publications" class="py-5 bg-soft">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Publications </h2>
            <p>Academic publications and research contributions.</p>
        </div>
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-8">
                <div class="publication-card">
                    <div class="publication-header mb-3">
                        <span class="publication-tag">📖 Journal Publication</span>
                    </div>
                    <h4 class="mt-4 fw-bold text-pink">
                        Analisis Keamanan Data Pengguna pada Platform E-commerce: Studi Kasus Kebocoran Data Tokopedia 2020
                    </h4>
                    <p>
                        Publikasi jurnal kelompok yang telah diterbitkan pada JIKUM (Jurnal Ilmu Komputer dan Multimedia).
                    </p>
                    <p>
                        DOI: <strong>10.62671/jikum.v2i1.174</strong>
                    </p>
                    <a href="https://doi.org/10.62671/jikum.v2i1.174" target="_blank" class="btn btn-pink mt-3">
                        Read Publication →
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" data-aos="fade-up" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Let's Connect </h2>
            <p>Feel free to reach out and connect with me.</p>
        </div>
        <div class="contact-card">
            <a href="mailto:cutaidilasfrn@gmail.com" class="contact-btn">📧 Email</a>
            <a href="https://github.com/cutaidilasfrn" class="contact-btn" target="_blank">💻 GitHub</a>
            <a href="https://linkedin.com/in/cutaidilasfrn" class="contact-btn" target="_blank">💼 LinkedIn</a>
            <a href="https://instagram.com/cutaidilasfrn" class="contact-btn" target="_blank">📷 Instagram</a>
        </div>
    </div>
</section>

@endsection