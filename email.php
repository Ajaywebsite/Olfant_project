<?php 
session_start();
print_r($_POST['email']);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <div class="form-group">
      <label for=""></label>
      <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
      <small id="emailHelpId" class="form-text text-muted">Help text</small>
    </div>
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- CDN of jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
  </script>

  <!-- CDN for chosen plugin -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>

  <!-- CDN for CSS of chosen plugin -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="email.css">
</head>
<body>
  <navbar>
    <nav class="navbar navbar-expand-lg bg-body-dark">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">One<span class="text-info">Spect</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active  text-white" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-white" href="#">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle  text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Link
              </a>
              <ul class="dropdown-menu  text-white">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-white">Link</a>
              <!-- <a class=" nav-link disabled" aria-disabled="true">Link</a> -->
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </navbar>
  <!-- -------------------- -->
  <mail>
    <div class="form-body">
      <div class="row">
        <div class="form-holder">
          <div class="form-content">
            <div class="form-items">
              <h3>Send Mail</h3>

              <form class="requires-validation" action="sentmail.php" method="POST" novalidate>
                <div class="col-md-12">
                  <select id="select" multiple style="width:100%;" name="email[]" id="email">
                    <option value="ajay@gmail.com">ajneshkumarsah@gmail.com</option>
                    <option value="Chandan@97gmail.com">Chandan@97gmail.com</option>
                    <option value="ayush@gmail.com">ayush@gmail.com</option>
                    <option value="priyanka@gmail.com">priyanka@gmail.com</option>
                    <option value="shafaanjum@gmail.com">shafaanjum@gmail.com</option>
                    <option value="swetakumari76@gmail.com">swetakumari76@gmail.com</option>
                  </select>

                  <!-- <label for="email">Enter Email</label>
                  <input class="form-control p-2" type="text" name="name" placeholder="Enter recipients Email " required> -->
                  <!-- <div id="suggestion-box"></div> -->
                </div>

                <div class="col-md-12 mt-4">
                  <label for="subject">Enter Subject</label>
                  <input class="form-control p-2" type="email" name="subject" placeholder="Enter Subject" required>

                </div>
                <div class="col-md-12 mt-4">
                  <label for="letter">Enter Letter</label>
                  <textarea id="w3review" name="letter" rows="5" cols="100" placeholder="Enter Letter"></textarea>
                </div>

                <div class="form-button mt-3">
                  <button id="submit" type="submit" name="submit" class="btn btn-primary">Sent</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      // Initiating the chosen plugin 
      $(document).ready(function() {
        $("#select").chosen();

        // Sample array of suggested emails
        // const suggestedEmails = [
        //   'john.doe@example.com',
        //   'jane.smith@example.com',
        //   'alice.wonderland@example.com'
        // ];

        // const $emailInput = $('#select');
        // const $suggestionBox = $('#select');

        // // Event listener for input field
        // $emailInput.on('input', function () {
        //   const inputValue = $emailInput.val().toLowerCase();
        //   const filteredEmails = suggestedEmails.filter(email => email.includes(inputValue));

        //   // Display suggestions
        //   $suggestionBox.empty();
        //   filteredEmails.forEach(email => {
        //     const $suggestion = $('<div class="suggestion">' + email + '</div>');
        //     $suggestion.on('click', function () {
        //       $emailInput.val(email);
        //       $suggestionBox.empty();
        //     });
        //     $suggestionBox.append($suggestion);
        //   });
        // });

      });
    </script>

<script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
          var messageText = "<?= $_SESSION['status'] ?? ''; ?>";
          if(messageText!='') {

          Swal.fire({
  title: "Thank you",
  text: messageText,
  icon: "Success",
});
<?php unset($_SESSION['status']) ?>
          }
        </script>
</body>

</html>