<?php
session_start();
    $_SESSION;
require 'lib/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $name = '';
    }
    if (isset($_POST['age'])) {
        $age = $_POST['age'];
    } else {
        $age = '';
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email = '';
    }

    if (isset($_POST['phone'])) {
        $phone = $_POST['phone'];
    } else {
        $phone = '';
    }

    if (isset($_POST['street'])) {
        $street= $_POST['street'];
    } else {
        $street = '';
    }
    if (isset($_POST['health'])) {
        $health= $_POST['health'];
    } else {
        $health = '';
    }
    if (isset($_POST['fitness'])) {
        $fitness= $_POST['fitness'];
    } else {
        $fitness = '';
    }

    $contacts = get_contacts();
    $newContact = array(
        'name' => $name,
        'age' => $age,
        'email' => $email,
        'phone' => $phone,
        'street' => $street,
        'health' => $health,
        'fitness' => $fitness,
    );
    $contacts[] = $newContact;

    save_contacts($contacts);

    header('Location: /');
    die;
}
?>
       
       
       <?php require 'layout/header.php'; ?>

       <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Registration Form</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Member Registration</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form action="/index.php" id="contactForm" method="POST">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Age input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="age" name="age"type="number" placeholder="Enter your age" data-sb-validations="required,age" />
                                <label for="age">Age</label>
                                <div class="invalid-feedback" data-sb-feedback="age:required">An age is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" name="phone" type="number" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                             <!-- Street address input-->
                             <div class="form-floating mb-3">
                                <input class="form-control" id="street" name="street" type="text" placeholder="Enter your street adress" data-sb-validations="required,street adress" />
                                <label for="street">Street address</label>
                                <div class="invalid-feedback" data-sb-feedback="street:required">An adress is required.</div>
                            </div>
                            <!-- Medical conditions input-->
                            <div class="form-floating mb-3">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="health" name="health" type="text" placeholder="Enter your health condition" data-sb-validations="required,health" />
                                <label for="health">Health condition</label>
                                <div class="invalid-feedback" data-sb-feedback="health:required">Your health condition is required.</div>
                            </div>
                             <!-- Fitness classes input-->
                             <div class="form-floating mb-3">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="fitness" name="fitness" type="text" placeholder="Enter your class fitness" data-sb-validations="required,fitness" />
                                <label for="fitness">Enter class you want to participate in</label>
                                <div class="invalid-feedback" data-sb-feedback="fitness:required">A class is required.</div>
                            </div>

                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitError"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" name="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                </div>
            </div>
        </section>

        <?php require 'layout/footer.php'; ?>
       