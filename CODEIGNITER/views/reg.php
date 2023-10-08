<center><form action=<?=(base_url('register/save_data'))?> method="post">
       
    <?php
    if(isset($status)){
        echo($status);
        echo '<br>'.($text);
    }
    if (isset($msg)){
        echo '<h2>'.$msg .'</h2>';
        
    }
     ?>
    
       
       <label for="name">Name:</label>
       <input type="text" id="name" name="name" required><br><br>

       <label for="email">Email:</label>
       <input type="email" id="email" name="email" required><br><br>
 
       <label for="mobile">Mobile:</label>
       <input type="tel" id="mobile" name="mobile" required><br><br>

       <input type="submit" value="Submit">
       <a href="<?=(base_url('register/fetch_data'))?>">View Record</a>
   </form></center>
