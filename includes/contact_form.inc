<?php
    include 'email-form.php';
?>
<form method = "POST" action="">
    <div class = "error-message">
    <?php
    if (isset($_POST['name'], $_POST['subject'], $_POST['email'], $_POST['content'])) {
        if (empty($errors) === false) {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        } else {
            $myEmail = "connor.jones@mayden.co.uk";
            $content = "Name: " . $name . " sent you an email from " . $visitorEmail . "here is the post: \n\n" .
                $_POST['content'] . "\n\n end of e-mail";
            if (mail($myEmail, $subject, $content)) {
                echo "mail sent successfully";
                $name = '';
                $visitorEmail = '';
                $content = '';
            }
        }
    }
    ?>
    </div>
    <div>Name</div>
    <div><input type="text" name="name" placeholder="Enter Your Name..." class="contact_box" required
            <?php if (!empty($name)) {
                echo 'value = ' . $name;
            } ?>
            >
    </div>
    <div>E-mail</div>
    <div><input type="text" name="email" placeholder="Enter Your E-mail..." class="contact_box" required
            <?php if (!empty($visitorEmail)) {
                echo 'value = ' . $visitorEmail;
            } ?>
            >
    </div>
    <div>Reason For Enquiry</div>
    <div><select name="subject" class="contact_box" required>
            <option value="general">General Enquiry</option>
            <option value="blog-post">Blog Post Content</option>
            <option value="eddie">I Found Eddie!!!</option>
            <option value="legal">Legal Issue</option>
            <option value="work">Can you build me a blog too?</option>
            <option value="admire">Admiration</option>
            <option value="bugger">What a crock of... </option>
            <option value="other">Other</option>
    </select></div>
    <div>Message</div>
    <div><textarea placeholder="Message..." name="content" class="contact_box" required><?php if (!empty($content)) { echo
            $content; }?></textarea>
    </div>
    <div>
        <input type="submit" value="Submit" class="button">
    </div>
</form>