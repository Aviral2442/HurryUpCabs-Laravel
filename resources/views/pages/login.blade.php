@extends('layout.mainlayout')
@section('main')

<style>
    body {
        background-color: #f8f9fa;
        padding-top: 20px;
    }

    .container {
        max-width: 400px;
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

    .input-group-text {
        cursor: pointer;
    }
</style>


<div class="container my-5">
    <h2 class="text-center mb-4">Login</h2>
    <form id="loginForm">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password" required>
                <span class="input-group-text" id="togglePassword">
                    <i class="bi bi-eye">()</i>
                </span>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <div id="responseMessage" class="mt-3"></div>
    </form>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('loginForm');
        const responseMessage = document.getElementById('responseMessage');
        const passwordField = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');
        const eyeIcon = togglePassword.querySelector('i');

        togglePassword.addEventListener('click', function () {
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.classList.remove('bi-eye');
                eyeIcon.classList.add('bi-eye-slash');
            } else {
                passwordField.type = 'password';
                eyeIcon.classList.remove('bi-eye-slash');
                eyeIcon.classList.add('bi-eye');
            }
        });

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            // Form validation
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();

            if (email && password) {
                responseMessage.innerHTML = '<div class="alert alert-success" role="alert">Login successful!</div>';

                // Here you would typically send the form data to your server
                // For example:
                // fetch('/login', { method: 'POST', body: new FormData(form) })
                //     .then(response => response.json())
                //     .then(data => {
                //         // handle response
                //     })
                //     .catch(error => {
                //         // handle error
                //     });

                form.reset();
            } else {
                responseMessage.innerHTML = '<div class="alert alert-danger" role="alert">Please fill out all fields.</div>';
            }
        });
    });
</script>

@endsection