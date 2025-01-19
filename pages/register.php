<?php include_once "../app/include/header.php"; ?>

<!-- Registration Form Section -->
<div class="form-container">
    <h2>Register</h2>
    <form action="" method="POST">
        <!-- First Name -->
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter your first name" required>
        </div>

        <!-- Last Name -->
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter your last name" required>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="confirm_password" class="form-label">Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm your password" required>
        </div>

        <!-- Clubs -->
        <div class="mb-3">
            <label for="clubs_id" class="form-label">Club</label>
            <select name="clubs_id" id="clubs_id" class="form-select" required>
                <option value="" disabled selected>Select your club</option>
                <option value="1">Fitness Club</option>
                <option value="2">Yoga Club</option>
                <option value="3">Martial Arts Club</option>
                <option value="4">Dance Club</option>
            </select>
        </div>

        <!-- Submit Button -->
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
</div>
<?php include_once "../app/include/footer.php"; ?>