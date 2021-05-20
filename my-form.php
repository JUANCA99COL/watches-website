<?php
if($_POST["Message"]) {
mail("jcamilocarorodriguez@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: wolfney3@gmail.com");
}
?>




<form id="section-2" class="myForm p-5" action=”mailto:jcamilocarorodriguez@gmail.com”method=”POST” enctype=”multipart/form-data”name=”EmailForm”>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">First Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Second Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="validationTextarea" class="form-label">message</label>
        <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
        <div class="invalid-feedback">
            Please enter a message in the textarea.
        </div>
        </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
