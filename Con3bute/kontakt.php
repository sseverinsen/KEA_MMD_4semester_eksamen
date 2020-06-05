<!DOCTYPE html>
<html lang="da">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'includes/meta.php' ?>
    <meta name="description" content="Kontakt til Con3bute">

    <title>Kontakt</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <?php include 'includes/nav.php' ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Kontakt</h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Forside</a>
                    </li>
                    <li class="active">Kontakt</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-8">
                <h3>Kontakt os</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Firma:</label>
                            <input type="text" class="form-control" id="company" required data-validation-required-message="Please enter the name of your company.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Navn:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>E-mailadresse:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Telefonnummer:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Besked:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Kontaktinformation</h3>
                <p>
                    Con3bute<br />Bygmestervej 57 <br />2400 København NV, Denmark<br />
                </p>
                <p><i class="fa fa-phone"></i>
                    <abbr title="Phone">Telefon</abbr>: +45 26 27 76 07</p>
                <p><i class="fa fa-envelope-o"></i>
                    <abbr title="Email">E-mail</abbr>: <a href="mailto:jamilla@con3bute.org">jamilla@con3bute.org</a></p>
                <p><i class="fa fa-clock-o"></i>
                    <abbr title="Hours">Tid</abbr>: Mandag - Fredag mellem kl. 09.30 og kl. 15.30</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li><a href="https://www.facebook.com/con3bute.org/"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                    <li>
                        <a href="https://www.instagram.com/con3bute/"><i class="fa fa-instagram fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/con3bute-mod-til-dialog/"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2248.0927248805733!2d12.534687215928665!3d55.70475998054056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4652524907a9565d%3A0x8a9c02f47dae6b5a!2sBygmestervej%2057%2C%202400%20K%C3%B8benhavn!5e0!3m2!1sda!2sdk!4v1591267785784!5m2!1sda!2sdk" height="300" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

        <?php include 'includes/footer.php' ?>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_send.js"></script>

</body>

</html>
