
<?php 
    include 'partials/header.php';
    ?>
<section class="form_section">
    <div class="container form_section-container">
        <h2>add Post</h2>
        <div class="alert_message error">
            <p>This is an error message</p>
        </div>
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
                <input type="checkbox" id="is_featured">
                <label for="is_featured" checked>featured</label>
            </div>
            <div class="form_control">
                <label for="thumbnail">Add Thumbnail</label>
                <input type="file" id="thumbnail">
            </div>
            <button type="submit" class="btn">Add Post</button>
        </form>
    </div>
</section>


<?php 
    include '../partials/footer.php';
    ?>