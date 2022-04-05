<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vishal Gupta - Web Devloper , Programmer</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">

            <nav>
                <ul>
                <li><a href="index.php">Home</a></li>
                    <li><a href="intro.php">My Intro</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact Me</a></li>
                </ul>
            </nav>
        </div>
        <div class="main">
            <div class="contactForm">
                <form>
                    <h1>Contact me for work/general Enquiries</h1>
                    <div class="form-group">
                        <label for="clientemail">Name</label>
                        <input type="email" class="form-control" id="clientemail" aria-describedby="emailHelp" placeholder="Enter Name"><br>
                    </div>
                    <div class="form-group">
                        <label for="clientemail">Email address</label>
                        <input type="email" class="form-control" id="clientemail" aria-describedby="emailHelp" placeholder="Enter email"><br>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email & phone with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="clientphone">Phone</label>
                        <input type="phone" class="form-control" id="clientphone" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <label for="clientphone">Enquiry</label>
                        <input type="text" class="form-control" id="clientphone" placeholder="Enquiry">
                    </div>
                    <div class="form-group" id="form-check">
                        <input type="checkbox" class="form-check-input" id="isclient">
                        <label class="form-check-label" for="isclient">I want you to work on a project with me</label>
                    </div>
                    <button type="submit" class="btn btn-sm">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>