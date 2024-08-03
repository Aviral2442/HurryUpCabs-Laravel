<style>
    .serviceSection {
        margin-top: 225px;
    }

    .leftPart {
        color: #ECB615;
    }

    .rightPart {
        color: rgb(47, 47, 220);
        font-size: 22px;
    }

    .des {
        color: gray;
    } 

    .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        padding: 20px;
        transition: transform 0.3s, box-shadow 0.3s;
        text-align: center;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .card img {
        margin-bottom: 20px;
    }

    .row {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .col-3 {
        flex: 1 1 300px;
    }

    .container-xxl {
        padding: 0 15px;
    }
</style>

<div class="container-xxl serviceSection">
    <div class="heading">
        <h2 class="text-center fw-bold fs-1">
            {{$services[0]->service_heading}}
            {{-- <span class="leftPart">Our Services Let You</span>
            <span class="rightPart">Ride Smooth</span> --}}
        </h2>
        <p class="text-center des">
            {{$services[0]->service_description}}
        </p>
    </div>

    <div class="row">
        <div class="col-3 py-5 m-2 card">
            <div class="text-center">
                <img src="transparency.webp" width="50px" class="img-fluid" alt="...">
            </div>
            <div class="text-center">
                <h3 class="mt-4 rightPart fw-normal">{{$services[0]->ser_card_heading1}}</h3>
                <p class="des">{{$services[0]->ser_card_description1}}</p>
            </div>
        </div>

        <div class="col-3 py-5 m-2 card">
            <div class="text-center">
                <img src="transparency.webp" width="50px" class="img-fluid" alt="...">
            </div>
            <div class="text-center">
                <h3 class="mt-4 rightPart fw-normal">{{$services[0]->ser_card_heading2}}</h3>
                <p class="des">{{$services[0]->ser_card_description2}}</p>
            </div>
        </div>

        <div class="col-3 py-5 m-2 card">
            <div class="text-center">
                <img src="transparency.webp" width="50px" class="img-fluid" alt="...">
            </div>
            <div class="text-center">
                <h3 class="mt-4 rightPart fw-normal">{{$services[0]->ser_card_heading3}}</h3>
                <p class="des">{{$services[0]->ser_card_description3}}</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-3 py-5 m-2 card">
            <div class="text-center">
                <img src="transparency.webp" width="50px" class="img-fluid" alt="...">
            </div>
            <div class="text-center">
                <h3 class="mt-4 rightPart fw-normal">{{$services[0]->ser_card_heading4}}</h3>
                <p class="des">{{$services[0]->ser_card_description4}}</p>
            </div>
        </div>

        <div class="col-3 py-5 m-2 card">
            <div class="text-center">
                <img src="transparency.webp" width="50px" class="img-fluid" alt="...">
            </div>
            <div class="text-center">
                <h3 class="mt-4 rightPart fw-normal">{{$services[0]->ser_card_heading5}}</h3>
                <p class="des">{{$services[0]->ser_card_description5}}</p>
            </div>
        </div>

        <div class="col-3 py-5 m-2 card">
            <div class="text-center">
                <img src="transparency.webp" width="50px" class="img-fluid" alt="...">
            </div>
            <div class="text-center">
                <h3 class="mt-4 rightPart fw-normal">{{$services[0]->ser_card_heading6}}</h3>
                <p class="des">{{$services[0]->ser_card_description6}}</p>
            </div>
        </div>
    </div>
</div>
