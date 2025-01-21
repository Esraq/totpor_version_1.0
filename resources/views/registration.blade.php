<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic HTML Form</title>
</head>
<body>
    <h1>Basic HTML Form</h1>
    <form action="submit.php" method="post">
        <!-- Text Input -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
        <br><br>

        <!-- Email Input -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        <br><br>

        <!-- Password Input -->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
        <br><br>

        <!-- Dropdown -->
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <br><br>

        <!-- Radio Buttons -->
        <label>Subscribe to newsletter:</label>
        <input type="radio" id="yes" name="subscribe" value="yes">
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="subscribe" value="no" checked>
        <label for="no">No</label>
        <br><br>

        <!-- Checkbox -->
        <label for="terms">
            <input type="checkbox" id="terms" name="terms" required>
            I agree to the terms and conditions
        </label>
        <br><br>

        <!-- Submit Button -->
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>
