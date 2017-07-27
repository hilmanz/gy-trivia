<section id="main-content">
    <div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<form class="theform" method="POST" action="<?php echo base_url();?>index.php/pages/insert">
                    <div class="message"><?php echo $this->session->flashdata('message'); ?></div>
                    <div class="headertext">
                        <h3>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</h3>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                    </div>
                    <fieldset>
                        <input type='text' name='name' id='name' placeholder='Name'>
                        <input type='text' name='email' id='email' placeholder='Email'>
                        <input type='text' name='phone' id='phone' placeholder='Phone Number'>
                        <input type="submit" class="button" value="NEXT" />
                    </fieldset>
                    
                </form>
            </div>
        </div>
    </div>
</section><!-- end #main-content-->