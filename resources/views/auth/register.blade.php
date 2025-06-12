<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <!-- Left Section -->
        <div class="left-section">
            <div class="features">
                <h2>Why Choose Plus500?</h2>
                <ul>
                    <li>Free and unlimited demo trading</li>
                    <li>Over 2800 leveraged instruments</li>
                    <li>Tight spreads & no commissions</li>
                    <li>Cutting-edge trading technology</li>
                    <li>Comprehensive Trading Academy</li>
                </ul>
            </div>
        </div>

        <!-- Right Section -->
        <div class="right-section">
            <div class="header">
               <a href="/"> <img src="logo.png" alt="Plus500 Logo" width="200px"></a>
                <h2>Join 26+ million who have chosen Plus500</h2>
            </div>
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <!-- Name Field -->
                <input type="text" placeholder="Enter Full Name" class="form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <!-- Email Field -->
                <input type="email" placeholder="Enter Email Address"
                    class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                    required>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror


                <input type="number" placeholder="Enter Phone Number" class="form-control @error('phone') is-invalid @enderror"
                name="phone" value="{{ old('phone') }}" required>
            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

                <div class="form-group">
                    <label for="documentType">Upload a government-issued document for registration.</label>
                    <select id="documentType" name="documentType" class="form-input" onchange="toggleOtherField()">
                        <option value="" disabled selected>Choose document type</option>
                        <option value="passport">Passport</option>
                        <option value="idCard">ID Card</option>
                        <option value="driverLicense">Driver's License</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="form-group" id="otherField" style="display: none;">
                    <label for="otherDocument">Other Document Type</label>
                    <input type="text" id="otherDocument" name="otherDocument" placeholder="Specify document type" class="form-input">
                </div>
                
                <div class="form-group">
                    <label for="kycDocument">Upload Document</label>
                    <input type="file" id="kycDocument" name="kycDocument" class="form-input" required>
                </div>
                
                <!-- Password Fields -->
                <input type="password" placeholder="Your Password"
                    class="form-control @error('password') is-invalid @enderror" name="password" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input type="password" placeholder="Repeat Your Password" class="form-control"
                    name="password_confirmation" required>

                <!-- Submit Button -->
                <button type="submit">Create Account</button>

                <!-- Social Options -->
                <div class="other-options">
                    <p>or create an account with</p>
                    <div class="social-icons">
                        <img src="google.png" alt="Google" class="social-icon">
                        <img src="facebook.png" alt="Facebook" class="social-icon">
                        <img src="apple.png" alt="Apple" class="social-icon">
                    </div>
                </div>
                <a href="{{ route('login') }}" class="login-link">Already have an account?</a>
            </form>
        </div>
    </div>

    <script>
        function toggleOtherField() {
            const otherField = document.getElementById('otherField');
            const documentType = document.getElementById('documentType');
            if (documentType.value === 'other') {
                otherField.style.display = 'block';
            } else {
                otherField.style.display = 'none';
            }
        }
    </script>
</body>

</html>
<style>

    /* General Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    background-color: #f3f6fb;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    display: flex;
    max-width: 1200px;
    width: 100%;
    background-color: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

/* Left Section */
.left-section {
    flex: 1;
    background-color: #013b9e;
    color: white;
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: left;
}

.features h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.features ul {
    list-style: none;
    padding: 0;
}

.features li {
    font-size: 18px;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
}

.features li::before {
    content: "✔";
    color: #00aaff;
    margin-right: 10px;
}

/* Right Section */
.right-section {
    flex: 1.2;
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}

.logo {
    font-size: 36px;
    font-weight: bold;
    color: #013b9e;
    margin-bottom: 10px;
}

form {
    max-width: 400px;
    margin: auto;
}

input, select {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 6px;
}

button {
    padding: 12px;
    width: 100%;
    background-color: #007bff;
    border: none;
    border-radius: 6px;
    color: white;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #005bb5;
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

.social-icon {
    width: 40px;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.social-icon:hover {
    transform: scale(1.1);
}

/* Responsive Styles */
@media (max-width: 768px) {
    .container {
        flex-direction: column;
    }

    .left-section {
        padding: 20px;
        text-align: center;
    }

    .right-section {
        padding: 20px;
    }
}

@media (max-width: 480px) {
    input, button {
        padding: 10px;
    }

    .logo {
        font-size: 28px;
    }
}

.form-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
}

label {
    font-size: 14px;
    color: #555;
    margin-bottom: 5px;
    font-weight: 500;
}

.form-input {
    padding: 14px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 8px;
    transition: border-color 0.2s;
}

.form-input:focus {
    border-color: #013b9e;
    outline: none;
}


</style>