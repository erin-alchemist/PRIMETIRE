<!DOCTYPE html>
<html lang="en">
<?php
    include 'navbar.php';?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css\contact.css">
   
</head>
<body>
    
    <section class="contact-section">
        <div class="contact-info">
            <h2>Let's Get On Touch</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <ul>
                <li><strong>Location:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                <li><strong>Call:</strong> +953445-131 <br> +953445-131</li>
                <li><strong>Mail:</strong> mizanulislamlil@gmail.com <br> mizanulislamlil@gmail.com</li>
            </ul>
        </div>
        <div class="contact-image">
            <img src="images\contacts.jpg" alt="Person">
        </div>
        <div class="contact-form">
            <h2>Let's Talk With Us!</h2>
            <form>
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email Address">
                <input type="tel" name="phone" placeholder="Phone Number">
                <textarea name="message" placeholder="Message"></textarea>
                <div class="checkbox">
                    
                    <input type="checkbox" name="terms" id="terms">
                    <div class="label">
                    <label for="terms">I agree with the <a href="#">terms of conditions</a></label>
                    </div>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>
</body>
</html>
