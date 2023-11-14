@extends('main.layout')
@section('content')
<section class="contact">
    <div class="px-6 py-6 my-6 text-center">
        <h1 class="display-5 fw-bold fs-2 lh-1 mb-3">Contact us</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead fs-6">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control" placeholder="John Doe">
                            <label for="name">Your name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="email" id="email" name="email" class="form-control" placeholder="name@example.com">
                            <label for="email">Your email</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Cancellation, subscription, etc">
                            <label for="subject">Subject</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea" placeholder="Write something..."></textarea>
                            <label for="message">Your message</label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="submit" class="btn btn-light btn-md px-4 gap-3">Send Message</button>
                    <a type="button" class="btn btn-outline-light btn-md px-4" href="/">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection