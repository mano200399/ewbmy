
<?php 
    include 'partials/header.php';
    ?>


<section class="dashboard">
    <div class="container dashboard_container">
      <button id="show_sidebar-btn" class="sidebar_toggle"><i class="uil uil-angle-right-b"></i></button>
      <button id="show_sidebar-btn" class="sidebar_toggle"><i class="uil uil-angle-leftt-b"></i></button>

      <aside>
    <ul>
      <li>
         <a href="add-post.php"><i class="uil uil-pen"></i>
            <h5>Add Post</h5>
         </a>
    </li> 
    
 <li>
    <a href="indexx.php"><i class="uil uil-postcard"></i>
       <h5>Manage Post</h5>
    </a>
</li>  
<!--<?php if(isset($_SESSION['user_is_admin'])): ?>  <?php endif?>-->
<li>
    <a href="add-user.php"><i class="uil uil-user-plus"></i>
       <h5>Add User</h5>
    </a>
</li> 

<li>
    <a href="mangae-user.php"><i class="uil uil-user-plus"></i>
       <h5>Manage User</h5>
    </a>
</li>   

<li>
    <a href="add-category.php"><i class="uil uil-edit"></i>
       <h5>Add category</h5>
    </a>
</li> 
    
<li>
    <a href="manage-categories.php" class="active"><i class="uil uil-list-ul"></i>
       <h5>Manage Categories</h5>
    </a>
</li> 
    
    </ul>
        </aside>
          <main>
           <h2>Manage Categories</h2>
           <table>
            <thead>
               <tr>
                  <th>Title</th> 
                  <th>Edit</th>
                  <th>Delete</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Travel</td>
                  <td><a href="edite-category.php" class="btn sm">Edit</a></td>
                  <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>

               </tr>
               <tr>
                  <td>Wild Life</td>
                  <td><a href="edite-category.php" class="btn sm">Edit</a></td>
                  <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>

               </tr>
               <tr>
                  <td>Music</td>
                  <td><a href="edite-category.php" class="btn sm">Edit</a></td>
                  <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>

               </tr>
               <tr>
                  <td>Travel</td>
                  <td><a href="edite-category.php" class="btn sm">Edit</a></td>
                  <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>

               </tr>
            </tbody>
           </table>

         </main>
    </div>
    </section>




    <?php 
    include '../partials/footer.php';
    ?>