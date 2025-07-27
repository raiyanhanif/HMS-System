<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                      <input type="hidden" name="pat_id" value="<?=$row['pat_id'];?>">
                      <?php
                      if($row['status'] !='Approve')
                      {
                        ?>
                        <button class="btn btn-primary" type="submit" name="approve_checkbox" >Approve</button>
                        <?php
                      }
                      else
                      {
                        ?>
                          <button type="button" class="btn btn-primary" disabled>Aprrove</button>
                        <?php
                      }
                      ?>
                       
                    </form>