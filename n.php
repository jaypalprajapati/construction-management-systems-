  <div class="row">
            <div class="col-sm-8">
                          <div class="form-group ">
                             <!-- <label for="" class="required control-label">Select Material</label> -->
                              <label>Material Name</label>
                        <select class="form-control" name="mt"required="">
                          <option selected disabled>Select one</option>
                            <?php
                    if(mysqli_num_rows($rs1)>0)
                     {
                           while ($row=mysqli_fetch_assoc($rs1))
                          {
                 ?>
                <option  name="txt_name"value="<?php echo $row['m_id']; ?>"><?php echo $row['m_name']; ?></option>
                    <?php
                           }
                      }
                      else
                         {
                              echo "0 ROW FOUND";
                          }
                     ?> 
                           </select>
                          </div>
                        </div>
                        <div class="col-sm-2">
            <div class="form-group">
               <label>Last Qty</label> 
                <input type="text" id="inputClientCompany" class="form-control" name="total" placeholder="How much feet">
              </div>
            </div>
             <div class="col-sm-2">
            <div class="form-group">
              <label>Received</label>
                <input type="text" id="inputClientCompany" class="form-control" name="total" placeholder="How much feet">
          </div>
              </div>
              </div>
               <div class="row">
            <div class="col-sm-8">
                          <div class="form-group ">
                             <!-- <label for="" class="required control-label">Select Material</label> -->
                             
                        <select class="form-control" name="mt"required="">
                          <option selected disabled>Select one</option>
                            <?php
                    if(mysqli_num_rows($rs2)>0)
                     {
                           while ($row=mysqli_fetch_assoc($rs2))
                          {
                 ?>
                <option  name="txt_name"value="<?php echo $row['m_id']; ?>"><?php echo $row['m_name']; ?></option>
                    <?php
                           }
                      }
                      else
                         {
                              echo "0 ROW FOUND";
                          }
                     ?> 
                           </select>
                          </div>
                        </div>
                        <div class="col-sm-2">
            <div class="form-group">
              
                <input type="text" id="inputClientCompany" class="form-control" name="total" placeholder="How much feet">
              </div>
            </div>
             <div class="col-sm-2">
            <div class="form-group">
             
                <input type="text" id="inputClientCompany" class="form-control" name="total" placeholder="How much feet">
          </div>
              </div>
              </div>
               <div class="row">
            <div class="col-sm-8">
                          <div class="form-group ">
                             <!-- <label for="" class="required control-label">Select Material</label> -->
                             
                        <select class="form-control" name="mt"required="">
                          <option selected disabled>Select one</option>
                            <?php
                    if(mysqli_num_rows($rs3)>0)
                     {
                           while ($row=mysqli_fetch_assoc($rs3))
                          {
                 ?>
                <option  name="txt_name"value="<?php echo $row['m_id']; ?>"><?php echo $row['m_name']; ?></option>
                    <?php
                           }
                      }
                      else
                         {
                              echo "0 ROW FOUND";
                          }
                     ?> 
                           </select>
                          </div>
                        </div>
                        <div class="col-sm-2">
            <div class="form-group">
               
                <input type="text" id="inputClientCompany" class="form-control" name="total" placeholder="How much feet">
              </div>
            </div>
             <div class="col-sm-2">
            <div class="form-group">
             
                <input type="text" id="inputClientCompany" class="form-control" name="total" placeholder="How much feet">
          </div>
              </div>
              </div>
               <div class="row">
            <div class="col-sm-8">
                          <div class="form-group ">
                             <!-- <label for="" class="required control-label">Select Material</label> -->
                             
                        <select class="form-control" name="mt"required="">
                          <option selected disabled>Select one</option>
                            <?php
                    if(mysqli_num_rows($rs4)>0)
                     {
                           while ($row=mysqli_fetch_assoc($rs4))
                          {
                 ?>
                <option  name="txt_name"value="<?php echo $row['m_id']; ?>"><?php echo $row['m_name']; ?></option>
                    <?php
                           }
                      }
                      else
                         {
                              echo "0 ROW FOUND";
                          }
                     ?> 
                           </select>
                          </div>
                        </div>
                        <div class="col-sm-2">
            <div class="form-group">
               
                <input type="text" id="inputClientCompany" class="form-control" name="total" placeholder="How much feet">
              </div>
            </div>
             <div class="col-sm-2">
            <div class="form-group">
             
                <input type="text" id="inputClientCompany" class="form-control" name="total" placeholder="How much feet">
          </div>
              </div>
              </div>
               <div class="row">
            <div class="col-sm-8">
                          <div class="form-group ">
                             <!-- <label for="" class="required control-label">Select Material</label> -->
                             
                        <select class="form-control" name="mt"required="">
                          <option selected disabled>Select one</option>
                            <?php
                    if(mysqli_num_rows($rs5)>0)
                     {
                           while ($row=mysqli_fetch_assoc($rs5))
                          {
                 ?>
                <option  name="txt_name"value="<?php echo $row['m_id']; ?>"><?php echo $row['m_name']; ?></option>
                    <?php
                           }
                      }
                      else
                         {
                              echo "0 ROW FOUND";
                          }
                     ?> 
                           </select>
                          </div>
                        </div>
                        <div class="col-sm-2">
            <div class="form-group">
               
                <input type="text" id="inputClientCompany" class="form-control" name="total" placeholder="How much feet">
              </div>
            </div>
             <div class="col-sm-2">
            <div class="form-group">
             
                <input type="text" id="inputClientCompany" class="form-control" name="total" placeholder="How much feet">
          </div>
              </div>
              </div>
          