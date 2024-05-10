<Main>
    <h2>add admin account</h2>
    <?php if (isset($addAdminAccountMessage)){?>
        <h3><?=$addAdminAccountMessage?></h3>
    <?php }?>
    <form action="AddAdminAccount.php" method="post">
        <label for="username">Enter username</label> <input type="text" name='username'/>
        <label for="email">Enter Email</label> <input type="text" name='email'/>
        <label for="password">Enter password</label> <input type="text" name='password'/>
        <label for="confirmPassword">re-Enter password</label> <input type="text" name='confirmPassword'/>
        <input type="submit" value="submit" name='AddAdminAccount'>
    </form> 
</Main>