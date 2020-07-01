<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form SanberBook</title>
  </head>
  <body>
    <!--Judul-->
    <div>
    <h2>Buat Account Baru!</h2>
    <h4>Sign Up Form</h4>
    </div>

    <!--Membuat Form-->
    <div>
      <form action="/welcome">
        <!--Masukan Nama-->
        <label for="First_Name:">First Name</label>   <br><br>
        <input type="text" id="First_Name">           <br><br>
        <label for="Last_Name:">Last Name</label>     <br><br>
        <input type="text" id="Last_Name">            <br><br>
        <!--Memilih Gender-->
        <label>Gender</label>                               <br><br>
        <input type="radio" name="Gender" value="0"> Male   <br>
        <input type="radio" name="Gender" value="1"> Female <br>
        <input type="radio" name="Gender" value="2"> Other  <br><br>
        <!--Memilih Kebangsaan-->
        <label>Nationality</label>                <br><br>
        <select name="Nationality">
          <option value="ID">Indonesia</option>
          <option value="SG">Singaporean</option>
          <option value="MY">Malaysian</option>
          <option value="AU">Australian</option>
        </select>
        <!--Bahasa Yang Digunakan-->
        <label>Language Spoken</label>                                      <br><br>
        <input type="checkbox" name="Language" value="ID"> Bahasa Indonesia <br>
        <input type="checkbox" name="Language" value="EN"> English          <br>
        <input type="checkbox" name="Language" value="OT"> Other            <br><br>
        <!--Input Biodata-->
        <label for="Biodata">Bio</label>                                    <br><br>
        <textarea name="name" rows="8" cols="30" id="Bioadata"></textarea>  <br>
        <input type="submit" value="SignUp">
      </form>
    </div>
  </body>
</html>
