<!DOCTYPE html>
<html>

<head>
    <title>PHP 07</title>
</head>

<body>

    <div class="d1">

        <form action="process.php" method="POST">

            <h1>Create New Account.</h1>

            <p>Name</p>
            <input type="text" name="name" /><br />

            <p>NIC</p>
            <input type="text" name="nic"/><br />

            <p>Mobile</p>
            <input type="text" name="mobile"/><br />

            <p>City</p>
            <select name="city">
                <option>Select Your City</option>
                <option>Colombo</option>
                <option>Kandy</option>
                <option>Gampaha</option>
                <option>Kurunegala</option>
            </select>

            <br />

            <p>Gender</p>
            <input value="male" type="radio" name="gender" checked />Male
            <input value="Female" type="radio" name="gender" />Female

            <br /><br />

            <button type="submit">Create New Account</button>

        </form>

    </div>

</body>

</html>