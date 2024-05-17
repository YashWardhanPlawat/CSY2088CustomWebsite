<Main>
    <?php if (isset($addFreelancerAccountMessage)){?>
        <h2><?=$addFreelancerAccountMessage?></h2>
    <?php }?>
    <h2>freelancer sign up page</h2>
    <form action="FreeLancerSignup.php" method="post">
        <label for="username">Enter username</label> <input type="text" name='username'/>
        <label for="email">Enter Email</label> <input type="text" name='email'/>
        <label for="password">Enter password</label> <input type="text" name='password'/>
        <label for="confirmPassword">Re-enter password</label> <input type="text" name='confirmPassword'/>
        <input type="submit" value="submit" name='FreelancerSignin'>
    </form>
</Main>