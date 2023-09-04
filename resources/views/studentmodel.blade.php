<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <h1>Well Come this is my first latavel project</h1>
    <!-- Button trigger modal -->
    <div class="container">
        <button type="button" class="btn btn-primary mb-10 " data-bs-toggle="modal" data-bs-target="#exampleModal">
            ADD Students
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <form action="{{ route('students.store') }}" method="post">
                                {{ csrf_field() }}
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="ihthisham">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="ihthisham1@gmail.com">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" name="address"
                                        placeholder="no:55,Masjidh rad puttalam">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">phone</label>
                                    <input type="tel" class="form-control" name="phone" placeholder="077 695 0058">
                                </div>
                        </div>

                        <div class=" modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="submit">Save </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fetch data to the table -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone No</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $studentData)
                    <tr>
                        <th scope="row">{{ $studentData->id }}</th>
                        <td>{{ $studentData->name }}</td>
                        <td>{{ $studentData->email }}</td>
                        <td>{{ $studentData->address }}</td>
                        <td>{{ $studentData->phone }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Fetch data to the table -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
</body>

</html>