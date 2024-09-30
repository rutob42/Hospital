<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa; /* Light background color for the body */
            color: #333; /* Dark text for readability */
            margin: 0;
            padding: 0;
            padding-top: 40px;
        }

        .container-scroller {
            display: flex;
        }

        .table-box {
            flex-grow: 1;
            padding: 20px;
            
            margin: 60px 20px 20px 20px;
            background-color: #ffffff; /* White background for the table box */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0; /* Light gray border for rows */
        }

        th {
            background-color: #007bff; /* Blue background for the header */
            color: #ffffff; /* White text in header */
            font-weight: bold;
            text-transform: uppercase;
        }

        tr:hover {
            background-color: #f1f1f1; /* Light gray background on row hover */
        }

        .approve-btn, .cancel-btn {
            padding: 8px 12px;
            border-radius: 4px;
            text-decoration: none;
            color: #fff; /* White text */
            transition: background-color 0.3s ease; /* Smooth transition for hover effect */
        }

        .approve-btn {
            background-color: #28a745; /* Green for approve */
        }

        .approve-btn:hover {
            background-color: #218838; /* Darker green on hover */
        }

        .cancel-btn {
            background-color: #dc3545; /* Red for cancel */
        }

        .cancel-btn:hover {
            background-color: #c82333; /* Darker red on hover */
        }

        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block; /* Stack table elements vertically on smaller screens */
            }
            th {
                display: none; /* Hide header for mobile view */
            }
            tr {
                margin-bottom: 10px; /* Space between rows */
                background-color: #fff; /* White background for rows */
                border: 1px solid #e0e0e0; /* Border for rows */
            }
            td {
                text-align: right; /* Align text to the right */
                position: relative; /* Position relative for pseudo-elements */
                padding-left: 50%; /* Space for labels */
            }
            td::before {
                content: attr(data-label); /* Use data attributes for mobile labels */
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 10px;
                text-align: left; /* Align labels to the left */
                font-weight: bold; /* Make labels bold */
                text-transform: uppercase; /* Uppercase labels */
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
        
        <div class="table-box">
            <table>
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Doctor Name</th>
                        <th>Date</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $appoint)
                    <tr>
                        <td data-label="Patient Name">{{$appoint->name}}</td>
                        <td data-label="Email">{{$appoint->email}}</td>
                        <td data-label="Phone">{{$appoint->phone}}</td>
                        <td data-label="Doctor Name">{{$appoint->doctor}}</td>
                        <td data-label="Date">{{$appoint->date}}</td>
                        <td data-label="Message">{{$appoint->message}}</td>
                        <td data-label="Status">{{$appoint->status}}</td>
                        <td data-label="Action">
                            <a class="approve-btn" href="{{url('approved', $appoint->id)}}">Approve</a>
                            <a class="cancel-btn" href="{{url('cancelled', $appoint->id)}}">Cancel</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('admin.script')
</body>
</html>
