<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('posts/create'); ?>
  <!-- Name input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form4Example1">Title</label>
    <input type="text" placeholder="Add Title" id="title" name="title" class="form-control" />
    
  </div>
  <!-- Message input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form4Example3">Body</label>  
    <textarea class="form-control" id="form4Example3" name="body" placeholder="Add post content" rows="4"></textarea>
    
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
</form>