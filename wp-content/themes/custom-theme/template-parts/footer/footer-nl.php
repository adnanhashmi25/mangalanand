<?php
/**
 * Footer Newsletter template.
 * 
 * @package custom-theme
 */
?>

<section class="nl fbg ">
    <div class="container ">
        <div class="row">
            <div class="col-md-5 mt-3">
                <h2>Join Newsletter</h2>
            </div>
            <div class="col-md-5 mt-20">
                <form name="newsletter" method="POST" id="newsletter">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email id.">
                    </div>
                </form>
            </div>
            <div class="col-md-2 mt-3">
                <button type="button" class="btn btn-primary" onclick="sendData();" >Submit</button>
            </div>
        </div>
    </div>
</section>