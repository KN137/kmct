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

<!-- Order Modal -->
<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Place an Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="orderForm" action="orders.php" method="POST">
          <div class="mb-3">
            <label for="order_name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="order_name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="order_email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="order_email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="order_phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="order_phone" name="phone" required>
          </div>
          <div class="mb-3">
            <label for="order_address" class="form-label">Address</label>
            <input type="text" class="form-control" id="order_address" name="address" required>
          </div>
          <div class="mb-3">
            <label for="order_company" class="form-label">Company Name</label>
            <input type="text" class="form-control" id="order_company" name="company" required>
          </div>
          <div class="mb-3">
            <label for="consumable_type" class="form-label">Select Consumable</label>
            <select class="form-control" id="consumable_type">
              <option value="">Choose...</option>
              <option value="Paper">Paper</option>
              <option value="Ink">Ink</option>
              <option value="Masters">Masters</option>
              <option value="Toners">Toners</option>
            </select>
          </div>
          <div id="paper_options" style="display:none;" class="mb-3">
            <label>Paper Size:</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="paper_size" value="A3" id="a3">
              <label class="form-check-label" for="a3">A3</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="paper_size" value="A4" id="a4">
              <label class="form-check-label" for="a4">A4</label>
            </div>
            <label for="paper_qty" class="form-label">Number of Boxes:</label>
            <input type="number" class="form-control" id="paper_qty" name="paper_qty" min="1" value="1">
          </div>
          <div id="ink_options" style="display:none;" class="mb-3">
            <label>Ink Type:</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="ink_type" value="Rizo ink S-8113e" id="rizo_ink">
              <label class="form-check-label" for="rizo_ink">Rizo ink S-8113e</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="ink_type" value="Duplo - G14" id="duplo_ink">
              <label class="form-check-label" for="duplo_ink">Duplo - G14</label>
            </div>
            <label for="ink_qty" class="form-label">Quantity:</label>
            <input type="number" class="form-control" id="ink_qty" name="ink_qty" min="1" value="1">
          </div>
          <div id="masters_options" style="display:none;" class="mb-3">
            <label>Master Type:</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="master_type" value="Rizo master S-8188" id="rizo_master">
              <label class="form-check-label" for="rizo_master">Rizo master S-8188</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="master_type" value="Duplo Masters DRG10" id="duplo_master">
              <label class="form-check-label" for="duplo_master">Duplo Masters DRG10</label>
            </div>
            <label for="masters_qty" class="form-label">Quantity:</label>
            <input type="number" class="form-control" id="masters_qty" name="masters_qty" min="1" value="1">
          </div>
          <div id="toners_options" style="display:none;" class="mb-3">
            <label for="toner_make" class="form-label">Machine Make:</label>
            <input type="text" class="form-control" id="toner_make" name="toner_make">
            <label for="toner_model" class="form-label">Machine Model:</label>
            <input type="text" class="form-control" id="toner_model" name="toner_model">
            <label class="form-label">Toner Quantities:</label>
            <div class="row">
              <div class="col">
                <label for="yellow_qty">Yellow:</label>
                <input type="number" class="form-control" id="yellow_qty" name="yellow_qty" min="0" value="0">
              </div>
              <div class="col">
                <label for="magenta_qty">Magenta:</label>
                <input type="number" class="form-control" id="magenta_qty" name="magenta_qty" min="0" value="0">
              </div>
              <div class="col">
                <label for="cyan_qty">Cyan:</label>
                <input type="number" class="form-control" id="cyan_qty" name="cyan_qty" min="0" value="0">
              </div>
              <div class="col">
                <label for="black_qty">Black:</label>
                <input type="number" class="form-control" id="black_qty" name="black_qty" min="0" value="0">
              </div>
            </div>
          </div>
          <button type="button" id="add_item" class="btn btn-secondary mb-3">Add Item</button>
          <ul id="order_list" class="mb-3"></ul>
          <input type="hidden" id="orders" name="orders">
          <button type="submit" class="btn btn-primary">Submit Order</button>
        </form>
        <div id="orderLoading" style="display:none;text-align:center;margin-top:15px;">
          <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Sending...</span>
          </div>
        </div>
        <div id="orderPopupMessage" style="display:none;margin-top:15px;" class="alert alert-success"></div>
      </div>
    </div>
  </div>
