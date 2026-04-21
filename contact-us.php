<?php include 'header.php'; ?>

<div class="container">
    <h1>Contact Us</h1>
    <p>
        Have a question or want to discuss your project? We'd love to hear from you! Fill out the form below, and one of our 
        team members will get back to you as soon as possible.
    </p>
    
    <form method="POST" style="max-width: 600px; margin: 30px 0;">
        <div style="margin-bottom: 15px;">
            <label for="name" style="display: block; margin-bottom: 5px;"><strong>Name:</strong></label>
            <input type="text" id="name" name="name" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        
        <div style="margin-bottom: 15px;">
            <label for="email" style="display: block; margin-bottom: 5px;"><strong>Email:</strong></label>
            <input type="email" id="email" name="email" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        
        <div style="margin-bottom: 15px;">
            <label for="phone" style="display: block; margin-bottom: 5px;"><strong>Phone:</strong></label>
            <input type="tel" id="phone" name="phone" style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        
        <div style="margin-bottom: 15px;">
            <label for="subject" style="display: block; margin-bottom: 5px;"><strong>Subject:</strong></label>
            <input type="text" id="subject" name="subject" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        
        <div style="margin-bottom: 15px;">
            <label for="message" style="display: block; margin-bottom: 5px;"><strong>Message:</strong></label>
            <textarea id="message" name="message" rows="6" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;"></textarea>
        </div>
        
        <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">Send Message</button>
    </form>
    
    <h2>Your form has been submitted</h2>
  
    
</div>

<?php include 'footer.php'; ?>