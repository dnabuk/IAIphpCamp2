<!DOCTYPE html>
<html>
    <head>
        <title>Atak</title>
    </head>
    <body>
        <form action="PHP32.php" method="POST">
        <script> alert('hacked');
        name: <input type="text" name="name" /> <br/><br/>
        surname: <input type="text" name="surname" /> <br/><br/>
        gender: <select>
            <option value="male">male</option>
            <option value="female">female</option>
            <option value="unknown">unknown</option>
        </select> <br/><br/>
        date of birth: <input type="text" name="date_of_birth" /> <br/><br/>
        orders count: <input type="text" name="orders_count" /> <br/><br/>
        street: <input type="text" name="street" /> <br/><br/>
        city: <input type="text" name="city" /> <br/><br/>
        postcode: <input type="text" name="postcode" /> <br/><br/>
        country: <input type="text" name="country" /> <br/><br/>
        notes: <input type="text" name="notes" /> <br/><br/>
        <input type="submit" value="Add person do Database">
        </form>
    </body>
<html/>

