<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
</head>
<body>
 <form action="insert.php" method="POST">
  <table>
   <tr>
    <td>Pihak Ketiga :</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr>
    <td>Jenis :</td>
    <td><input type="password" name="password" required></td>
   </tr>
   <tr>
    <td>Nama/Jenis Aset :</td>
    <td><input type="email" name="email" required></td>
   </tr> 
   <tr>
    <td><input type="submit" value="Submit" name="submit"></td>
   </tr>
public function store(Request $request)
{
    $validatedData = $request->validate([
        'ojectName' => 'reuired|max:255',
        ''
    ])
}

  </table>
 </form>
</body>
</html>
