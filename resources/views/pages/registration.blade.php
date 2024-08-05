@extends('layout.mainlayout')
@section('main')

<style>
    body {
        background-color: #f8f9fa;
        padding-top: 20px;
    }

    .container {
        max-width: 500px;
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
    <h2 class="text-center mb-4">Sign Up</h2>
    <form id="signupForm">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" required>
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" required>
        </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
        <div id="responseMessage" class="mt-3"></div>
    </form>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('signupForm');
        const responseMessage = document.getElementById('responseMessage');

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            // Form validation
            const username = document.getElementById('username').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            const confirmPassword = document.getElementById('confirmPassword').value.trim();

            if (username && email && password && confirmPassword) {
                if (password === confirmPassword) {
                    responseMessage.innerHTML = '<div class="alert alert-success" role="alert">Registration successful! Welcome, ' + username + '.</div>';

                    // Here you would typically send the form data to your server
                    // For example:
                    // fetch('/register', { method: 'POST', body: new FormData(form) })
                    //     .then(response => response.json())
                    //     .then(data => {
                    //         // handle response
                    //     })
                    //     .catch(error => {
                    //         // handle error
                    //     });

                    form.reset();
                } else {
                    responseMessage.innerHTML = '<div class="alert alert-danger" role="alert">Passwords do not match.</div>';
                }
            } else {
                responseMessage.innerHTML = '<div class="alert alert-danger" role="alert">Please fill out all fields.</div>';
            }
        });
    });
</script>

@endsection