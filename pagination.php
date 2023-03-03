<style>
        a {
            color: black;
        }
        
        ul {
            list-style-type: none;
            padding-right: 2px;
        }
        li {
            float: left;
            padding-right: 10px;
        }
        li a {
            display: block;
            text-decoration: none;
        }
        li a:hover {
            color: red;
        }
        .active {
            color: red;
        text-decoration: underline;
        }
    </style>
     <ul>
            <?php 
                if($page_no > 1){
                    echo "<li> <a href='?page_no=1'>First Page</a> </li>";
                }
            ?>
            <li <?php if($page_no <= 1){ echo "disable";} ?>>
                <a <?php if($page_no > 1){echo "href='?page_no=$prev_page'";} ?>>Previous</a>
            </li>
            
                <?php 
              if ($total_no_of_pages <= 10){  	 
                for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                if ($counter == $page_no) {
                echo "<li class='active'><a>$counter</a></li>";	
                        }else{
                    echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                            }
                    }
            }else if($total_no_of_pages > 10){
                if($page_no <= 4) {			
                    for ($counter = 1; $counter < 8; $counter++){		 
                       if ($counter == $page_no) {
                          echo "<li class='active'><a>$counter</a></li>";	
                           }else{
                              echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                                   }
                   }
                   echo "<li><a>...</a></li>";
                   echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                   echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                   }else if($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
                    echo "<li><a href='?page_no=1'>1</a></li>";
                    echo "<li><a href='?page_no=2'>2</a></li>";
                    echo "<li><a>...</a></li>";
                    for (
                         $counter = $page_no - $adjacents;
                         $counter <= $page_no + $adjacents;
                         $counter++
                         ) {		
                         if ($counter == $page_no) {
                        echo "<li class='active'><a>$counter</a></li>";	
                        }else{
                            echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                              }                  
                           }
                    echo "<li><a>...</a></li>";
                    echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                    echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                    }else {
                        echo "<li><a href='?page_no=1'>1</a></li>";
                        echo "<li><a href='?page_no=2'>2</a></li>";
                        echo "<li><a>...</a></li>";
                        for (
                             $counter = $total_no_of_pages - 6;
                             $counter <= $total_no_of_pages;
                             $counter++
                             ) {
                             if ($counter == $page_no) {
                            echo "<li class='active'><a>$counter</a></li>";	
                            }else{
                                echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                            }                   
                             }
                        }
                }
                ?>


            <li <?php if($page_no >= $total_no_of_pages){echo "href='disable'";} ?> >
                <a <?php if($page_no < $total_no_of_pages){ echo "href='?page_no=$next_page'";} ?>>Next</a>
            </li>
            <?php if($page_no < $total_no_of_pages){
                echo "<li><a href='?page_no=$total_no_of_pages'>Last</a></li>";
            } ?>
        </ul>