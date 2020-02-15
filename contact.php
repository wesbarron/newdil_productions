<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CONTACT NEWDIL</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href=".././css/styles.css">
    </head>
    <body>
    <!-----------------------------------------------------------NAVBAR / MENU------------------------------------------------>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand">NEWDIL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="about.html" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          About
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="mission.html">Our Mission/Objectives</a>
                          <a class="dropdown-item" href="team.html">Our Team</a>
                        </div>
                      </li>
                <li class="nav-item dropdown">
                  <a class="nav-link active dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Contact Us
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="https://charity.gofundme.com/o/en/campaign/support-liberia">Contribute/Donate</a>
                    <a class="dropdown-item" href="contact.php">Contact Information</a>
                  </div>
                </li>
              </ul>
            </div>
        `</nav>
    </div>
    <!---------------------------------------------------CONTENT AREA---------------------------------------------------------->
    <br>
    <br>
    <div class="container text-center">
        <br>
        <h1>Subscribe or Contact Us!</h1>
        <br>

    <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="return postToGoogle();"></iframe>

    <form id="form" target="success" onsubmit="return postToGoogle();" action="https://docs.google.com/forms/u/1/d/e/1FAIpQLSdHaRRFo7w5CUFuzxE-GY0nhAcmfZvN36rJKWkXiYM9OXView/formResponse" method="post">
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input id="emailID" type="email" class="form-control" id="emailField" aria-describedby="emailHelp" name="entry.46683095" placeholder="Email Add." required>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="name">Full name</label>
                  <input id="nameID" type="text" class="form-control" id="nameField" name="entry.318719169" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                  <label for="serving">Volunteer Information Request?</label>
                  <input id="servantID" type="radio"  name="entry.2046442032" value="yes">Yes
                  <input id="servantID" type="radio"  name="entry.2046442032" value="no">No
                </div>
                <button id="send" type="submit" class="btn btn-primary">Submit</button>
              </form>
              <br>
              <br>
    </div>
    <br>
    <br>

    <h1 name="success" id="success-msg">You have been successfully added to our contact list.</h1>
<!----------------------------------------------------------------FOOTER------------------------------------------->
    <footer id="index-footer" class="footer">
            <div class="container-fluid text-center">
                <span>&copy; 2019 NEWDIL WEB PRODUCTIONS</span>   
            </div>
    </footer>

        <script>

            <script>

function postToGoogle() {
                var field1 = $("#nameField").val();
                var field2 = $("#emailField").val();
                
				if(field1 == ""){
					alert('Please Fill Your Email');
					document.getElementById("emailField").focus();
					return false;
				}
				if(field2 == ""){
					alert('Please Fill Your Name');
					document.getElementById("nameField").focus();
					return false;
				}
				

            $.ajax({
                    url: "https://docs.google.com/forms/u/1/d/e/1FAIpQLSdHaRRFo7w5CUFuzxE-GY0nhAcmfZvN36rJKWkXiYM9OXView/formResponse",
					data: {"entry.46683095": field1, "entry.318719169": field2},
                    type: "POST",
                    dataType: "xml",
                    success: function(d)
					{
                        $('#success-msg').show();
						$('#form').hide();
					},
					error: function(x, y, z)
						{

							$('#success-msg').show();
							$('#form').hide();
							
						}
                });
				return false;
            }
        </script>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>