</div>
<script>
document.getElementById('consumable_type').addEventListener('change', function() {
    var type = this.value;
    document.getElementById('paper_options').style.display = type === 'Paper' ? 'block' : 'none';
    document.getElementById('ink_options').style.display = type === 'Ink' ? 'block' : 'none';
    document.getElementById('masters_options').style.display = type === 'Masters' ? 'block' : 'none';
    document.getElementById('toners_options').style.display = type === 'Toners' ? 'block' : 'none';
});

document.getElementById('add_item').addEventListener('click', function() {
    var type = document.getElementById('consumable_type').value;
    if (!type) return;
    var item = '';
    if (type === 'Paper') {
        var size = document.querySelector('input[name="paper_size"]:checked');
        var qty = document.getElementById('paper_qty').value;
        if (!size || !qty) return;
        item = 'Paper: ' + size.value + ' - ' + qty + ' boxes';
    } else if (type === 'Ink') {
        var inkType = document.querySelector('input[name="ink_type"]:checked');
        var qty = document.getElementById('ink_qty').value;
        if (!inkType || !qty) return;
        item = 'Ink: ' + inkType.value + ' - ' + qty;
    } else if (type === 'Masters') {
        var masterType = document.querySelector('input[name="master_type"]:checked');
        var qty = document.getElementById('masters_qty').value;
        if (!masterType || !qty) return;
        item = 'Masters: ' + masterType.value + ' - ' + qty;
    } else if (type === 'Toners') {
        var make = document.getElementById('toner_make').value;
        var model = document.getElementById('toner_model').value;
        var y = document.getElementById('yellow_qty').value;
        var m = document.getElementById('magenta_qty').value;
        var c = document.getElementById('cyan_qty').value;
        var k = document.getElementById('black_qty').value;
        if (!make || !model) return;
        item = 'Toners: Make ' + make + ', Model ' + model + ' - Y:' + y + ', M:' + m + ', C:' + c + ', K:' + k;
    }
    var list = document.getElementById('order_list');
    var li = document.createElement('li');
    li.innerHTML = '<button class="remove-btn btn btn-sm btn-danger me-2">x</button>' + item;
    list.appendChild(li);
    updateOrders();
    // Reset for next
    document.getElementById('consumable_type').value = '';
    ['paper_options', 'ink_options', 'masters_options', 'toners_options'].forEach(id => {
        document.getElementById(id).style.display = 'none';
    });
});

function updateOrders() {
    var lis = document.querySelectorAll('#order_list li');
    var orders = [];
    lis.forEach(li => {
        var text = li.textContent.replace('x', '').trim();
        orders.push(text);
    });
    document.getElementById('orders').value = orders.join('\n');
}

document.getElementById('order_list').addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-btn')) {
        e.target.parentElement.remove();
        updateOrders();
    }
});

document.getElementById('orderForm').addEventListener('submit', function(e) {
    e.preventDefault();
    var form = e.target;
    var formData = new FormData(form);

    // Check if orders is not empty
    if (!document.getElementById('orders').value.trim()) {
        document.getElementById('orderPopupMessage').textContent = 'Please add at least one item to order.';
        document.getElementById('orderPopupMessage').className = 'alert alert-danger';
        document.getElementById('orderPopupMessage').style.display = 'block';
        return;
    }

    document.getElementById('orderLoading').style.display = 'block';
    document.getElementById('orderPopupMessage').style.display = 'none';

    fetch(form.action, {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('orderLoading').style.display = 'none';
        document.getElementById('orderPopupMessage').textContent = 'Order submitted! Our team will be in touch soon.';
        document.getElementById('orderPopupMessage').className = 'alert alert-success';
        document.getElementById('orderPopupMessage').style.display = 'block';
        form.reset();
        document.getElementById('order_list').innerHTML = '';
    })
    .catch(error => {
        document.getElementById('orderLoading').style.display = 'none';
        document.getElementById('orderPopupMessage').textContent = 'Error submitting order.';
        document.getElementById('orderPopupMessage').className = 'alert alert-danger';
        document.getElementById('orderPopupMessage').style.display = 'block';
    });
});
</script>