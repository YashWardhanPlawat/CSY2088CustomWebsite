<Main>
    <?php if (isset($adminLoginMessage)){?>
        <h2><?=$adminLoginMessage?></h2>
    <?php }?>
    <h2>Employee Log in page</h2>
    <form action="AdminLogin.php" method="post">
        <label for="username">Enter username</label> <input type="text" name='username'/>
        <label for="password">Enter password</label> <input type="text" name='password'/>
        <input type="submit" value="submit" name='AdminLogin'>
    </form>
</Main>