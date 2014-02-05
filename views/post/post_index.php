<h1>Welcome!</h1>
<!-- Code for ajax -->
<script type="text/javascript">
    function clickme() {
        $.post("<?=BASE_URL?>welcome", $( "#ajax-form" ).serialize(), function (data) {
            $(".result").html(data);
        });
    }
</script>

<h3>Sending data to server</h3>
<h4>jQuery $.post (Ajax) submit example</h4>
Fill the name field below and click <i>submit form using ajax</i>.
<form id="ajax-form">
Your name: <input type="text" placeholder="Write something here" name="name"/><br/>
</form>
<a href="#" onclick="clickme()">Submit form using ajax</a><br/>

The form containing the name field will be submitted to the
server by jQuery and server's response will be written to the box below.

<div class="well result"></div>



<h4pushitu>Traditional POST submit example</h4>
<p>Here is an example how to use traditional POST to send data to the server. Click Post after filling the form. The server will invoke <code>post::index_post()</code> action (which is in <code>/controllers/posts.php</code> file) which just dumps $_POST to the screen.</p>
<!-- Button for executing post -->
<form method="post">
    <input type="text" name="foobar"/>
    <input type="submit" value="Post"/>
</form>

    <?foreach( $posts as $post ):?>
    <div class="container">
        <div class="col-md-12">
            <h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post['post_subject']?></a></h1>
            <p><?=$post['post_subject']?></p>
            <div>
                <span class="badge">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label label-default">alice</span> <span class="label label-primary">story</span> <span class="label label-success">blog</span> <span class="label label-info">personal</span> <span class="label label-warning">Warning</span>
                    <span class="label label-danger">Danger</span></div>
            </div>

            <hr>
        </div>
    </div>

    <?endforeach?>
