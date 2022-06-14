<tbody>
                                        <?php 
                                        $no = 0;
                                        $previousValue = null;
                                        foreach($cpl as $cpl4): 
                                        
                                        //if($cpl4->id_cpl == $previousValue){
                                            //echo "id sama";

                                        //}
                                            //$previousValue = $cpl4->id_cpl;
                                            
                                        //echo $previousValue;

                                        //echo"<pre>";
                                        //print_r($cpl4);
                                        //echo"</pre>";
                                        //echo ($cpl4-1)->kode_cpl;
                                        ?>
                                           
                                        <tr>
                                           <td class="align-justify"><?= $cpl4->kode_cpl?>. <?= $cpl4->cpl?></td>

                                           
                                           <?php  foreach ($cpl_baru as $new_cpl) { ?>
                                            <?php  foreach ($profil as $id) { 

                                            if($new_cpl->id_cpl == $previousValue){
                                            echo "id sama";

                                            }
                                            $previousValue = $new_cpl->id_cpl;

                                            //if($new_cpl->id_lulusan == $id->id_lulusan){

                                           

                                           $no++; 

                                           if($cpl4->id_cpl == $new_cpl->id_cpl){
                                               // for($i = 0 ; $i < $new_cpl->Sum_RES; $i++ ){
                                                
                                             ?>
       
                                           <td>
                                            <input type="checkbox" id="md_checkbox_33 <?php echo $no; ?>"  class="filled-in chk-col-red" 
                                            <?php echo ($new_cpl->id_lulusan == $id->id_lulusan  ? "checked" : '');?> onclick="return false;" />
                                            <label for="md_checkbox_33 <?php echo $no; ?>"></label>
                                           </td>

                                        <?php }  } } // }?>
                                        

                                           
                                        </tr>  
                                        
                                           <?php endforeach;?>                                          
                                    </tbody>