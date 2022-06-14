<tbody>
                                        <?php 
                                        $no = 0;
                                        foreach($cpll as $cpl4): 
                                        $no++;
                                        ?>
                                           
                                        <tr>
                                           <td class="align-justify"><?= $cpl4->kode_cpl?>. <?= $cpl4->cpl?></td>      
                                           <?php foreach ($profil as $key => $id) { ?> 
                                           <td>
                                            <input type="checkbox" id="md_checkbox_33 <?php echo $no; ?>"  class="filled-in chk-col-red" 
                                            <?php   echo ($cpl4->id_lulusan == $id->id_lulusan  ? "checked" : '');?> onclick="return false;" />
                                            <label for="md_checkbox_33 <?php echo $no; ?>"></label><?php } ?>
                                           </td>

                                           
                                        </tr>  
                                        <?php endforeach;?> 
                                                                                
                                    </tbody>