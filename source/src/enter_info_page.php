<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="/source/global/css/style.css"/>
    <title>Welcome to this thing</title>
</head>

<BODY>
<div>
    <p> Please fill in the following information </p>
    <form method="post" action="page2.php">
        <div class="inputWithBuffer">
            First Name: <input type="text" name="firstName" style="margin-bottom: 10px"> <br>
            Last Name: <input type="text" name="lastName" style="margin-bottom: 10px"> <br>
        </div>

        <div class="inputWithBuffer">
            Mr.<input type="radio" name="salutation" value="Mr. ">
            Mrs.<input type="radio" name="salutation" value="Mrs. ">
            Ms.<input type="radio" name="salutation" value="Ms. ">
            Dr.<input type="radio" name="salutation" value="Dr. ">
            Other<input type="radio" name="salutation" value="0" checked>
            Prefer Not to disclose<input type="radio" name="salutation" value="0">
        </div>

        <div class="inputWithBuffer">
            Male<input type="radio" name="gender" value="m">
            Female<input type="radio" name="gender" value="f">
            Other<input type="radio" name="gender" value="o" checked="o">
        </div>

        <div class="inputWithBuffer">
            <label> Height: </label>
            <select name="height-ft">
                <option value="-" selected>-</option>
                <option value="1">1'</option>
                <option value="2">2'</option>
                <option value="3">3'</option>
                <option value="4">4'</option>
                <option value="5">5'</option>
                <option value="6">6'</option>
                <option value="7">7'</option>
                <option value="8">8'</option>
                <option value="9">9'</option>
            </select>
            <select name="height-inch">
                <option value="-" selected>-</option>
                <option value="1">1"</option>
                <option value="2">2"</option>
                <option value="3">3"</option>
                <option value="4">4"</option>
                <option value="5">5"</option>
                <option value="6">6"</option>
                <option value="7">7"</option>
                <option value="8">8"</option>
                <option value="9">9"</option>
                <option value="10">10"</option>
                <option value="11">11"</option>
                <option value="12">12"</option>
            </select>
        </div>

        <button type="submit" id="button">Submit</button>
    </form>
</div>
</BODY>

</HTML>
