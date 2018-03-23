<?php
/**
include header
 */

include "header.php";
?>



<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h1 class="ml-2 display-5 text-capitalize" id="fool">contact us</h1>

            <form class="col-md-10 mt-4">
                <fieldset class="form-group">
                    <label>Email Address:</label>
                    <input type="email" class="form-control" placeholder="Email Address">
                    <small class="text-muted">We'll never share your email with anyone else</small>
                </fieldset>
                <fieldset class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" placeholder="Name">
                </fieldset>
                <fieldset class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                </fieldset>
                <button type="submit" class="btn btn-success">Send</button>
            </form>
        </div>
        <div class="col-md-4">
            <div class="card" id="lastaddress">
                <!--create header for card-->
                <div class="card-header">
                    Address &amp; Phone
                </div>
                <!--create card block-->
                <div class="card-block">
                    <ul class="list-unstyled">
                        <li>Mike Smith</li>
                        <li>1234 street name</li>
                        <li>Vancouver, BC</li>
                        <li>Canada V7V 1V1</li>
                        <li>604.123.1234</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>




<?php
//footer
include "footer.php";

?>
