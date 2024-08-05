@extends('layout.mainlayout')
@section('main')
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 20px;
        }

        .container {
            max-width: 600px;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
        }

        .btn-primary {
            border-radius: 0.25rem;
        }

        .alert {
            margin-top: 20px;
        }
    </style>


    <div class="container my-5">
        <h2 class="text-center mb-4">Contact Us</h2>
        <form id="contactForm">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
            <div id="responseMessage" class="mt-3"></div>
        </form>
    </div>

 
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contactForm');
            const responseMessage = document.getElementById('responseMessage');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                // Simple form validation
                const name = document.getElementById('name').value.trim();
                const email = document.getElementById('email').value.trim();
                const subject = document.getElementById('subject').value.trim();
                const message = document.getElementById('message').value.trim();

                if (name && email && subject && message) {
                    responseMessage.innerHTML =
                        '<div class="alert alert-success" role="alert">Thank you for contacting us, ' +
                        name + '! We will get back to you soon.</div>';

                    // Here you would typically send the form data to your server
                    // For example:
                    // fetch('/send', { method: 'POST', body: new FormData(form) })
                    //     .then(response => response.json())
                    //     .then(data => {
                    //         // handle response
                    //     })
                    //     .catch(error => {
                    //         // handle error
                    //     });

                    form.reset();
                } else {
                    responseMessage.innerHTML =
                        '<div class="alert alert-danger" role="alert">Please fill out all fields.</div>';
                }
            });
        });
    </script>
@endsection
