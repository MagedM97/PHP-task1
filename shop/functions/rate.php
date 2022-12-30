<?php
                    for ($i = 1; $i<=4; $i++) {
                            if ($i<$product['rating']||$i==$product['rating']) echo'<small class="fa fa-star text-primary mr-1"></small>';
                            if ($i==$product['rating']-.5) echo'<small class="fa fa-star-half text-primary mr-1"></small>';
                            if ($product['rating'] == .5 && $i == 1)
                            echo '<small class="fa fa-star-half text-primary mr-1"></small>';
                            if ($i>=$product['rating']) echo'<small class="far fa-star text-primary mr-1"></small>';
    
                        if ($product['rating'] == 5 && $i == 4)
                            echo '<small class="fa fa-star text-primary mr-1"></small>';
                    }
                    if ($product['rating']==0) echo'<small class="far fa-star text-primary mr-1"></small>';
                            ?>