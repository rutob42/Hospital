<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #black;
        }

        .container-fluid {
            background: #black;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            padding: 40px 50px;
            margin: 60px auto;
            max-width: 800px;
            animation: fadeIn 1s ease-in-out;
        }

        h2 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 30px;
            color: #white;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        form {
            width: 100%;
            margin-top: 20px;
        }

        form label {
            font-weight: 600;
            display: block;
            margin-bottom: 5px;
            color: #white;
            font-size: 14px;
        }

        form input[type="text"],
        form input[type="number"],
        form input[type="file"],
        form select {
            width: 100%;
            padding: 15px 20px;
            margin-bottom: 25px;
            border: 1px solid #dddddd;
            border-radius: 10px;
            color: #333333;
            background-color: #f9f9f9;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            font-size: 15px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        form input[type="text"]:focus,
        form input[type="number"]:focus,
        form input[type="file"]:focus,
        form select:focus {
            border-color: #80bdff;
            box-shadow: 0 0 10px rgba(128, 189, 255, 0.6);
        }

        form input[type="file"] {
            padding: 5px;
            cursor: pointer;
            background-color: #ffffff;
        }

        form input[type="submit"] {
            background: linear-gradient(to right, #56ccf2, #2f80ed);
            color: #ffffff;
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: background 0.4s ease, transform 0.2s ease;
            box-shadow: 0 10px 20px rgba(47, 128, 237, 0.3);
            font-size: 16px;
            font-weight: 600;
        }

        form input[type="submit"]:hover {
            background: linear-gradient(to right, #2f80ed, #56ccf2);
            transform: translateY(-2px);
        }

        .form-group {
            margin-bottom: 15px;
        }

        /* Fancy Select Box Styling */
        select {
            color: #333333;
            background: url('data:image/svg+xml;charset=US-ASCII,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4 5"><path fill="black" d="M2 0L0 2h4L2 0z"/></svg>') no-repeat right 10px center;
            appearance: none;
            border-radius: 10px;
            background-color: #ffffff;
        }

        /* Container Alignment */
        .page-body-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container-fluid {
                padding: 20px 30px;
                margin: 20px auto;
            }

            form input[type="text"],
            form input[type="number"],
            form input[type="file"],
            form select {
                font-size: 14px;
                padding: 12px 15px;
            }

            form input[type="submit"] {
                padding: 12px 30px;
            }
        }

        /* Animation */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


        @if(session()->has('message'))

        <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert">
            X
        </button>

        {{session()->get('message')}}

        </div>

        @endif
            <div class="container" style="text-align: center; padding-top: 30px;">
                <h2>Add New Doctor</h2>
                <form action="{{url('editdoctor',$data->id)}}" method="Post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="">Doctor Name</label>
                    <input type="text" name="name" value="{{$data->name}}">
                </div>

                <div>
                    <label for="">Phone</label>
                    <input type="number" name="phone" value="{{$data->phone}}">
                </div>

                <div>
                    <label for="">Speciality</label>
                    <input type="text" name="name" value="{{$data->speciality}}">
                </div>

                <div>
                    <label for="">Room No.</label>
                    <input type="text" name="name" value="{{$data->room}}">
                </div>

                <div>
                    <label for="">Doctor old Image</label>
                    <img height="150" width="150" src="doctorimage/{{$data->image}}">
                </div>

                <div>
                    <label for="">Change Image</label>
                    <input type="file" name="file">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Submit" required="">
                </div>

            </form>
            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- End custom js for this page -->
    @include('admin.script')
</body>
</html>
