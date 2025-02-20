@extends('layouts.main')
@section('main-container')

<style>
        .hero-section {
            background-image: url('your-image-url.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .feature-icon {
            font-size: 50px;
            color: #007bff;
        }
        body {
    font-family: Arial, sans-serif;
}

.hero-section {
    background: url('https://source.unsplash.com/1600x900/?health,medicine') no-repeat center center/cover;
    color: white;
    padding: 100px 0;
    text-align: center;
}

.hero-section h1 {
    font-size: 3rem;
    font-weight: bold;
}

.feature-icon i {
    font-size: 40px;
    color: #007bff;
}

.card-header button {
    text-decoration: none;
    font-weight: bold;
    color: #007bff;
}

.card-header button:hover {
    text-decoration: none;
}

footer {
    margin-top: 20px;
}
body {
    font-family: 'Arial', sans-serif;
}

/* Hero Section */
.hero-section {
    background: url("{{ asset('images/news/a.jpg') }}") no-repeat center center/cover;
    padding: 100px 0;
}

.hero-section h1 {
    font-size: 3rem;
    font-weight: bold;
}

/* Cards */
.card {
    border-radius: 10px;
    transition: transform 0.3s ease-in-out;
}

.card:hover {
    transform: scale(1.05);
}

/* Contact Section */
.contact {
    padding: 50px 0;
}

.contact p {
    font-size: 1.2rem;
    font-weight: bold;
} </style>
   <!-- Hero Section -->
    <header class="hero-section text-white text-center">
        <div class="container">
            <h1 class="display-4">Ayushman Bharat Yojana</h1>
            <p class="lead">Providing Health Coverage of ₹5 Lakh Per Family Per Year</p>
            <a href="#apply" class="btn btn-primary btn-lg">Apply Now</a>
        </div>
    </header>

    <!-- Features Section -->
    <section class="features py-5">
        <div class="container">
            <h2 class="text-center mb-4">Key Benefits</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-user-md fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">₹5 Lakh Coverage</h5>
                            <p class="card-text">Covers hospitalization expenses for secondary & tertiary care.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-hospital fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Free Treatment</h5>
                            <p class="card-text">Cashless treatment available in empaneled hospitals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-users fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Over 12 Crore Families Covered</h5>
                            <p class="card-text">Benefiting the economically weaker sections of society.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Eligibility Section -->
    <section class="eligibility py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Who is Eligible?</h2>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('images\news\a.jpg') }}" class="img-fluid rounded" alt="Healthcare">
                </div>
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item"><i class="fas fa-check text-success"></i> Poor & economically weaker families</li>
                        <li class="list-group-item"><i class="fas fa-check text-success"></i> Rural households with no earning adult</li>
                        <li class="list-group-item"><i class="fas fa-check text-success"></i> Families with disabled members</li>
                        <li class="list-group-item"><i class="fas fa-check text-success"></i> SC/ST categories</li>
                        <li class="list-group-item"><i class="fas fa-check text-success"></i> Beggars, street dwellers, laborers</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Apply Section -->
    <section class="apply py-5" id="apply">
        <div class="container">
            <h2 class="text-center mb-4">How to Apply?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images\news\b.avif') }}" class="card-img-top" alt="Registration">
                        <div class="card-body">
                            <h5 class="card-title">Step 1: Check Eligibility</h5>
                            <p class="card-text">Visit the official website or nearest hospital to check eligibility.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images\news\a.jpg') }}" class="card-img-top" alt="Documents">
                        <div class="card-body">
                            <h5 class="card-title">Step 2: Submit Documents</h5>
                            <p class="card-text">Provide Aadhaar, Ration Card & other required documents.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images\news\c.jpg') }}" class="card-img-top" alt="Hospital">
                        <div class="card-body">
                            <h5 class="card-title">Step 3: Get Treatment</h5>
                            <p class="card-text">Receive cashless treatment at empaneled hospitals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact py-5 bg-light text-white text-center">
        <div class="container">
            <h2>Need Help?</h2>
            <p>Call the Ayushman Bharat Helpline at <strong>14555</strong></p>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection
