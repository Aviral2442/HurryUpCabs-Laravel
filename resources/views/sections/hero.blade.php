{{-- <style>
    .HeroSection{
        background-color: #0D324D;
        height: 60vh;
        color: white
    }
    .button{
        background-color: #325874;
        color: white;
    }
    .left-Hero{
        margin-top: 75px;
        margin-left: 100px;
    }
</style>


<div class="container-fluid HeroSection ">
    <div class="row" >
        <div class="col" >
            <div class="left-Hero mx-a " >
                <h5 class="mt-2 fw-normal" >Relive traveling with</h5>
                <h1 class="mt-2 fw-bold" >{{$data[0]->website_main_heading}}</h2>
                <h5 class="mt-2 fw-normal" >A Journey is an experience and HurryUp cabs believe in making it a good one!</h5>
                <div>
                    <button type="button" class="btn button mt-5">Download Now</button>
                </div>
            </div>
        </div>
        <div class="col p-5" >
            <img src="banner-img.png" class="img-fluid" alt="banner">
        </div>
    </div>
</div> --}}

<style>
.HeroSection {
    background-color: #0D324D;
    height: 60vh;
    color: white;
    padding-left: 15px; /* Adjust the padding as needed */
}

.button {
    background-color: #325874;
    color: white;
}

.text-center-md-start {
    text-align: center; /* Default for smaller screens */
}

@media (min-width: 768px) {
    .text-center-md-start {
        text-align: left; /* Align to left for medium screens and above */
    }
}

</style>


<div class="container-fluid HeroSection">
    <div class="row align-items-center h-100">
        <div class="col-md-6 text-center text-md-start text-center-md-start">
            <h5 class="fw-normal">Relive traveling with</h5>
            <h1 class="mt-2 fw-bold">{{$data[0]->website_main_heading}}</h1>
            <h5 class="mt-2 fw-normal">A Journey is an experience and HurryUp cabs believe in making it a good one!</h5>
            <div class="mt-5">
                <button type="button" class="btn button">Download Now</button>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <img src="banner-img.png" class="img-fluid" alt="banner">
        </div>
    </div>
</div>