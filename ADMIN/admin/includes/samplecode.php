  if ($row['status']=='0')
                        {  
                                  echo "<td> Waiting for action </td>";
                            
                        }
                
                    
                    elseif($row['status'] == 'Approved')
                        {
                            echo "<td>Approved</td>" ;
                        }
                    else {
                        echo "<td> Rejected </td>" ;
                    }