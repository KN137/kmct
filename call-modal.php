<!DOCTYPE html>
<html lang="en">
<!-- Call Modal -->
<div class="modal fade" id="callModal" tabindex="-1" aria-labelledby="callModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3">
      <div class="modal-header">
        <h5 class="modal-title" id="callModalLabel">Log A Call</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="callForm" action="logcall.php" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="company" class="form-label">Company Name</label>
            <input type="text" class="form-control" id="company" name="company" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="subject" class="form-label">Subject (what are you having issues with?)</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message (try explaining the issues you're experiencing.)</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
        <div id="callLoading" style="display:none;text-align:center;margin-top:15px;">
          <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Sending...</span>
          </div>
        </div>
        <div id="callPopupMessage" style="display:none;margin-top:15px;" class="alert alert-success"></div>
      </div>
    </div>
  </div>
</div>
<script>
document.getElementById('callForm').addEventListener('submit', function(e) {
    e.preventDefault();
    var form = e.target;
    var formData = new FormData(form);

    // Show loading spinner, hide message
    document.getElementById('callLoading').style.display = 'block';
    document.getElementById('callPopupMessage').style.display = 'none';

    fetch(form.action, {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('callLoading').style.display = 'none';
        document.getElementById('callPopupMessage').textContent = 'Message sent!\n Our team will be in touch soon please check your emails.';
        document.getElementById('callPopupMessage').style.display = 'block';
        form.reset();
    })
    .catch(error => {
        document.getElementById('callLoading').style.display = 'none';
        document.getElementById('callPopupMessage').textContent = 'Error sending message.';
        document.getElementById('callPopupMessage').style.display = 'block';
    });
});
</script>