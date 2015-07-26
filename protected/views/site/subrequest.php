<?
   $this->pageTitle='Please consider subscribing | '.Yii::app()->name ;
   ?>
<div class="banner">
   <div class="container intro_wrapper">
      <div class="inner_content">
         <h1>Dave Conservatoire will always be free.  But please consider subscribing!</h1>
         <h1 class="title">Voluntary Subscription</h1>
      </div>
   </div>
</div>
<div class="container wrapper">
   <div class="inner_content">
      <div class="row">
         <div class="span4">
         <h2>Why Subscribe?</h2>
            <p>You will always be able to access everything on Dave Conservatoire for free.</p><p>However, the future of this site depends on people who found it useful (and are financially able) to contribute what they feel it is worth.</p><p>If you choose to pledge some money each month to help me develop the site, I can promise you:</p>
          <ul class="subbenefits">
	          <li>The great feeling you're helping thousands of students around the world explore music, many of whom don't have access to a teacher.</li>
	          <li>You'll be putting the power into my hands to build the online music school the world is crying out for!</li>
	          <li>The freedom to browse the site without the annoying donation banners.</li>
          </ul>
          <p>Use the slider to set your subscription rate.  You will be taken to Paypal to securely complete your subscription.</p>
          <p>Not able to help out right now?  Just set the slider to 0 and let's get back to learning music.</p>
         </div>
         <div class="span8">	
	       <div class="vendor">
	        <iframe width="560" height="315" src="https://www.youtube.com/embed/LAlkiNaERKE?autoplay=1&showinfo=0&rel=0" id="player" frameborder="0" allowfullscreen></iframe>
	         </div>
	         <div class="alert alert-success subchange">
            <input class="donationslider" value ="9" id="ex1" width="100%" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="50" data-slider-step="1" data-slider-value="9"/>
	         </div>
         <div class="alert alert-success subchange">
	         <p id="subamount">I would like to subscribe to Dave Conservatoire for $9 each month</p>
	         <a  class="btn btn-block btn-primary dc-orange subbutton">
		         Submit
		     </a>
			     

         </div>
         </div>
      </div>
   </div>
</div>
<div id="suremodal" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Sure you can't just nudge us in the right direction?</h3>
  </div>
  <div class="modal-body">
	<p>Could you spare just $1 each month for a worthy cause?  I know getting your credit card out is a faff, but music students around the world will thank you for it!</p>
    <p>A hard-up student?  No worries, we're still cool.</p>
  </div>
  <div class="modal-footer">
    <a href="<? echo Yii::app()->request->baseUrl;?>/feedback" class="btn btn-danger">Still a no, sorry. </a>
    <a href="https://www.paypal.com/cgi-bin/webscr?business=dave@daveconservatoire.org&cmd=_xclick-subscriptions&currency_code=USD&p3=1&t3=M&no_shipping=1&src=1&sra=1&a3=1&item_name=Dave%20Conservatoire%20Subscription%20&return_url=http://www.daveconservatoire.org/thanks&cancel_return=http://www.daveconservatoire.org/subrequest" class="btn btn-success">Okay!  Let's do this! ($1/month subscription)</a>
  </div>
</div>
