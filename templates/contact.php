<!--
File Name: contact
Author: Haden hIles
File Description: this section is designed to provide an easy way to contact me
-->
<div class="contact" id="contact">
    <section id="slide-4" class="homeSlide">
        <div class="bcg"
            data-center="background-position: 50% 0px;"
            data-top-bottom="background-position: 50% -100px;"
            data-anchor-target="#slide-4"
        >
            <div class="hsContainer">
                <div class="hsContent">
                    <h2>Contact Me</h2>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <form method="post" action="">
                            <fieldset>
                                <legend>Have a Question? Send me an Email!</legend>
                                <div class="col-sm-12">
                                    <label>Name: </label><br />
                                    <input type="text" name="name" placeholder="Name" required/>
                                </div>
                                <!--<div class="col-sm-12">
                                    <label>Email: </label><br />
                                    <input type="text" name="email" placeholder="Email" required/>
                                </div>-->
                                <div class="col-sm-12">
                                    <label>Subject: </label><br />
                                    <input type="text" name="subject" placeholder="Subject" required/>
                                </div>
                                <div class="col-sm-12">
                                    <label>Message: </label><br />
                                    <textarea name="message" maxlength="500" required></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <a onClick="submitContactForm()" class="button">Send</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    function submitContactForm() {
        var name = $(':input[name=name]').val().trim();
        var subject = $(':input[name=subject]').val().trim();
        var message = $('textarea[name=message]').val().trim();
        if(!name) {
            alert("Sorry, A name must be provided!");
        } else if(name.length > 10) {
            alert("Sorry, that name is too long!");
        } else if(!subject) {
            alert("Sorry, a subject must be provided!");
        } else if(subject.length > 10) {
            alert("Sorry, that subject is too long!");
        } else if(!message || message.length < 10) {
            alert("Sorry, a longer message is required!");
        } else if(message.length > 500) {
            alert("Sorry, that message is too long!");
        } else {
            window.location = 'mailto:hschnizel@gmail.com?subject=' + subject + '&body=Hi%20Haden%2C%20my%20name%20is%20' + name + '.%0A%0A' + message;
        }
    }
</script>