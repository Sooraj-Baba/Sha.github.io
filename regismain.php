<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Resturent with Shalini</title>
    <?php include 'links.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .shalini_singh:focus {
        border-color: darkred;
    }

    .shalini_singh {
        background-image: green;
    }


    .shh {
        position: relative;

        background-image: linear-gradient(to left,
                hsl(344, 100%, 50%),
                hsl(31, 100%, 40%));

        z-index: 1;
    }

    .shh::before {
        position: absolute;
        content: "";
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;

        background-image: linear-gradient(to top,
                hsl(344, 100%, 20%),
                hsl(230, 100%, 30%));

        z-index: -1;
        transition: opacity 0.5s linear;
        opacity: 0;
    }

    .shh:hover::before {
        opacity: 1;

    }

    .signup-form {
        max-width: auto;
        padding: 1rem;

        border-width: 3px;
        border-style: solid;
        border-image:
            linear-gradient(to bottom,
                red,
                rgba(0, 0, 0, 0)) 1 100%;
    }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <script>
    $(document).ready(function() {
        $('.shalini_singh').css({
            "border-radius": "1px",
            "border-color": "lightgreen",
        });

        $('.shalini').css({
            "background-image": "linear-gradient(red,black)",
            "height": "37.5px",
            "width": "38px",

            "padding-left": "11px",
            "color": "yellow",
            "border-radius": "1px",

        })

    });
    $(document).ready(function() {
        $('.form-controls').css({
            "border": "1px solid red",
        });
    });
    </script>

    <br>

    <div class="signup-form col-sm-6 col-lg-6 col-md-6 m-auto p-2">
        <form action="/examples/actions/confirmation.php" method="post">
            <h2 class="text-center">Create an account</h2>
            <p class="text-center">Please fill in this form to create an account!</p>
            <hr class="w-75 bg-light">
            <div class="form-group">
                <div class="input-group w-75 m-auto">
                    <span class="shalini input-group-addon"><i class=" fa fa-user pr-2 pt-2"
                            style="font-size:19px;"></i></span>
                    <input type="text" class="shalini_singh form-control" name="user" placeholder="User Name"
                        required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group w-75 m-auto">

                    <span class="shalini input-group-addon"><i class="fa fa-list pr-2"
                            style="font-size:16px; padding-top:10px;"></i></span>

                    <select name="department" class="shalini_singh form-control selectpicker">
                        <option value="">Select your state</option>
                        <option>Utter Pradesh</option>
                        <option>Madhya Pradesh</option>
                        <option>Bihar</option>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group w-75 m-auto">
                    <span class="shalini input-group-addon"><i class="fa fa-paper-plane pr-2 pt-2"
                            style="font-size:16px;"></i></span>
                    <input type="email" class="shalini_singh form-control" name="email" placeholder="Email Address"
                        required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group w-75 m-auto">
                    <span class="shalini input-group-addon"><i class="fa fa-phone pr-2 pt-2"
                            style="font-size:18px;"></i></span>
                    <input type="number" class="shalini_singh form-control" name="number" placeholder="Mobile-Number"
                        required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group w-75 m-auto">
                    <span class="shalini input-group-addon"><i class="fa fa-lock pr-2 pt-2"
                            style="font-size:19px;"></i></span>
                    <input type="text" class="shalini_singh form-control" name="password" placeholder="Password"
                        required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group w-75 m-auto">
                    <span class="shalini input-group-addon">
                        <i class="fa fa-lock pr-2 pt-2" style="font-size:19px;"></i>
                    </span>
                    <input type="text" class="shalini_singh form-control" name="confirm_password"
                        placeholder="Confirm Password" required="required">
                </div>
            </div>
            <div class="form-group text-center">
                <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a
                        href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group text-center">
                <button class="shh btn w-75 text-white" onmouseover="hoverthis()"
                    onmouseout="removethis()"><b>SUBMIT</b></button>
            </div>
        </form>
        <div class="text-center">Already have an account? <a href="#">Login here</a></div>
    </div>







    <?php include 'footer.php'; ?>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#contact_form').bootstrapValidator({
                // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    first_name: {
                        validators: {
                            stringLength: {
                                min: 2,
                            },
                            notEmpty: {
                                message: 'Please enter your First Name'
                            }
                        }
                    },
                    last_name: {
                        validators: {
                            stringLength: {
                                min: 2,
                            },
                            notEmpty: {
                                message: 'Please enter your Last Name'
                            }
                        }
                    },
                    user_name: {
                        validators: {
                            stringLength: {
                                min: 8,
                            },
                            notEmpty: {
                                message: 'Please enter your Username'
                            }
                        }
                    },
                    user_password: {
                        validators: {
                            stringLength: {
                                min: 8,
                            },
                            notEmpty: {
                                message: 'Please enter your Password'
                            }
                        }
                    },
                    confirm_password: {
                        validators: {
                            stringLength: {
                                min: 8,
                            },
                            notEmpty: {
                                message: 'Please confirm your Password'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'Please enter your Email Address'
                            },
                            emailAddress: {
                                message: 'Please enter a valid Email Address'
                            }
                        }
                    },
                    contact_no: {
                        validators: {
                            stringLength: {
                                min: 12,
                                max: 12,
                                notEmpty: {
                                    message: 'Please enter your Contact No.'
                                }
                            }
                        },
                        department: {
                            validators: {
                                notEmpty: {
                                    message: 'Please select your Department/Office'
                                }
                            }
                        },
                    }
                }
            })
            .on('success.form.bv', function(e) {
                $('#success_message').slideDown({
                    opacity: "show"
                }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

                // Prevent form submission
                e.preventDefault();

                // Get the form instance
                var $form = $(e.target);

                // Get the BootstrapValidator instance
                var bv = $form.data('bootstrapValidator');

                // Use Ajax to submit form data
                $.post($form.attr('action'), $form.serialize(), function(result) {
                    console.log(result);
                }, 'json');
            });
    });
    </script>

</body>

</html>