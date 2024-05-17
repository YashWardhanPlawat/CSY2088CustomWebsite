<Main>
    <h2>add admin account</h2>
    <?php if (isset($addAdminAccountMessage)){?>
        <h3><?=$addAdminAccountMessage?></h3>
    <?php }?>
    <form action="" method="post">
        <label>make sure the file is a png and is named the same as the product you want to add this to</label>
        <input type="file" name="uploadFile" method="post">
        <input type="submit" value="submit" name=''>
    </form> 
</Main>