<html>
    <head>
        <title>Display Data</title>
        <style>
            .design,.design tr,.design td{
                border: 1px dotted black;
                margin: auto;
                color: blue;
            }
            .design th{
                background-color: grey;
                color: black  ;
            }
        </style>
    </head>
    <body>
        <a href="<?=(base_url('register/student'))?>">Go To Register</a>
        <?php
        if(isset($data)){
            
            ?>
        <form action="<?=(base_url('register/update'))?>" method="post"> 
            <table>
                <tr>
                    <td>Id</td>
                    <td><input name="Id" value="<?=$data[0]->id?>"></td>
                    
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input name="name" value="<?=$data[0]->student_name?>"></td>
                    
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input name="email" value="<?=$data[0]->student_mail?>"></td>
                    
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input name="mobile" value="<?=$data[0]->student_mobile?>"></td>
                    
                </tr>
                </tr>
                <tr>
                    <td><button>Update</button></td>
                    <td></td>
                    
                </tr>
            </table>

        </form>
            <?php

        }else{
            ?>
            <?php
        }
        ?>
        <table class="design">
            <tr>
                <th>Action</th>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
            </tr> 
        <?php 
            if(isset($table)){
                foreach($table as $row){
        ?>
            <tr>
                <td><a href="<?=(base_url('register/edit/'.$row->id))?>">EDIT</a></td>
                <td><?=$row->id?></td>
                <td><?=$row->student_name?></td>
                <td><?=$row->student_mail?></td>
                <td><?=$row->student_mobile?></td>
            </tr>
        <?Php

                }
            }
        
        ?>
        </table>   
        
    </body>

</html>