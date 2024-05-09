<Main>
    <?php if (isset($adminLoginMessage)){?>
        <h2><?=$adminLoginMessage?></h2>
    <?php }?>
    <h2>freelancer Log in page</h2>
    <form action="FreeLancerLogin.php" method="post">
        <label for="username">Enter username</label> <input type="text" name='username'/>
        <label for="password">Enter password</label> <input type="text" name='password'/>
        <input type="submit" value="submit" name='FreelancerLogin'>
    </form>
</Main>