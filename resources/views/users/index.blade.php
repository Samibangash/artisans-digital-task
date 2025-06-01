<!DOCTYPE html>
<html>
<head>
    <title>User CRUD (Modal)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">User List</h2>

    <!-- Create Button -->
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">+ Create User</button>

    <!-- Table -->
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th><th>Name</th><th>Email</th><th>Phone</th><th>DOB</th><th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->date_of_birth }}</td>
                <td>
                    <button class="btn btn-sm btn-warning editBtn"
                            data-id="{{ $user->id }}"
                            data-name="{{ $user->name }}"
                            data-email="{{ $user->email }}"
                            data-phone="{{ $user->phone }}"
                            data-address="{{ $user->address }}"
                            data-dob="{{ $user->date_of_birth }}">
                        Edit
                    </button>
                    <form method="POST" action="{{ route('users.destroy', $user->id) }}" class="d-inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Delete user?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Create Modal -->
<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog"><div class="modal-content">
            <form method="POST" action="{{ route('users.store') }}">
                @csrf
                <div class="modal-header"><h5 class="modal-title">Create User</h5></div>
                <div class="modal-body">
                    @include('users._form', ['user' => null])
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div></div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog"><div class="modal-content">
            <form method="POST" id="editForm">
                @csrf @method('PUT')
                <div class="modal-header"><h5 class="modal-title">Edit User</h5></div>
                <div class="modal-body">
                    @include('users._form', ['user' => true])
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div></div>
</div>

<script>
    $('.editBtn').click(function () {
        let userId = $(this).data('id');
        $('#editForm').attr('action', '/users/' + userId);
        $('#editForm input[name=name]').val($(this).data('name'));
        $('#editForm input[name=email]').val($(this).data('email'));
        $('#editForm input[name=phone]').val($(this).data('phone'));
        $('#editForm textarea[name=address]').val($(this).data('address'));
        $('#editForm input[name=date_of_birth]').val($(this).data('dob'));
        $('#editModal').modal('show');
    });
</script>

</body>
</html>
