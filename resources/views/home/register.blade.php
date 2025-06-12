<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="left-section">
            <ul>
                <li>Free and unlimited Demo trading</li>
                <li>Over 2800 leveraged instruments</li>
                <li>Tight spreads & no commissions</li>
                <li>Cutting-edge trading technology</li>
                <li>Comprehensive Trading Academy</li>
            </ul>
        </div>
        <div class="right-section">
            <div class="logo">
                <h1>Plus500</h1>
            </div>
            <h2>Join 26+ million who have chosen Plus500</h2>
            <form action="#">
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Create Account</button>
                <div class="other-options">
                    <p>or create an account with</p>
                    <div class="social-icons">
                        <img src="google.png" alt="Google" class="social-icon">
                        <img src="facebook.png" alt="Facebook" class="social-icon">
                        <img src="apple.png" alt="Apple" class="social-icon">
                    </div>
                </div>
                <a href="#" class="login-link">Already have an account?</a>
            </form>
        </div>
    </div>
</body>
</html>
<style>

    /* Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    background-color: #f3f6fb;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    display: flex;
    max-width: 1200px;
    width: 100%;
    background-color: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
}

.left-section {
    background-color: #013b9e;
    color: white;
    padding: 60px 40px;
    flex: 1;
}

.left-section ul {
    list-style: none;
    padding-left: 20px;
}

.left-section ul li {
    font-size: 20px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
}

.left-section ul li::before {
    content: '✔';
    color: #00aaff;
    font-size: 18px;
    margin-right: 10px;
}

.right-section {
    padding: 60px 50px;
    flex: 1.2;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.logo h1 {
    color: #013b9e;
    font-size: 42px;
    text-align: center;
    font-weight: bold;
}

h2 {
    font-size: 20px;
    margin-bottom: 30px;
    color: #555;
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
    max-width: 400px;
    width: 100%;
    margin: 0 auto;
}

input {
    padding: 16px;
    font-size: 16px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    transition: border-color 0.2s;
}

input:focus {
    border-color: #013b9e;
    outline: none;
}

button {
    padding: 16px;
    font-size: 18px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #005bb5;
}

.other-options {
    text-align: center;
    margin-top: 20px;
}

.social-icons {
    display: flex;
    justify-content: center;
    margin-top: 15px;
}

.social-icon {
    width: 40px;
    margin: 0 15px;
    cursor: pointer;
    transition: transform 0.2s ease-in-out;
}

.social-icon:hover {
    transform: scale(1.1);
}

.login-link {
    text-align: center;
    margin-top: 25px;
    color: #007bff;
    text-decoration: none;
    font-weight: 500;
}

.login-link:hover {
    text-decoration: underline;
}

/* Responsive Styles */
@media (max-width: 1024px) {
    .container {
        flex-direction: column;
        max-width: 100%;
    }

    .left-section {
        padding: 40px 20px;
        text-align: center;
    }

    .right-section {
        padding: 40px 20px;
    }

    .logo h1 {
        font-size: 36px;
    }

    h2 {
        font-size: 18px;
    }

    button {
        font-size: 16px;
    }
}

@media (max-width: 768px) {
    .container {
        box-shadow: none;
        border-radius: 0;
    }

    .left-section ul li {
        font-size: 16px;
        margin-bottom: 10px;
    }

    input {
        padding: 12px;
        font-size: 14px;
    }

    button {
        padding: 14px;
        font-size: 16px;
    }
}

@media (max-width: 480px) {
    .container {
        flex-direction: column;
    }

    .right-section {
        padding: 20px;
    }

    form {
        max-width: 100%;
    }

    .left-section {
        display: block;
        order: 2; /* Moves the left section under the form */
        padding: 20px;
    }

    .logo h1 {
        font-size: 28px;
    }

    h2 {
        font-size: 16px;
    }

    button {
        padding: 12px;
        font-size: 14px;
    }
}

</style>