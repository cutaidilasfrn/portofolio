<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cut Aidila Safriana</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #374151;
            background: linear-gradient(-45deg, #FFF0F5, #FCE7F3, #FBCFE8, #FCE7F3);
            background-size: 400% 400%;
            animation: floatingBackground 15s ease infinite;
            overflow-x: hidden;
        }

        @keyframes floatingBackground {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* --- TOP NAVBAR: PREMIUM EDITORIAL STYLE --- */
        .navbar {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-bottom: 2px solid #FCE7F3; 
            padding: 15px 0;
            z-index: 1030;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.5rem;
            letter-spacing: -0.5px;
            color: #db2777 !important; 
            text-transform: lowercase; 
        }

        .nav-link {
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase; 
            font-size: 0.75rem; 
            letter-spacing: 2px; 
            font-weight: 600;
            color: #6B7280 !important;
            margin: 0 12px;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: #EC4899 !important;
            transform: translateY(-2px); 
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            transform: translateX(-50%);
            width: 5px;
            height: 5px;
            background-color: #EC4899;
            border-radius: 50%;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .nav-link:hover::after {
            opacity: 1;
            bottom: -6px; 
        }

        .hero-section{
            position:relative;
            background: radial-gradient(circle at top right, rgba(248,187,208,.35), transparent 40%);
            padding-top: 80px; /* Tambahkan jarak ini supaya konten tidak nyangkut di bawah navbar */
        }

        .hero-title{ font-size:3.5rem; font-weight:700; line-height:1.2; }
        .hero-subtitle{ color:#EC4899; margin-bottom:20px; }
        .hero-description{ font-size:1.1rem; line-height:1.8; }
        .text-pink{ color: #EC4899 !important; }
        .section-title { font-size: 2.5rem; font-weight: 700; color: #374151 !important; margin-bottom: 15px; }

        .btn-pink{
            position: relative; overflow: hidden;
            background: linear-gradient(135deg, #EC4899, #F472B6);
            color:white; padding:12px 24px; border-radius:50px; text-decoration:none; display:inline-block;
        }
        .btn-pink::after {
            content: ''; position: absolute; top: 0; left: -100%; width: 50%; height: 100%;
            background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.4) 50%, rgba(255,255,255,0) 100%);
            transform: skewX(-25deg); animation: shineSweep 3s infinite;
        }
        @keyframes shineSweep { 0% { left: -100%; } 20% { left: 200%; } 100% { left: 200%; } }
        .btn-pink:hover{ background:#db2777; color:white; }
        
        .btn-outline-pink{ border:2px solid #EC4899; color:#EC4899; border-radius:50px; padding:12px 24px; text-decoration:none; display:inline-block; }
        .btn-outline-pink:hover{ background:#EC4899; color:white; }

        .profile-wrapper { position: relative; display: inline-block; }
        .profile-wrapper::before, .profile-wrapper::after { display: none !important; }
        .profile-img {
            width: 340px; height: 340px; object-fit: cover; object-position: center 30%; 
            border-radius: 50%; border: 12px solid #ffffff; position: relative; z-index: 2;
            animation: levitateAndPulse 5s ease-in-out infinite; transition: all 0.4s ease;
        }
        .profile-img:hover {
            transform: scale(1.03) translateY(-5px) !important;
            box-shadow: 0 15px 40px rgba(236, 72, 153, 0.6) !important;
            animation-play-state: paused; border-color: #FFF0F5;
        }

        @keyframes levitateAndPulse {
            0% { transform: translateY(0px); box-shadow: 0 10px 25px rgba(236, 72, 153, 0.3), 0 0 0 0 rgba(236, 72, 153, 0.4); }
            50% { transform: translateY(-12px); box-shadow: 0 20px 35px rgba(236, 72, 153, 0.2), 0 0 0 20px rgba(236, 72, 153, 0); }
            100% { transform: translateY(0px); box-shadow: 0 10px 25px rgba(236, 72, 153, 0.3), 0 0 0 0 rgba(236, 72, 153, 0); }
        }

        /* --- MODERN HERO TYPOGRAPHY & BUTTONS --- */
        .welcome-badge {
            display: inline-block;
            padding: 8px 18px;
            background: rgba(236, 72, 153, 0.1);
            color: #db2777;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.85rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 20px;
            border: 1px solid rgba(236, 72, 153, 0.2);
        }

        .hero-title-modern {
            font-size: 4.5rem;
            font-weight: 800;
            line-height: 1.1;
            text-transform: uppercase;
            letter-spacing: -2px;
            margin-bottom: 20px;
        }

        .text-solid-dark {
            color: #1F2937;
            display: block;
        }

        /* Efek Teks Tembus Pandang (Outline) */
        .text-outline-pink {
            color: transparent;
            -webkit-text-stroke: 2px #EC4899;
            display: block;
            text-shadow: 0px 10px 20px rgba(236, 72, 153, 0.15);
        }

        /* Tombol Utama (Glowing) */
        .btn-glow {
            background: linear-gradient(135deg, #EC4899, #F472B6);
            color: white;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            box-shadow: 0 10px 25px rgba(236, 72, 153, 0.4);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-glow:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(236, 72, 153, 0.6);
            color: white;
        }

        /* Tombol Link Minimalis (Hover Underline) */
        .link-minimalist {
            color: #374151;
            font-weight: 600;
            text-decoration: none;
            position: relative;
            padding: 10px 5px;
            transition: color 0.3s ease;
        }

        .link-minimalist::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: #EC4899;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.3s ease;
        }

        .link-minimalist:hover {
            color: #EC4899;
        }

        .link-minimalist:hover::after {
            transform: scaleX(1);
            transform-origin: left;
        }

        .bg-animation{ position:fixed; inset:0; overflow:hidden; z-index:-2; pointer-events:none; }
        .orb{ position:absolute; border-radius:50%; filter:blur(80px); opacity:.45; }
        .orb1{ width:350px; height:350px; background:#f9a8d4; top:10%; left:5%; animation:float1 18s ease-in-out infinite; }
        .orb2{ width:300px; height:300px; background:#fbcfe8; top:60%; right:10%; animation:float2 22s ease-in-out infinite; }
        .orb3{ width:250px; height:250px; background:#fde68a; bottom:10%; left:25%; animation:float3 25s ease-in-out infinite; }
        .orb4{ width:200px; height:200px; background:#ddd6fe; top:20%; right:25%; animation:float4 20s ease-in-out infinite; }

        @keyframes float1{ 50%{ transform:translate(80px,-50px); } }
        @keyframes float2{ 50%{ transform:translate(-100px,80px); } }
        @keyframes float3{ 50%{ transform:translate(120px,-60px); } }
        @keyframes float4{ 50%{ transform:translate(-80px,-100px); } }

        .blob {
            position: absolute; width: 400px; height: 400px;
            background: linear-gradient(135deg, #F8BBD0, #FCE7F3, #FFF0F5);
            border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
            top: 50%; left: 50%; transform: translate(-50%, -50%);
            z-index: -1; filter: blur(30px);
            animation: morphFloat 8s ease-in-out infinite alternate;
        }

        @keyframes morphFloat {
            0% { border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%; transform: translate(-50%, -50%) rotate(0deg); }
            100% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; transform: translate(-50%, -60%) rotate(20deg); }
        }

        .badge{ background:#FCE7F3; color:#EC4899; }
        
        .about-card, .project-card, .publication-card {
            background: rgba(255, 255, 255, 0.6) !important;
            backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.8);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important; border: 2px solid transparent;
        }
        .about-card { padding: 40px; border-radius: 25px; }
        .publication-card { padding: 40px; border-radius: 25px; }
        .project-card { border-radius: 25px; overflow: hidden; height: 100%; display: flex; flex-direction: column; }
        .about-card:hover, .publication-card:hover { transform: translateY(-10px); box-shadow: 0 15px 35px rgba(236, 72, 153, 0.2); border-color: #F8BBD0; }
        .project-card:hover { transform: translateY(-10px) scale(1.05); box-shadow: 0 20px 40px rgba(236, 72, 153, 0.25); border-color: #F472B6; z-index: 10; }
        .project-btn{ text-decoration:none; color:#EC4899; font-weight:600; margin-top:auto; }

        .contact-card{ display:flex; justify-content:center; gap:20px; flex-wrap:wrap; }
        .contact-btn{ text-decoration:none; background:white; color:#EC4899; padding:15px 30px; border-radius:50px; font-weight:600; box-shadow: 0 10px 25px rgba(0,0,0,.05); transition:.4s ease; }
        .contact-btn:hover{ background:#EC4899; color:white; transform:translateY(-5px); }

        .hero-stats{ display:flex; gap:50px; }
        .hero-stats h4{ color:#EC4899; font-weight:700; }
        .hero-stats span{ color:#6B7280; font-size:.9rem; }
        .wave-divider svg{ display:block; width:100%; height:120px; }
        .tech-badge{ display:inline-block; padding:6px 14px; border-radius:50px; background:#FCE7F3; color:#EC4899; font-size:.85rem; margin-bottom:15px; }
        .bg-soft{ background: rgba(255,255,255,.5); }
        .scroll-down{ text-align:center; font-size:2rem; color:#EC4899; animation:bounce 2s infinite; }
        
        .mini-card{ text-align:center; padding:20px; border-radius:15px; background:#FFF8FA; margin-top:15px; transition: all 0.3s ease; }
        .mini-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(236, 72, 153, 0.15); }
        @keyframes bounce{ 0%,100%{ transform:translateY(0); } 50%{ transform:translateY(10px); } }
        .fade-up{ animation: fadeUp 1s ease; }
        .back-btn{ display:inline-block; background:#FCE7F3; color:#EC4899; padding:10px 18px; border-radius:50px; text-decoration:none; font-weight:600; transition:.3s; }
        .back-btn:hover{ transform:translateX(-3px); color:#db2777; }
        .project-preview img{ width:100%; border-radius:20px; box-shadow: 0 15px 35px rgba(0,0,0,.08); }
        .publication-tag{ background:#FCE7F3; color:#EC4899; padding:10px 18px; border-radius:30px; font-size:.9rem; font-weight:600; }

        .marquee-container { width: 100%; overflow: hidden; white-space: nowrap; padding: 20px 0; position: relative; -webkit-mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent); mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent); }
        .marquee-content { display: inline-block; animation: scrollMarquee 20s linear infinite; }
        .marquee-content:hover { animation-play-state: paused; }
        .marquee-pill { display: inline-block; font-size: 1.2rem; font-weight: 600; color: #EC4899; background: rgba(255, 255, 255, 0.6); backdrop-filter: blur(10px); padding: 15px 35px; border-radius: 50px; margin: 0 15px; border: 1px solid rgba(255, 255, 255, 0.8); box-shadow: 0 10px 20px rgba(236, 72, 153, 0.05); transition: all 0.3s ease; }
        .marquee-pill:hover { background: #FCE7F3; transform: scale(1.05); color: #db2777; }
        @keyframes scrollMarquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }

        .timeline { position: relative; max-width: 800px; margin: 0 auto; padding: 20px 0; }
        .timeline::after { content: ''; position: absolute; width: 4px; background: rgba(236, 72, 153, 0.3); top: 0; bottom: 0; left: 20px; border-radius: 10px; }
        .timeline-item { position: relative; padding-left: 60px; margin-bottom: 40px; }
        .timeline-dot { position: absolute; left: 14px; top: 5px; width: 16px; height: 16px; background: #EC4899; border-radius: 50%; z-index: 1; box-shadow: 0 0 0 6px #FCE7F3, 0 0 15px rgba(236, 72, 153, 0.5); }
        .timeline-content h5 { color: #EC4899; font-weight: 700; margin-bottom: 5px; }
        .timeline-content p.timeline-subtitle { font-weight: 600; color: #374151; margin-bottom: 10px; }

        .custom-cursor { width: 25px; height: 25px; border: 2px solid #EC4899; border-radius: 50%; position: fixed; pointer-events: none; z-index: 9999; transition: transform 0.1s ease-out, background-color 0.2s ease; transform: translate(-50%, -50%); }
        .custom-cursor.hover { background-color: rgba(236, 72, 153, 0.3); transform: translate(-50%, -50%) scale(1.5); }
        @keyframes fadeUp{ from{ opacity:0; transform: translateY(40px); } to{ opacity:1; transform: translateY(0); } }
        html{ scroll-behavior:smooth; }

        .sakura-container{ position:fixed; inset:0; pointer-events:none; overflow:hidden; z-index:-1; }
        .hero-section, section, footer{ position:relative; z-index:1; }
        .petal{ position:absolute; top:-20px; width:15px; height:15px; background:#f9a8d4; border-radius:0 100% 0 100%; opacity:0.9; animation:fall linear forwards; }
        @keyframes fall{ from{ transform: translateY(-20px) rotate(0deg); } to{ transform: translateY(110vh) translateX(150px) rotate(720deg); } }

        .cert-timeline{ position:relative; max-width:1000px; margin:auto; }
        .cert-timeline::before{ content:''; position:absolute; left:50%; top:0; width:4px; height:100%; transform:translateX(-50%); background:linear-gradient(to bottom, #f9a8d4, #ec4899, #f9a8d4); border-radius:20px; }
        .cert-item{ width:50%; position:relative; padding:20px 40px; }
        .cert-item.left{ left:0; }
        .cert-item.right{ left:50%; }
        .cert-item::before{ content:''; position:absolute; width:18px; height:18px; background:#ec4899; border-radius:50%; top:40px; z-index:2; box-shadow:0 0 15px rgba(236,72,153,.5); }
        .cert-item.left::before{ right:-9px; }
        .cert-item.right::before{ left:-9px; }
        .cert-card{ background:rgba(255,255,255,.6); backdrop-filter:blur(12px); border-radius:25px; overflow:hidden; border:1px solid rgba(255,255,255,.8); transition:.4s; }
        .cert-card:hover{ transform:translateY(-10px); box-shadow:0 15px 35px rgba(236,72,153,.2); }
        .cert-image{ width:100%; height:220px; object-fit:cover; }
        @media(max-width:768px){
            .cert-timeline::before{ left:20px; }
            .cert-item, .cert-item.right, .cert-item.left{ width:100%; left:0; padding-left:60px; padding-right:0; }
            .cert-item::before{ left:12px; }
        }

        /* --- LOADING SCREEN CSS --- */
        #loader-wrapper {
            position: fixed; inset: 0; background: #FFF0F5; z-index: 99999;
            display: flex; justify-content: center; align-items: center;
            transition: opacity 0.7s ease, visibility 0.7s ease;
        }
        .cas-svg { width: 300px; height: 150px; }
        .cas-text {
            font-size: 100px; font-family: 'Poppins', sans-serif; font-weight: 700;
            fill: transparent; stroke: #EC4899; stroke-width: 3px;
            stroke-dasharray: 800; stroke-dashoffset: 800; 
            animation: drawText 2s ease-in-out forwards, fillColor 0.5s ease-in-out 1.8s forwards; 
        }
        @keyframes drawText { 100% { stroke-dashoffset: 0; } }
        @keyframes fillColor { 100% { fill: #EC4899; } }
        .loader-hidden { opacity: 0; visibility: hidden; }
    </style>
</head>
<body>

<div id="loader-wrapper">
    <svg class="cas-svg" viewBox="0 0 400 150">
        <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" class="cas-text">CAS</text>
    </svg>
</div>

<div class="sakura-container"></div>
<div class="bg-animation">
    <span class="orb orb1"></span>
    <span class="orb orb2"></span>
    <span class="orb orb3"></span>
    <span class="orb orb4"></span>
</div>

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">🌷 my portofolio.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="#certifications">Certifications</a></li>
                <li class="nav-item"><a class="nav-link" href="#publications">Publications</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="text-center py-5">
    <p class="mb-0 text-muted">Made with 🌷 by Cut Aidila Safriana</p>
</footer>

<div class="custom-cursor" id="custom-cursor"></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    // --- Inisialisasi AOS ---
    AOS.init({ duration: 1000, once: true });

    // --- Custom Cursor ---
    const cursor = document.getElementById('custom-cursor');
    document.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
    });

    const links = document.querySelectorAll('a, button, .marquee-pill, .project-card, .about-card, .publication-card, .nav-link');
    links.forEach(link => {
        link.addEventListener('mouseenter', () => cursor.classList.add('hover'));
        link.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
    });

    // --- Animasi Sakura ---
    const sakuraContainer = document.querySelector('.sakura-container');
    setInterval(() => {
        const petal = document.createElement('div');
        petal.classList.add('petal');
        petal.style.left = Math.random() * 100 + 'vw';
        petal.style.animationDuration = (Math.random() * 5 + 8) + 's';
        sakuraContainer.appendChild(petal);
        
        setTimeout(() => {
            petal.remove();
        }, 15000);
    }, 500);

    // --- LOADING SCREEN ---
    window.addEventListener('load', () => {
        const loader = document.getElementById('loader-wrapper');
        
        // Cek apakah pengunjung sudah melihat loading screen di sesi ini
        if (!sessionStorage.getItem('hasVisited')) {
            // Jika belum, jalankan delay 1.8 detik
            setTimeout(() => {
                loader.classList.add('loader-hidden');
                sessionStorage.setItem('hasVisited', 'true');
            }, 1800); 
        } else {
            // Jika sudah, langsung hilangkan tanpa delay
            loader.style.display = 'none';
        }
    });
</script>

</body>
</html>