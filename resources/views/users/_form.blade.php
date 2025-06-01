<div class="mb-3">
    <label>Name:</label>
    <input type="text" name="name" class="form-control" required>
</div>
<div class="mb-3">
    <label>Email:</label>
    <input type="email" name="email" class="form-control" required>
</div>
@if(!isset($user))
    <div class="mb-3">
        <label>Password:</label>
        <input type="password" name="password" class="form-control" required>
    </div>
@endif
<div class="mb-3">
    <label>Phone:</label>
    <input type="text" name="phone" class="form-control" required>
</div>
<div class="mb-3">
    <label>Address:</label>
    <textarea name="address" class="form-control" rows="2" required></textarea>
</div>
<div class="mb-3">
    <label>Date of Birth:</label>
    <input type="date" name="date_of_birth" class="form-control" required>
</div>
