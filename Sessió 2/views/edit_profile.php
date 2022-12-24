<div class='form-container'> 
    <h2>PERSONAL INFORMATION</h2>
    <form action='index.php?accio=edit-profile' method='post'>

        <label for="name">Name</label><br/>
        <input  
            type="text" 
            name="name" 
            value='<?php echo $_SESSION["user_name"]?>' 
            pattern="[a-zñçA-ZÑÇ ]+"
            title="Name should only contain letters and spaces."
            required
        ><br/>

        <label for="dir">Direction</label><br/>
        <input 
            type="text" 
            name="dir" 
            value='<?php echo $_SESSION["user_address"]?>'
            pattern="[A-ZÑÇa-zñç0-9\-/ºª ]{1,30}"
            maxlenght="30"
            title="Direction should only contain letters, numbers, -, /, º, ª and spaces. Maximum size is 30"
            required
        ><br/> 

        <label for="town">Town</label><br/>
        <input 
            type="text" 
            name="town"  
            value='<?php echo $_SESSION["user_town"]?>' 
            pattern="[a-zñçA-ZÑÇ ]{1,30}" 
            maxlenght="30"
            title="Town should only contain letters, numbers, / and spaces. Maximun size is 30"
            required
        ><br/>

        <label for="cp">Postal Code</label><br/>	
        <input 
            type = 'numeric'
            name="cp"  
            value='<?php echo $_SESSION["user_cp"]?>' 
            pattern="\d*"
            minlength="5"
            maxlength="5" 
            title="C.P's size should be 5"
            required
        ><br/>    

        <label for="email:">Email</label><br/>
        <input 
            type="email" 
            name="email" 
            value='<?php echo $_SESSION["user_id"]?>' 
            readonly="readonly"
            style ='background-color:#e4e1e2;'
        ><br/>

        <label for="pw">Password</label><br/>
        <input 
            type="password" 
            name="pw" 
            placeholder="Password" 
            pattern="[A-ZÑÇa-zñç0-9]+"
            title="Password should only contain letters, numbers and spaces."
            required
        ><br/>

        <label for="re_pw">Repeat Password</label><br/>
        <input 
            type="password" 
            name="re_pw" 
            placeholder="Repeat Password" 
            pattern="[A-ZÑÇa-zñç0-9]+"
            title="Password should only contain letters, numbers and spaces."
            required
        ><br/>

        <div style='text-align:center;'><input type="submit" value="Save changes"/></div>

    </form>
</div>

<div class='form-container'> 

    <h2>PROFILE IMAGE</h2>

    <div class='img-container'> 
        
        <img
            src="<?php echo $filesPublicPath.$_SESSION['user_img'] ?> "
            alt=""
            width='290px'
        />

    </div>  

    <form action='index.php?accio=edit-profile' method='post' enctype='multipart/form-data'>

        <input
            class='upload-img' 
            type="file" 
            name="img"
            required
        ><br/>

        <div style='text-align:center;'><input type="submit" value="Save changes"/></div>

    </form>

</div>

<?php if(isset($alert)) {?> 
    <script> warning('<?php echo $alert ?>'); </script> 
<?php } unset($alert);?>