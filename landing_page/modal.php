<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">CRUD Update</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="update.php" method="post">
            <input type="text" name="update" placeholder="id to update" id="modal-update">
            <input type="text" name="id" placeholder="id" id="modal-id">
            <input type="text" name="code" placeholder="code" id="modal-code">
            <input type="text" name="first_name" placeholder="first_name" id="modal-first_name">
            <input type="text" name="last_name" placeholder="last_name" id="modal-last_name">
            <input type="text" name="email" placeholder="email" id="modal-email">
            <input type="text" name="status" placeholder="status" id="modal-status">
            <input type="submit" value="Save Changes">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
document.getElementById('exampleModal').addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget; // Button that triggered the modal
  var id = button.getAttribute('data-id'); // Extract info from data-id attribute
  // Fetch data
  fetch('getUser.php?id=' + id)
    .then(response => response.json())
    .then(data => {
      if (data.error) {
        alert('User not found');
        return;
      }
      document.getElementById('modal-update').value = data.id;
      document.getElementById('modal-id').value = data.id;
      document.getElementById('modal-code').value = data.code;
      document.getElementById('modal-first_name').value = data.first_name;
      document.getElementById('modal-last_name').value = data.last_name;
      document.getElementById('modal-email').value = data.email;
      document.getElementById('modal-status').value = data.status;
    })
    .catch(error => console.error('Error:', error));
});
</script>