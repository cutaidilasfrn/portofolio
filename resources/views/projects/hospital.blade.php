@extends('projects.layout-project')

@section('content')

<section class="py-5">

    <div class="container">

        <div class="mt-4">

            <span class="tech-badge">
                🌷 Laravel
            </span>

            <h1 class="mt-3">
                🏥 Hospital Management Website
            </h1>

            <p class="mt-3">

                A web-based hospital management system
                developed using Laravel.

            </p>
            
             <img
                    src="{{ asset('images/hospital.png') }}"
                    alt="Furniture Dashboard"
                    class="img-fluid rounded shadow">

<p>
    A web-based hospital management system
    developed using Laravel.
</p>

<p>
    This project was developed as part of my
    web development learning journey, focusing
    on healthcare service management, patient
    records, and user-friendly interface design.
</p>

            <h4 class="mt-5">
                Features
            </h4>

            <ul>

                <li>Patient Data Management</li>

                <li>Doctor Scheduling</li>

                <li>Medical Service Information</li>

                <li>User-Friendly Interface</li>

            </ul>

            <h4 class="mt-5">
                Technologies
            </h4>

            <ul>
<li>Laravel</li>
                <li>MySQL</li>
                

                <li>PHP</li>

                <li>HTML & CSS</li>

            </ul>

        </div>

        <hr class="mt-5 mb-4" style="border-color: #F8BBD0; opacity: 0.5;">

        <div class="text-center mb-5 pb-4">
            <a href="/" class="back-btn">
                ← Back to Portofolio
            </a>
        </div>
        
    </div>

</section>

@endsection