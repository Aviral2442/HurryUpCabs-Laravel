<style>
    .icon-image {
        max-width: 60px; /* Maintain a consistent image size */
        height: auto;
    }
    .feature-image {
        max-width: 100%; /* Ensure images are responsive */
        height: auto;
    }
    .feature-container {
        display: flex;
        justify-content: center;
    }

    .feature-card {
        background-color: #fff; /* White background for the card */
        border-radius: 8px; /* Rounded corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
        padding: 15px; /* Spacing inside the card */
        margin-bottom: 15px; /* Space between cards */
        transition: all 0.3s ease; /* Smooth transition for hover effect */
    }

    .feature-card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Darker shadow on hover */
        transform: scale(1.05); /* Slightly enlarge the card on hover */
    }

    .feature-card img {
        display: block;
        margin-bottom: 10px; /* Space below the image */
    }

    .feature-card h4 {
        margin-top: 0; /* Remove top margin from headings */
        margin-bottom: 10px; /* Space below the heading */
    }

    .feature-card p {
        margin: 0; /* Remove default margin from paragraphs */
    }
</style>

<div class="container-xl py-5">
    <h3 class="text-center mb-4">Why Choose HurryUp</h3>
    <div class="row p-5">
        <!-- Left Column -->
        <div class="col-md-8 p-5">
            <div class="feature-card row mb-3 align-items-start">
                <div class="col-12 col-md-1 d-flex align-items-center justify-content-start mb-2 mb-md-0">
                    <img src="transparency.webp" alt="Example Image" class="icon-image img-fluid">
                </div>
                <div class="col-12 col-md-11">
                    <h4 class="fs-5">1000+ Rides at your service</h4>
                    <p>We provide the widest range of cabs ranging from Micro, Sedans to SUVs Cars.</p>
                </div>
            </div>

            <div class="feature-card row mb-3 align-items-start">
                <div class="col-12 col-md-1 d-flex align-items-center justify-content-start mb-2 mb-md-0">
                    <img src="transparency.webp" alt="Example Image" class="icon-image img-fluid">
                </div>
                <div class="col-12 col-md-11">
                    <h4 class="fs-5">1000+ Rides at your service</h4>
                    <p>We provide the widest range of cabs ranging from Micro, Sedans to SUVs Cars.</p>
                </div>
            </div>

            <div class="feature-card row align-items-start">
                <div class="col-12 col-md-1 d-flex align-items-center justify-content-start mb-2 mb-md-0">
                    <img src="transparency.webp" alt="Example Image" class="icon-image img-fluid">
                </div>
                <div class="col-12 col-md-11">
                    <h4 class="fs-5">1000+ Rides at your service</h4>
                    <p>We provide the widest range of cabs ranging from Micro, Sedans to SUVs Cars.</p>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-md-4 d-flex align-items-center justify-content-center ">
            <img src="why-choose.webp" alt="Example Image" class="feature-image img-fluid">
        </div>
    </div>
</div>
