<!DOCTYPE html>
<html lang="en">
<!-- Quote Modal -->
<div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3">
      <div class="modal-header">
        <h5 class="modal-title" id="quoteModalLabel">Get A Quote</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="quoteForm" action="sendquote.php" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone number</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
          </div>
          <div class="mb-3">
            <label for="company" class="form-label">Company Name</label>
            <input type="text" class="form-control" id="company" name="company" required>
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">address</label>
            <input type="text" class="form-control" id="address" name="address" required>
          </div>
          <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
          </div>
          <!-- Service type dropdown -->
          <div class="mb-3">
            <label for="service_type" class="form-label">Service Type</label>
            <select class="form-control" id="service_type" name="service_type" required>
              <option value="" disabled selected>Select service</option>
              <option value="networking">networking</option>
              <option value="printers">printers</option>
              <option value="backup_power">backup power</option>
              <option value="voip">VoIP</option>
              <option value="internet_wifi">Internet &amp; WIFI</option>
              <option value="voip">Other</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
        <div id="quoteLoading" style="display:none;text-align:center;margin-top:15px;">
          <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        </div>
        <div id="quotePopupMessage" style="display:none;margin-top:15px;" class="alert alert-success"></div>
      </div>
    </div>
  </div>
</div>
<script>
document.getElementById('quoteForm').addEventListener('submit', function(e) {
    e.preventDefault();
    var form = e.target;
    var formData = new FormData(form);

    // Show loading spinner, hide message
    document.getElementById('quoteLoading').style.display = 'block';
    document.getElementById('quotePopupMessage').style.display = 'none';

    fetch(form.action, {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('quoteLoading').style.display = 'none';
        document.getElementById('quotePopupMessage').textContent = 'Message sent!\n Our team will be in touch soon please check your emails.';
        document.getElementById('quotePopupMessage').style.display = 'block';
        form.reset();
    })
    .catch(error => {
        document.getElementById('quoteLoading').style.display = 'none';
        document.getElementById('quotePopupMessage').textContent = 'Error sending message.';
        document.getElementById('quotePopupMessage').style.display = 'block';
    });
});
</script>