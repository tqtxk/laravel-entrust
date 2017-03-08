<html>
<body>
<form action="" method="post">
    <label for="username">用户名：</label>
    <input type="text" id="username" name="name" /><br/>
    <label for="password">密码：</label>
    <input type="password" id="password" name="password"/><br />
    {!! csrf_field() !!}
    <input type="submit" value="submit" />
</form>
</body>
</html>