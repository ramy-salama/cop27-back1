
<div class="container-fluid mb-5">
    <div class="row d-flex ">
        <div class="col-md-12 col-lg-12 ">
            <div class="card border bg-light  rounded-4">
                <div class="card-body p-4">
                    <h3 data-i18n="addComments">Add Comment</h3>
                    <div class="input-row">
                        <textarea class="form-control rounded-3" id="mainComment" placeholder="Add Public Comment" cols="30" rows="2"></textarea><br>
                        <button style="float:right" class="btn-primary btn btn-sm" onclick="isReply = false;" id="addComment" data-i18n="addComments">Add Comment</button>
                    </div>
                    <div class="container-fluid ">
                        <div class="col-md-12 col-lg-12">
                            <h2><span><?php echo $numComments ?></span> <b id="numComments" data-i18n="comments"> Comments</b></h2>
                            <div class="card mb-4 rounded-3 ">
                                <div class="card-body ">
                                    <div class="d-flex justify-content-between ">
                                        <div class="d-flex flex-row">
                                            <div class="userComments ">
                                                <!--  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row replyRow" style="display:none">
                        <div class="col-md-12">
                            <textarea class="form-control rounded-3" id="replyComment" placeholder="Add Public Comment" cols="30" rows="2"></textarea><br>
                            <button style="float:right" class="btn-primary btn btn-sm mx-2" onclick="isReply = true;" id="addReply" data-i18n="addReply">Add Reply</button>
                            <button style="float:right" class="btn-secondary btn btn-sm" onclick="$('.replyRow').hide();"data-i18n="close">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="lib/jquery/jquery.js"></script>
<script src="lib/ajax/ajax.js"></script>
<script type="text/javascript">
    var isReply = false, commentID = 0, max = <?php echo $numComments ?>;
</script>
<script type="text/javascript" src="js/ajax-code.js" ></script> 
