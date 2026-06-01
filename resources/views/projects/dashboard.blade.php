@extends('projects.layout-project')

@section('content')

<section class="py-5">

    <div class="container">

        <div class="mt-4">

            <span class="tech-badge">
                📊 Looker Studio
            </span>

            <h1 class="mt-3">
                Furniture Sales Analytics Dashboard
            </h1>

            <p class="mt-3">

                Interactive dashboard developed to analyze
                furniture sales performance throughout 2025.

            </p>

            <div class="project-preview mt-4 mb-5">

                <img
                    src="{{ asset('images/furniture.jpeg') }}"
                    alt="Furniture Dashboard"
                    class="img-fluid rounded shadow">

            </div>

<h2>Dashboard Overview</h2>

<p>
    This dashboard was built using Google Looker Studio
    to analyze furniture sales performance in 2025.
    It provides insights into revenue trends,
    order completion rates, top-selling products,
    and regional sales distribution.
</p>

            <h4 class="mt-5">
                Key Metrics
            </h4>

            <ul>

                <li>Total Revenue Analysis</li>

                <li>Total Orders Monitoring</li>

                <li>Average Order Value</li>

                <li>Completion Rate Tracking</li>

            </ul>

            <h4 class="mt-5">
                Dashboard Features
            </h4>

            <ul>

                <li>City Revenue Comparison</li>

                <li>Monthly Order Trends</li>

                <li>Top Product Analysis</li>

                <li>Interactive Filters</li>

            </ul>

            <h4 class="mt-5">
                Tools Used
            </h4>

            <ul>

                <li>Looker Studio</li>

                <li>Google Sheets</li>

                <li>Data Visualization</li>

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