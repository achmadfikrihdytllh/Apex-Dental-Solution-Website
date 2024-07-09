<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="/profil.css">
</head>
<body>
    <div class="background-container">
        <div class="profile-container">
            <div class="profile-details">
                <!-- User Information -->
                <h2>Name: <?= $user->nama ?></h2>
                <p>Email: <?= $user->username ?></p>
                <p>Status: <?= $user->status ?></p>

                <!-- Change Password Form -->
                <form id="passwordForm" action="/change-password" method="post">
                    <label for="currentPassword">Current Password:</label>
                    <input type="password" id="currentPassword" name="currentPassword" required>
                    <label for="newPassword">New Password:</label>
                    <input type="password" id="newPassword" name="newPassword" required>
                    <label for="confirmPassword">Confirm New Password:</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" required>
                    <button type="submit">Change Password</button>
                </form>

                <!-- Back to Previous Page Button -->
                <button onclick="window.history.back()">Back to Previous Page</button>
            </div>
        </div>
    </div>
</body>
</html>

