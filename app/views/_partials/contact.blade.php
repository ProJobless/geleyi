<!-- CONTACTS -->
<section id="contacts" class="page">
    <header>
        <fieldset>
            <legend align="center">Pre-Launch Access</legend>
        </fieldset>
    </header>

    <div class="body">

        <!-- SUBSCRIBE FORM -->
        <div class="newsletter">
            <h3>Sign-up NOW for a pre-launch VIP access!</h3>

            {{ Form::open(['route'=>'subscribe.user']) }}

            <div id="subscribe-user">
                <input type="email" name="email" value="" placeholder="you@email.com" required>
                <input type="submit" value="JOIN" id="send">

                <div class="response">Thank you for subscribing, please check your email now</div>
                <div class="error">Email isn't valid!</div>

            </div>

            {{ Form::close() }}
        </div>
        <!-- // SUBSCRIBE FORM -->

        <!-- SOCIAL BLOCK -->
        <div class="social">
            <h3>Follow us</h3>

            <ul class="icons">
                <li class="twitter"><a href="https://twitter.com/geleyi" target="_blank"></a></li>
                <li class="facebook"><a href="https://www.facebook.com/my.geleyi" target="_blank"></a></li>
                <li class="pinterest"><a href="http://pinterest.com/geleyi/" target="_blank"></a></li>
            </ul>

            <ul class="twitter"></ul>
        </div>
        <!-- // SOCIAL BLOCK -->

        <div>
            <button class="write-us-open">Talk to Us!</button>
        </div>

        <!-- FEEDBACK -->
        <div class="write-us">
            <h3>Talk to Us!</h3>

            <div class="text">
                Inquiries?
            </div>

            {{ Form::open(['route'=> 'user.feedback']) }}

            <div><input type="text" name="uname" value="" placeholder="Your name" required></div>
            <div><input type="email" name="email" value="" placeholder="Your email" required></div>
            <div><textarea name="message" placeholder="Message for us" required></textarea></div>

            <div class="ctr">
                <span class="response">Thank you for your feedback!</span>
                <span class="error">Something wrong :(</span>
                <button id="write-us">Send</button>
            </div>

            {{ Form::close() }}
        </div>
        <!-- // FEEDBACK -->


    </div>
</section>
<!-- // CONTACTS -->