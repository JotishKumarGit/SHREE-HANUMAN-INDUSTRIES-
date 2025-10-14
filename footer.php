<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="enquiryModalLabel">Product Enquiry</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form id="enquiryForm">
          <!-- Name -->
          <div class="mb-3">
            <label for="enquiryName" class="form-label">Name</label>
            <input type="text" class="form-control" id="enquiryName" placeholder="Your Name" required>
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="enquiryEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="enquiryEmail" placeholder="you@example.com" required>
          </div>

          <!-- Message -->
          <div class="mb-3">
            <label for="enquiryMessage" class="form-label">Message</label>
            <textarea class="form-control" id="enquiryMessage" rows="4" placeholder="Your message here..."
              required></textarea>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="btn btn-primary w-100">Submit Enquiry</button>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- Enquery Modal  -->
<script>
  document.getElementById("enquiryForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const name = document.getElementById("enquiryName").value.trim();
    const email = document.getElementById("enquiryEmail").value.trim();
    const message = document.getElementById("enquiryMessage").value.trim();

    const fullMessage = `Name: ${name}%0AEmail: ${email}%0AMessage: ${message}`;

    const phoneNumber = "+918467917533";
    const whatsappURL = `https://wa.me/${phoneNumber}?text=${fullMessage}`;

    window.open(whatsappURL, "_blank");

    // Clear form
    this.reset();

    // Close modal (if using modal)
    const enquiryModal = bootstrap.Modal.getInstance(document.getElementById('enquiryModal'));
    if (enquiryModal) {
      enquiryModal.hide();
    }
  });
</script>



<!-- This is send what message  -->
<script>
  document.getElementById("contactForm").addEventListener("submit", function (e) {
    e.preventDefault(); // Form ka default submit rokna

    // Form data get karna
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const subject = document.getElementById("subject").value.trim();
    const message = document.getElementById("message").value.trim();

    // WhatsApp number (
    const phoneNumber = "+918467917533"; // <-- apna WhatsApp number yahaan daalein

    // WhatsApp message banayein
    const whatsappMessage = `Name: ${name}%0AEmail: ${email}%0ASubject: ${subject}%0AMessage: ${message}`;

    // WhatsApp URL banayein
    const whatsappURL = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;

    // Redirect karein WhatsApp par
    window.open(whatsappURL, "_blank");
  });
</script>

