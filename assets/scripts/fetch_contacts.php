<tbody>
  <?php 
    $filename = "assets/data/contacts.txt";

    if(file_exists($filename)){
      $file = fopen($filename, "r");
      $filesize = filesize($filename);
      if($filesize !== 0){
        $contactFileText = fread( $file, $filesize );
        fclose( $file );
        $exploded = explode(";", $contactFileText);
        foreach ($exploded as $index => $row) {
        $data = explode(":", $row);
          if($data[0] == null) break;  
  ?>
          <tr id="<?php echo $index?>">
            <th scope="row"><?php echo ++$index?></th>
            <td><?php echo $data[0]?></td>
            <td><?php echo $data[1]?></td>
            <td><?php echo $data[2]?></td>
            <td><?php echo $data[3]?></td>
            <td><?php echo $data[4]?></td>
            <td><form method="POST"><button style="display: block; margin: auto" type="submit" value="<?php echo --$index?>" name="remove-contact-btn" class="btn btn-danger">Remove</button></form></td>
          </tr>
  <?php
        }
      }else{
        echo '
          <tr>
            <td colspan="7" style="text-align: center;">No Data</td>
          </tr>
        ';
      }
    }
  ?>
</tbody>