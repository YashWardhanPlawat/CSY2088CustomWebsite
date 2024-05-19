<Main>
    <h2>add image for</h2>
    <?php if (isset($uploadImageMessage)){?>
        <h3><?=$uploadImageMessage?></h3>
    <?php }?>
    <form action="FreelancerAddImage.php" method="post" enctype="multipart/form-data">
        <input type="file" name="uploadFile" method="post">
        <select name="ImageType" id="ImageType">
            <option value="profileImage">profile pictures</option>
            <option value="portfolioImage">portfolio pictures</option>
        </select>
        <input type="submit" value="submit" name='UploadFreelancerImage'>
    </form> 
</Main>