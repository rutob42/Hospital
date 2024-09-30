<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: rgb(44,49,51);
background: linear-gradient(90deg, rgba(44,49,51,1) 60%, rgba(0,138,227,1) 100%); /* Light gray background */
            color: white; /* Dark text for readability */
            margin: 0;
            padding: 0;
        }

        .container-fluid {
            padding: 20px;
        }

        .table-container {
            margin-top: 100px; /* Space from the top */
            text-align: center;
            background-color: #fff; /* White background for the table */
            border-radius: 8px; /* Rounded corners */
            background: rgb(44,49,51);
background: linear-gradient(90deg, rgba(44,49,51,1) 60%, rgba(0,138,227,1) 100%); /* Subtle shadow for depth */
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse; /* Removes double borders */
            margin: 0 auto; /* Center the table */
        }

        th, td {
            padding: 15px; /* Increased padding for better spacing */
            text-align: left;
            border-bottom: 1px solid #dee2e6; /* Light gray border for rows */
        }

        th {
            background-color: #343a40; /* Dark background for header */
            color: #ffffff; /* White text for header */
            text-transform: uppercase; /* Uppercase for header text */
        }

        tr:hover {
            background: rgb(44,49,51);
background: linear-gradient(90deg, rgba(44,49,51,1) 60%, rgba(0,138,227,1) 100%); /* Subtle shadow for depth */
            }

        img {
            border-radius: 5px; /* Rounded corners for images */
            max-width: 100px; /* Limit image width */
            height: auto; /* Maintain aspect ratio */
        }

        .btn {
            padding: 10px 15px;
            border-radius: 4px;
            color: #fff; /* White text */
            text-decoration: none; /* Remove underline */
            transition: background-color 0.3s ease; /* Smooth transition for hover effect */
            border: none;
            display: inline-block; /* Align buttons properly */
        }

        .btn-danger {
            background-color: #dc3545; /* Red background for delete button */
        }

        .btn-danger:hover {
            background-color: #c82333background: rgb(44,49,51);
background: linear-gradient(90deg, rgba(44,49,51,1) 60%, rgba(0,138,227,1) 100%); /* Subtle shadow for depth */
             }

        .btn-update {
            background-color: blue}

        .btn-update:hover {
            background: rgb(44,49,51);
background: linear-gradient(90deg, rgba(44,49,51,1) 60%, rgba(0,138,227,1) 100%); /* Subtle shadow for depth */
            }

        @media (max-width: 768px) {
            th, td {
                display: block; /* Stack elements vertically on smaller screens */
                width: 100%; /* Full width for mobile view */
                background: rgb(44,49,51);
background: linear-gradient(90deg, rgba(44,49,51,1) 60%, rgba(0,138,227,1) 100%); /* Subtle shadow for depth */
            }
            tr {
                margin-bottom: 15px; /* Space between rows */
                background: rgb(44,49,51);
background: linear-gradient(90deg, rgba(44,49,51,1) 60%, rgba(0,138,227,1) 100%); /* Subtle shadow for depth */
            border: 1px solid #dee2e6; /* Border for rows */
            }
            th {
                display: none; /* Hide header for mobile view */
            }
            td::before {
                content: attr(data-label); /* Use data-label for mobile headers */
                font-weight: bold; /* Make labels bold */
                display: inline-block; /* Align labels */
                margin-right: 10px; /* Space between label and data */
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
            <div class="table-container">
                <table>
                    <tr>
                        <th>Doctor Name</th>
                        <th>Phone</th>
                        <th>Speciality</th>
                        <th>Room No.</th>
                        <th>Images</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>

                    @foreach($data as $doctor)
                    <tr>
                        <td data-label="Doctor Name">{{$doctor->name}}</td>
                        <td data-label="Phone">{{$doctor->phone}}</td>
                        <td data-label="Speciality">{{$doctor->speciality}}</td>
                        <td data-label="Room No.">{{$doctor->room}}</td>
                        <td data-label="Images"><img src="doctorimage/{{$doctor->image}}" alt=""></td>
                        <td data-label="Delete">
                            <a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a>
                        </td>
                        <td data-label="Update">
                            <a class="btn btn-update" href="{{url('updatedoctor')}}">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <!-- End custom js for this page -->
        @include('admin.script')
    </div>
</body>
</html>
