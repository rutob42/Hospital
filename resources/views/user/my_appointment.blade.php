<!DOCTYPE html>
<html lang="en">
  <style>
    body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #eaeaea; /* Light gray background for subtle contrast */
}

.table-container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 70px 0; /* Center padding for the container */
}

.premium-table {
    width: 85%;
    border-collapse: collapse;
    border-radius: 12px; /* Rounded corners */
    overflow: hidden; /* Rounded corners */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Elevated shadow effect */
    background: linear-gradient(135deg, #ffffff 0%, #f9f9f9 100%); /* Subtle gradient */
}

.premium-table thead {
    background: #4A90E2; /* Premium header color */
    color: #ffffff; /* White text for contrast */
    text-align: left;
}

.premium-table th, .premium-table td {
    padding: 15px 20px; /* Padding for cells */
    text-align: left;
    font-size: 16px; /* Increased font size for better readability */
}

.premium-table tbody tr {
    transition: background-color 0.3s, transform 0.2s; /* Smooth transition for hover */
}

.premium-table tbody tr:hover {
    background-color: #f1f1f1; /* Light hover background */
    transform: translateY(-2px); /* Subtle lift effect on hover */
}

.premium-table tbody tr:nth-child(even) {
    background-color: #f9f9f9; /* Zebra striping for even rows */
}

.btn {
    padding: 10px 15px;
    background-color: #e74c3c; /* Button background color */
    color: white; /* Button text color */
    text-decoration: none;
    border-radius: 6px;
    transition: background-color 0.3s, transform 0.2s; /* Smooth transition */
}

.btn:hover {
    background-color: #c0392b; /* Darker button color on hover */
    transform: scale(1.05); /* Slight scaling on hover for effect */
}

  </style>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <title>One Health - Medical Center HTML5 Template</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="../assets/css/theme.css">
    
    <!-- Custom CSS for Styling -->
    <style>
      body {
        font-family: 'Arial', sans-serif;
        background-color: #f7f7f7;
      }

      .topbar {
        background-color: #2b6777;
        padding: 10px 0;
        color: #f7f7f7;
      }

      .topbar a {
        color: #f7f7f7;
        text-decoration: none;
      }

      .navbar-brand span {
        color: #28a745;
      }

      .navbar {
        background-color: #f7f7f7;
        border-bottom: 2px solid #28a745;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .navbar-nav .nav-link {
        color: #2b6777;
        font-weight: bold;
      }

      .navbar-nav .nav-link:hover {
        color: #28a745;
      }

      .input-group-text {
        background-color: #28a745;
        color: white;
      }

      /* Table Styling */
      table {
        border-collapse: collapse;
        width: 80%;
        margin: auto;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
      }

      th, td {
        padding: 15px;
        text-align: center;
      }

      th {
        background-color: #28a745;
        color: white;
      }

      td {
        background-color: #f9f9f9;
        border-bottom: 1px solid #e0e0e0;
      }

      tr:nth-child(even) td {
        background-color: #e8f5e9;
      }

      tr:hover td {
        background-color: #c8e6c9;
      }

      /* Button Styling */
      .btn {
        text-transform: uppercase;
        padding: 10px 20px;
        border-radius: 20px;
        transition: all 0.3s ease;
      }

      .btn-danger {
        background-color: #d32f2f;
        color: white;
        border: none;
      }

      .btn-danger:hover {
        background-color: #c62828;
        box-shadow: 0 4px 12px rgba(211, 47, 47, 0.3);
      }

      /* Responsive Adjustments */
      @media (max-width: 768px) {
        table {
          width: 100%;
        }

        .navbar {
          padding: 10px 15px;
        }

        .input-group {
          display: none; /* Hide search input on smaller screens */
        }

        .navbar-brand {
          font-size: 18px;
        }
      }
    </style>
  </head>
  <body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 text-sm">
              <div class="site-info">
                <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                <span class="divider">|</span>
                <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
              </div>
            </div>
            <div class="col-sm-4 text-right text-sm">
              <div class="social-mini-button">
                <a href="#"><span class="mai-logo-facebook-f"></span></a>
                <a href="#"><span class="mai-logo-twitter"></span></a>
                <a href="#"><span class="mai-logo-dribbble"></span></a>
                <a href="#"><span class="mai-logo-instagram"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

          <form action="#">
            <div class="input-group input-navbar">
              <div class="input-group-prepend">
                <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
              </div>
              <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
            </div>
          </form>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="doctors.html">Doctors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>

              @if(Route::has('login'))
                @auth
                  <li class="nav-item">
                    <a class="nav-link" style="background-color:green; color:white;" href="{{url('myappointment')}}">My Appointment</a>
                  </li>
                  <x-app-layout></x-app-layout>
                @else
                  <li class="nav-item">
                    <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                  </li>
                @endauth
              @endif
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div align="center" style="padding:70px;">
      <table>
        <tr>
          <th>Doctor Name</th>
          <th>Date</th>
          <th>Message</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        @foreach($appoint as $appoints)
        <tr>
          <td>{{$appoints->doctor}}</td>
          <td>{{$appoints->date}}</td>
          <td>{{$appoints->message}}</td>
          <td>{{$appoints->status}}</td>
          <td>
            <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')" href="{{url('cancel_appoint', $appoints->id)}}">Cancel</a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/js/theme.js"></script>
  </body>
</html>
