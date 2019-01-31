<?php
    require('content.php')
?>

<html>
   <head>
       <title>School Cool gradesx</title>
   </head>
   <body>

        <?php
            head();            
        ?>


       <div id="wrapper">
            <?php
                nav();
            ?>



           <main>
               <div id="table"><!--table div-->
                   <table id="grades">
                       <tr>

                           <th>Grade </th>
                           <th> Class</th>

                       </tr>
                       <tr>

                           <td> <input type="text" name="grade1" placeholder="Grade..."></td>
                           <td> <input type="text" name="class1"placeholder="Class..."></td>
                       </tr>

                   </table>
                   <input type="submit" value=Submit>
               </div> <!-- end of table div-->

               <div id="tableform"><!-- submitted form div-->
                   <table id="submitted">
                       <tr>
                           <th>Grade </th>
                           <th> Class</th>
                       </tr>
                       <td>Will retrieve mysql data and display here row 1 cell 1 </td>
                       <td>Will retrieve mysql data and display here row 1 cell 2 </td>
                   </table>
               </div><!--end of submitted form div-->
           </main>

           <aside>
               <div id="search">
                   <input type=text" name="search" placeholder="Search..">

               </div>
            </aside>

            <?php
            foot();            
        ?>


       </div>
   </body>
</html>
