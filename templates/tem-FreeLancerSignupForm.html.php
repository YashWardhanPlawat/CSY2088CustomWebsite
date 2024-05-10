<Main>
    <?php if (isset()){?>
        <h2><?=?></h2>
    <?php }?>
    <h2>freelancer sign in page</h2>
    <form action="FreeLancerSignup.php" method="post">
        <label for="username">Enter username</label> <input type="text" name='username'/>
        <label for="password">Enter password</label> <input type="text" name='password'/>
        <input type="submit" value="submit" name='FreelancerSignin'>
    </form>
</Main>