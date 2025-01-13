<?php include('includes/header.php');  ?>



<div class="py-5" >
    <div class="container mt-5">
        <div class="row">
            <div class="col mt-4">
                
                <h1>Welcome to Fatemi Gold Data Base</h1>
                
                 <div class="px-4">
                
                
                 <a href="login.php" class="btn btn-primary mt-4">Login</a></div>
        
            </div>
        </div>
    </div>
</div>


<button class="btn btn-primary">Upload Image</button>
<input type="file" accept="image/*" capture="camera" style="display: none;"> 

<script>
  const uploadButton = document.querySelector('.btn-primary');
  const fileInput = document.querySelector('input[type="file"]');

  uploadButton.addEventListener('click', () => {
    fileInput.click();
  });
</script>
    <?php include('includes/footer.php');  ?> 
