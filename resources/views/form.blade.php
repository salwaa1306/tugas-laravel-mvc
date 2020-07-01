<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Challenge</title>
</head>
<body>
    <h2>Buat Account Baru!</h2>
    <h3>Sign Up Form</h3>

    <form action="/welcome" method="post">
      @csrf
    <p>First Name :</p>
        <input type="text" name="nama"><br>
    <!-- <p>Last Name :</p>
        <input type="text"><br>
    <p>Gender :</p>
        <input type="radio">
        <label for="">Female</label><br>
        <input type="radio">
        <label for="">Female</label><br>
        <input type="radio">
        <label for="">Other</label><br>
    <p>Nationality :</p>
        <select name="" id="">
           <option value="">Indonesia</option>
           <option value="">Malaysia</option>
           <option value="">Singapura</option>
        </select>
    <p>Language Spoken :</p>
        <input type="checkbox">
        <label for="">Bahasa Indonesia</label><br>
        <input type="checkbox">
        <label for="">English</label><br>
        <input type="checkbox">
        <label for="">Other</label><br>
    <p>Bio :</p>
        <textarea name="" id="" cols="30" rows="10"></textarea><br> -->
        <input type="submit" value="Submit">
    </form>
</body>
