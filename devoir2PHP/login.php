
<html>
<style>
body {
    background: #eee;
}
#frm{
    border:solid gray 1px;
    width: 20%;
    border-radius:5px;
    margin: 100px auto;
    background : white;
    padding: 50px;
}
#btn{
    color: #fff;
    background: #337ab7;
    padding: 5px;
    margin-left:69px;
}
</style>
<body>
    <div id="frm">
        <form action="authentification.php" method="POST">
            <p>
                <label>Email : </label>
                <input type="text" id="user" name="email" placeholder="aaaa@exemple.bb" >
                
            </p> 
            <p>
                <label>Password : </label>
                <input type="password" id="pass" name="password" >
            </p>     
            <p>
                <input type="submit" id="btn" name="Login" >
            </p>
        </form>
    </div>    
</body>
</html>