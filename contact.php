<?php

require_once('includes/header.php');
?>
<div class="product_text">
    On this page, you have the possibility to ask your questions or make your remarks directly by this form. Our team will always do our best to provide you with the appopriate answers to your questions as soon as possible.
</div>
<div class="container custom-form">
    <p class="contact_us">Contact us</p>
    <form>
        <div class="form-group">
            <input type="text" placeholder="Your name*" class="form-control form_custom"/>
        </div>
        <div class="form-group">
            <input type="text" placeholder="Your email*" class="form-control form_custom"/>
        </div>
        <div class="form-group">
            <input type="text" placeholder="Your compagny*" class="form-control form_custom"/>
        </div>
        <div class="form-group">
            <textarea type="text" placeholder="Message*" class="form-control textaera_custom"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-danger btn_custom">Send request</button>
        </div>
    </form>
</div>

<?php
require_once('includes/footer.php');