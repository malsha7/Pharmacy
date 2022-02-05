
<html>
<head>
<style>
body {
  background-image:url("20386082.jpg");;
  font-family: sans-serif;
  color: white;
}

div {
  max-width: 960px;
  margin: 0 auto;
}

form {
  width: 50%;
  margin: 50px auto;
  padding: 40px 50px 40px 30px;
  background-color: transperent;
  border-radius: 6px;
  box-shadow: 0 8px 8px -5px rgba(0, 0, 0, 0.2);
}

label,h1 {
  font-weight: bold;
  margin-bottom: 4px;
  display: block;
  color:gray;
}

input,select {
  margin-bottom: 24px;
  padding: 0 10px;
  width: 100%;
  height: 40px;
  background-color: white;
  font-size: 1em;
  color: #444;
  border: none;
}

button,a {
  background-color: white;
  color: gray;
  margin: 0;
  padding: 12px 20px;
  font-size: 1em;
  font-weight: bold;
  border: none;
  border-radius: 6px;
}

.striped {
  color: white;
  background: repeating-linear-gradient(
    45deg,
    #9575CD,
    #9575CD 10px,
    #512DA8 10px,
    #512DA8 20px
  );
}

</style>
</head>
<body>
<div>
<h1 align="center">Login</h1>
<form>
  <label for="usertype">Select user type</label>
  <select name ="usertype">
<option value="admin">admin</option>
<option value="user">user</option></select>
  <label for="Username">Username</label>
  <input type="Username" id="username" name="user_name" autocomplete="username" placeholder="Username">
  <label for="password">Password</label>
  <input type="password" id="password" name="user_password" autocomplete="password" placeholder="Password">
  <button type="submit"name="Login" value="Login">Login</button>
  <a href="user.php" value="">Register</a>
</form>
</div>

</body>
</html>