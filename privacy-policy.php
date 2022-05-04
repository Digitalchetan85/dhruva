<!DOCTYPE html>
<html lang="en">

<head>
    <title>DHRUVA DEVELOPERS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--LINKS INCLUDE-->
    <?php include 'templates/csslinks.php' ?>

    <style>
        /* Dropdown Button */
        .dropbtn {


            padding: 16px;
            font-size: 16px;
            border: none;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropbtn {
            background-color: white;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #fa892d;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
            background-color: #fa892d;
        }
    </style>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <!--navigation bar Starts-->

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/Logo.png" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">HOME</a></li>
                        <li><a class="active" href="about-us.php">ABOUT US</a></li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn"><a href="projects.php" style="color:black">PROJECTS</button></a>
                                <div class="dropdown-content">
                                    <a href="coral.php"> DHRUVA CORAL</a>
                                    <a href="bliss.php">DHRUVA BLISS</a>
                                    <a href="aurora.php">DHRUVA AURORA</a>
                                </div>
                            </div>
                        </li>

                        <li><a href="gallery.php">GALLERY</a></li>
                        <li><a href="contact.php">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
    </nav>

    <!--navigation bar ends-->


    <div class="container">
        <div class="row justify-content-cent">
            <h1 class="text-center">Privacy Policy</h1>
            <div class="col-md-12 py-md-3">
                <p class="py-md-3">This Privacy Policy describes Our policies and procedures on the collection, use and
                    disclosure of Your information when You use the Service and tells You about Your
                    privacy rights and how the law protects You.</p>
                <p class="py-md-3"><strong>Website - </strong><a href="https://dhruvadevelopers.com/">
                        https://dhruvadevelopers.com/</a></p>
                <h2 class="py-md-3"> Collecting and Using Your Personal Data</h2>
                <h4 class="py-md-2">Personal Data</h4>
                <p class="py-md-2">While using Our Service, We may ask You to provide Us with certain personally
                    identifiable information that can be used to contact or identify You. Personally
                    identifiable information may include, but is not limited to:</p>
                <ul>
                    <li>Email Address</li>
                    <li>First name and last name</li>
                    <li>Phone number</li>
                    <li>Address, State, Province, ZIP/Postal code, City</li>
                    <li>Usage Data</li>
                </ul>
                <h4>Usage Data -</h4>
                <p class="py-md-3">Usage Data is collected automatically when using the Service.</p>
                <h4 class="py-md-2">Tracking Technologies and Cookies
                </h4>
                <p class="py-md-3">We use Cookies and similar tracking technologies to track the activity on Our Service
                    and
                    store certain information. Tracking technologies used are beacons, tags, and scripts to
                    collect and track information and to improve and analyze Our Service.</p>
                <h4 class="py-md-2">Use of Your Personal Data</h4>
                <p>The Company may use Personal Data for the following purposes:</p>
                <ol>
                    <li>To provide and maintain our Service, including to monitor the usage of our Service.</li>
                    <li>To manage Your Account: to manage Your registration as a user of the Service. The
                        Personal Data You provide can give You access to different functionalities of the
                        Service that are available to You as a registered user.
                    </li>
                    <li>For the performance of a contract: the development, compliance and undertaking of
                        the purchase contract for the products, items or services You have purchased or of any
                        other contract with Us through the Service.</li>
                    <li>To contact You: To contact You by email, telephone calls, SMS, or other equivalent
                        forms of electronic communication, such as a mobile application's push notifications
                        regarding updates or informative communications related to the functionalities, products
                        or contracted services, including the security updates, when necessary or reasonable
                        for their implementation.</li>
                    <li>To provide You with news, special offers and general information about other goods,
                        services and events which we offer that are similar to those that you have already
                        purchased or enquired about unless You have opted not to receive such information.To
                        manage Your requests: To attend and manage Your requests to Us.
                    </li>
                    <li>For business transfers: We may use Your information to evaluate or conduct a
                        merger, divestiture, restructuring, reorganization, dissolution, or other sale or
                        transfer of
                        some or all of Our assets, whether as a going concern or as part of bankruptcy,
                        liquidation, or similar proceeding, in which Personal Data held by Us about our Service
                        users is among the assets transferred.</li>
                    <li>For other purposes: We may use Your information for other purposes, such as data
                        analysis, identifying usage trends, determining the effectiveness of our promotional
                        campaigns and to evaluate and improve our Service, products, services, marketing and
                        your experience.</li>
                </ol>
                <h4 class="py-md-3">Retention of Your Personal Data</h4>
                <p>The Company will retain Your Personal Data only for as long as is necessary for the
                    purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the
                    extent necessary to comply with our legal obligations (for example, if we are required to
                    retain your data to comply with applicable laws), resolve disputes, and enforce our legal
                    agreements and policies.</p>
                <h2 class="py-md-3">Disclosure of Your Personal Data</h2>
                <h4 class="py-md-3">Business Transactions</h4>
                <p>If the Company is involved in a merger, acquisition or asset sale, Your Personal Data
                    may be transferred. We will provide notice before Your Personal Data is transferred and
                    becomes subject to a different Privacy Policy</p>
                <h4 class="py-md-3">Other legal requirements</h4>
                <p>The Company may disclose Your Personal Data in the good faith belief that such action
                    is necessary to:</p>
                <ul>
                    <li>Comply with a legal obligation</li>
                    <li>Protect and defend the rights or property of the Company</li>
                    <li>Prevent or investigate possible wrongdoing in connection with the Service</li>
                    <li>Protect the personal safety of Users of the Service or the public</li>
                    <li>Protect against legal liability</li>
                </ul>
                <h4 class="py-md-3">Security of Your Personal Data
                </h4>
                <p>The security of Your Personal Data is important to Us, but remember that no method of
                    transmission over the Internet, or method of electronic storage is 100% secure. While
                    We strive to use commercially acceptable means to protect Your Personal Data, We
                    cannot guarantee its absolute security.</p>
                <h4 class="py-md-3">Contact Us</h4>
                <p>If you have any questions about this Privacy Policy, You can contact us:
                </p>
                <p>By email: - <a href="mailto:info@dhruvadevelopers.com
">info@dhruvadevelopers.com
                    </a>
                </p>
                <p>By phone number -<a href="tel:8550888878"> +91 85508 88878 </a></p>
            </div>
        </div>
    </div>
    <!--Footer starts-->

    <?php include 'templates/footer.php' ?>


    <!--Footer ends-->
</body>

</html>