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
            <label for="name_qoute" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name_qoute" name="name_qoute" required>
          </div>
          <div class="mb-3">
            <label for="email_qoute" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email_qoute" name="email_qoute" required>
          </div>
          <div class="mb-3">
            <label for="phone_qoute" class="form-label">Phone number</label>
            <input type="text" class="form-control" id="phone_qoute" name="phone_qoute" required>
          </div>
          <div class="mb-3">
            <label for="company_qoute" class="form-label">Company Name</label>
            <input type="text" class="form-control" id="company_qoute" name="company_qoute" required>
          </div>
          <div class="mb-3">
            <label for="address_qoute" class="form-label">address</label>
            <input type="text" class="form-control" id="address_qoute" name="address_qoute" required>
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
            <label for="message_qoute" class="form-label">Message (If other selected above please try to explan your required service)</label>
            <textarea class="form-control" id="message_qoute" name="message_qoute" rows="4" required></textarea>
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