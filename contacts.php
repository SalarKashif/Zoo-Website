<!DOCTYPE html>

<html lang = "eng">
  <head>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="jquery-3.7.1.min.js"></script>
    <script type="text/javascript"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="myStyling.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <title>Contacts</title>
  </head>

  <body class="body_style dark">
    <ul class="nav nav-pills nav-fill" class="dark">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="events.php">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="celebrities.php">Celebrities</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="animals-facts-page.php">Fun Facts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="donations.php">Donations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="contacts.php">Contacts</a>
      </li>
    </ul>
    <header class="banner-picture">
      <h1 class="banner-header dark">
        The Zoos of the World
      </h1>
    </header>
    <div id="wrapper">
      <main id="contacts_main">
        <h3 class="intro-caption dark">Contact us!</h3>
      </main>
      <form onsubmit="Email.send(); reset(); return false;">
        <div class="form-group">
          <label for="exampleInputName1">name</label>
          <input type="name" class="form-control" id="Name" aria-describedby="emailHelp" placeholder="Enter name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPhoneNumber1">Phone Number</label>
          <input type="phoneNumber" class="form-control" id="PhoneNumber" placeholder="Enter Phone Number">
        </div>
        <div class="form-group">
          <label for="exampleInputHelp1">Report</label>
          <input type="help" class="form-control" id="Report" placeholder="How can we help you?">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>
</html>