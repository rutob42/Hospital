<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('admin.css')
    <style>
        body {
            font-family: Arial, sans-serif;
            background: rgb(4,4,8);
background: linear-gradient(90deg, rgba(4,4,8,0.966999299719888) 53%, rgba(0,138,227,1) 100%);
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px; /* Limiting width for better appearance */
            margin: 50px auto; /* Centering the container */
            padding: 20px;
            background: rgb(4,4,8);
background: linear-gradient(90deg, rgba(4,4,8,0.966999299719888) 53%, rgba(0,138,227,1) 100%); /* White background for form */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: black; /* Darker text for better readability */
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: white; /* Slightly lighter for labels */
            font-weight: bold; /* Bold labels */
        }
        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 100%; /* Full width inputs */
            padding: 10px;
            margin-bottom: 20px; /* Space between inputs */
            border: 1px solid #ccc; /* Light border */
            border-radius: 4px; /* Rounded corners for inputs */
            font-size: 16px; /* Larger text for inputs */
            box-sizing: border-box; 
            color:black;/* Ensuring padding doesn't affect width */
        }
        input[type="submit"] {
            background-color: #007bff; /* Bootstrap primary color */
            color: green; /* White text */
            padding: 10px;
            border: none; /* Removing border */
            border-radius: 4px; /* Rounded corners */
            font-size: 16px; /* Larger text for buttons */
            cursor: pointer; /* Pointer cursor for button */
            transition: background-color 0.3s; /* Smooth transition */
        }
        input[type="submit"]:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }
        .alert {
            margin: 20px 0; /* Space above and below alert */
            padding: 15px; /* Padding for alert */
            background-color: #d4edda; /* Light green background */
            color: #155724; /* Dark green text */
            border: 1px solid #c3e6cb; /* Light green border */
            border-radius: 4px; /* Rounded corners for alert */
        }
        .alert .close {
            float: right; /* Close button on the right */
            font-size: 20px; /* Size of the close button */
            border: none; /* No border for close button */
            background: none; /* No background for close button */
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.navbar')
        
        <div class="container-fluid page-body-wrapper">
            
            <div class="container">
                <h2>Edit Doctor</h2>
                <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="name">Doctor Name</label>
                        <input type="text" id="name" name="name" value="{{ $data->name }}" required>
                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <input type="number" id="phone" name="phone" value="{{ $data->phone }}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Speciality</label>
                        <select name="speciality" style="color:black;" type="text" name="speciality" value="{{$data->speciality}}">
                            <option value="">-- Select Speciality --</option>
                            <option value="skin">Skin</option>
                            <option value="heart">Heart</option>
                            <option value="eye">Eye</option>
                            <option value="nose">Nose</option>
                        </select>
                    </div>
                    <div>
                        <label for="room">Room No</label>
                        <input type="text" id="room" name="room" value="{{ $data->room }}" required>
                    </div>
                    <div>
                        <label>Old Image</label>
                        <img height="150" width="150" src="doctorimage/{{ $data->image }}" alt="Old Image">
                    </div>
                    <div>
                        <label for="file">Change Image</label>
                        <input type="file" id="file" name="file">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Update Doctor">
                    </div>
                </form>
            </div>
        </div>
        @include('admin.script')
    </div>
</body>
</html>
