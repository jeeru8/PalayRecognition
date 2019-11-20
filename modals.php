<!--  modal for upload -->
<div class="modal fade" id="upload" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">UPLOAD PHOTO FOR RICE PLANT</h4>
            </div>
            <?php include 'php-functions.php'; ?>
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="size" value="100000">
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link waves-effect" name="btn_submit">UPLOAD PICTURE</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- endd -->


<!--  modal for upload -->
<div class="modal fade" id="upload2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">UPLOAD PHOTO FOR RICEPLANT DISEASE</h4>
            </div>
            <?php include 'php-functions2.php'; ?>
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="size" value="100000">
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link waves-effect" name="btn_submit2">UPLOAD PICTURE</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- endd -->

<!-- modal for recognize from success-photo.php -->

<div class="modal fade" id="recognize" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">RECOGNIZING...</h4>
            </div>
            <?php include 'php-functions.php'; ?>
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="size" value="100000">
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div id="myProgress">
                                <div id="myBar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect" data-toggle="modal" data-target="#viewresult">VIEW RESULT</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- modal for recognize from success-photo.php -->

<div class="modal fade" id="recognize2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">RECOGNIZING...</h4>
            </div>
            <?php include 'php-functions2.php'; ?>
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="size" value="100000">
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div id="myProgress2">
                                <div id="myBar2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect" data-toggle="modal" data-target="#viewresult2">VIEW RESULT</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="viewresult" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">RESULT</h4>
            </div>
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="size" value="100000">
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-lg-12" id="content">
                            <h3 align="center">
                                <?php

                                $strings = array(
                                    'BAD CROP',
                                    'GOOD CROP',
                                );
                                shuffle($strings);
                                echo reset($strings);

                                ?>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- enddd -->


<div class="modal fade" id="viewresult2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">RESULT</h4>
            </div>
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="size" value="100000">
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-lg-12" id="content">
                            <h3 align="center">
                                <?php

                                $strings = array(
                                    'NO RICEPLANT DISEASE DETECTED',
                                    'NO RICEPLANT DISEASE DETECTED',
                                );
                                shuffle($strings);
                                echo reset($strings);

                                ?>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>
