<?php 

if (session_status() == PHP_SESSION_NONE) {
session_start();
}

if (!isset($_SESSION['userid'])) {
    echo "<script>window.location='contact.php';</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Help - Dial'in! </title>
<?php include 'css.php';?>


</head>
<body>
	<?php include 'header.php';?>
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a> / <span>Help</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Faq -->
	<div class="faq main-grid-border">
		<div class="container">
			<div class="wthree-help">
				<h3>He Can We help you</h3>
				<form action="#" method="get" id="helpform" name="helpform"> 
					<textarea placeholder="Your Query" id="query"name="Message" required=""></textarea>
					<input type="submit" value="submit">
				</form>
				<br />
				<br />
                <div id="result"></div>
				<h5>OR</h5>
				<a href="contact.php">Contact Us</a>
			</div>
			<h2 class="w3-head">Frequently asked Questions</h2>
			<dl class="faq-list">
				<dt class="faq-list_h">
				<h4 class="marker">Q?</h4>
				<h5 class="marker_head">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium?</h5>
				</dt>
				<dd>
				<h4 class="marker1">A.</h4>
				<p class="m_13">Vestibulum ante ipsum primis in faucibus orci luctus et trices posuere cubilia Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit magnandrerit sit amet tincidunt ac viverra sed nulla. Donec porta diam eu massa. Quisque diam lorem interdum vapibus ac scelerisque vitae pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctorulvinar. Proin ullamcorper urna et tibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet consectetuer adipiscing elit. Pellentese sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nullael diam. Sed in lacus ut enim adipiscing aliquet.</p>
				</dd>
				<dt class="faq-list_h">
				<h4 class="marker">Q?</h4>
				<h5 class="marker_head">But I must explain to you how all this mistaken idea of denouncing?</h5>
				</dt>
				<dd>
				<h4 class="marker">A.</h4>
				<p class="m_13">Aenean auctor wisi et urna. Aliquarat volutpat. Duis ac turpis. Integer rutrum ante eu lacusVestibulum libero nisl porta vel scelerisque eget malesuada at neque. Vivamus eget nibh. Etiamcursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>
				</dd>
				<dt class="faq-list_h">
				<h4 class="marker">Q?</h4>
				<h5 class="marker_head">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis ?</h5>
				</dt>
				<dd>
				<h4 class="marker">A.</h4>
				<p class="m_13">Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio gravida atcursus nec luctus a lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor dapibus eget elementum vel cursus eleifend elit.</p>
				</dd>
				<dt class="faq-list_h">
				<h4 class="marker">Q?</h4>
				<h5 class="marker_head">On the other hand, we denounce with righteous indignation and dislike ?</h5>
				</dt>
				<dd>
				<h4 class="marker">A.</h4>
				<p class="m_13">Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctorulvinar. Proin ullamcorper urna et tibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet consectetuer adipiscing elit. Pellentese sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nullael diam. Sed in lacus ut enim adipiscing aliquet. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctorulvinar. Proin ullamcorper urna et tibulum iaculis lacinia est.</p>
				</dd>
				<dt class="faq-list_h">
				<h4 class="marker">Q?</h4>
				<h5 class="marker_head">Lorem ipsum dolor sit amet, consectetur adipiscing elit,?</h5>
				</dt>
				<dd>
				<h4 class="marker">A.</h4>
				<p class="m_13">Vestibulum ante ipsum primis in faucibus orci luctus et trices posuere cubilia Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit magnandrerit sit amet tincidunt ac viverra sed nulla. Donec porta diam eu massa. Quisque diam lorem interdum vapibus ac scelerisque vitae pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctorulvinar. Proin ullamcorper urna et tibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet consectetuer adipiscing elit. Pellentese sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nullael diam. Sed in lacus ut enim adipiscing aliquet.</p>
				</dd>
				<dt class="faq-list_h">
				<h4 class="marker">Q?</h4>
				<h5 class="marker_head">It is a long established fact that a reader will be distracted?</h5>
				</dt>
				<dd>
				<h4 class="marker">A.</h4>
				<p class="m_13">Aenean auctor wisi et urna. Aliquarat volutpat. Duis ac turpis. Integer rutrum ante eu lacusVestibulum libero nisl porta vel scelerisque eget malesuada at neque. Vivamus eget nibh. Etiamcursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>
				</dd>
				<dt class="faq-list_h">
				<h4 class="marker">Q?</h4>
				<h5 class="marker_head">If you are going to use a passage of Lorem Ipsum?</h5>
				</dt>
				<dd>
				<h4 class="marker">A.</h4>
				<p class="m_13 last_2">Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio gravida atcursus nec luctus a lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor dapibus eget elementum vel cursus eleifend elit.</p>
				</dd>
          </dl>

		</div>	
	</div>
<?php include 'footer.php';?>
<script>
	 $("#helpform").on('submit', (function(e) {
		 
		e.preventDefault();
                
            var query = $('#query').val();
           
         var help='help';
            
           /* alert(query);
            alert(userid);*/
            $.ajax({
                type: 'POST',
                url: 'server.php',
                data: { query: query, help:help },
                success: function(response) {
                    $('#result').html(response);
                }
            });

            }));
		</script>
</body>
</html>