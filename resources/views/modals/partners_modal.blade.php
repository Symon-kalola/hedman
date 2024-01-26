    <link href="{{ asset('css/partners.css') }}" rel="stylesheet">

<div class="modal fade" id="partners_modal" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog   modal-dialog-centered">
        <div class="modal-content">
              <div class="modal-header bg-success text-white">
                  <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Enter Order Details</h5>
                  <button onclick="posting()" type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
<form action="/home/partners/req"  method="post" enctype="multipart/form-data" >
    @csrf
   
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Enter your email" required>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>

        <label for="company">District</label>
        <input type="text" id="company" name="company" placeholder="Enter your company name" required>

         <label for="company">Delivery Point</label>
        <input type="text" id="about" name="about" placeholder="Enter delivery poin" required>

        


       <!--<label for="message">Message:</label>
        <textarea id="message" name="message" placeholder="Enter your message" rows="5" required></textarea>
        <br><br>-->

        <input type="submit" value="Submit">

        </form>
        </div>
    </div>
</div>



