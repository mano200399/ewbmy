
<?php 
    include 'partials/header.php';
    ?>

<section class="form_section">
    <div class="container form_section-container">
        <h2>Edit Post</h2>
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="title">
            <select>
                <option value="1">Travel</option>
                <option value="2">Food</option>
                <option value="3">Art</option>
                <option value="4">Wild Life</option>
                <option value="5">Science & Technology</option>
                <option value="6">Music</option>
            </select>
            <textarea rows="10" placeholder="body"></textarea>
            <div class="form_control inline">
                <input type="checkbox" id="is_featured"  checked>
                <label for="is_featured">featured</label>
            </div>
            <div class="form_control">
                <label for="thumbnail">ChangeThumbnail</label>
                <input type="file" id="thumbnail">
            </div>
            <button type="submit" class="btn">Update post</button>
        </form>
    </div>
</section>


    <?php 
    include '../partials/footer.php';
    ?>