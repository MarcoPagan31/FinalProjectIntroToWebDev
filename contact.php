<h2 id="contactheader">
    Get In Touch
</h2>
<p id="contactp">
    I open to any opportunies, whether it'd be a junior web developement opportunity or a freelancing gig! 
</p>
    <section id="contactsection"> 
	<center>
		<h4 class="sent-notification"></h4>
		<div class="container">
        <form method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button type="submit" onclick="sendEmail()" value="Send An Email">SEND A MESSAGE!</button> 
            </div>
        </form>
		</div>
    </center>
    </section>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $.noConflict();
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#message");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>


