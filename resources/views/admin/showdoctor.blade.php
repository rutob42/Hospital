<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    @include('admin.css')
    </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
       @include('admin.navbar')
       <!-- partial -->
       <div class="container-fluid page-body-wrapper">
        <div align="center" style="padding-top:100px;">
            <table>
                <tr style="background-color:black;">
                    <th style="padding:10px">Doctor Name</th>
                    <th style="padding:10px">Phone</th>
                    <th style="padding:10px">Speciality</th>
                    <th style="padding:10px">Room No</th>
                    <th style="padding:10px">Image</th>
                    <th style="padding:10px">Delete</th>
                    <th style="padding:10px">Update</th>

                </tr>

                @foreach($data as $doctor)
                <tr>
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->speciality}}</td>
                    <td>{{$doctor->room}}</td>
                    <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}" alt=""></td>
                    <td><a class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}"></a>Delete</td>
                    <td><a class="btn btn-danger" href="{{url('updatedoctor',$doctor->id)}}"></a>Update</td>
                
                </tr>
                @endforeach
            </table>

        </div>
       </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- End custom js for this page -->

    @include('admin.script')
  </body>
</html>