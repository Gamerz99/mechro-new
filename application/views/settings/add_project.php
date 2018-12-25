
<?php
$mainmenu = $this->mainmenu->buildMenu($session_data['id'], 6);
$prof_inf = $this->messages->getUserInf($session_data['id']);
$data['title'] = "ADD PROJECT";
$data['mainmenu'] = $mainmenu;
$data['profinf'] = $prof_inf;
$data['userinf'] = $session_data;
if (isset($msg)) {
    $data['msg'] = $this->messages->getMessage($msg);
}
$this->load->view('layout/header2', $data);
?>
<div class="content-wrapper" >
    <section class="content-header">
        <h3>
            Add Project
        </h3>
        <ol class="breadcrumb">
            <li class="fa fa-dashboard active"> Add Project</li>
        </ol>
    </section>
        <section class="content">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">please add/edit project</h3>
                </div>

                <div class="box-body">
                    <?php echo form_open_multipart('settings/save_project', 'id="form1" data-parsley-validate class=""'); ?>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="control-label" for="first-name"> Project Name <span class="required">*</span>
                            </label>
                            <?php
                            echo form_hidden('Id', $project['Id']);
                            echo form_input('Name', $project['Name'], 'class="form-control col-md-7 col-xs-12"');
                            ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="control-label" for="first-name"> Start Date</span>
                            </label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <?php
                                echo form_input('Start_Date',  $project['Start_Date'], 'class="form-control col-md-7 col-xs-12 pull-right" id="datefrom" autocomplete="off"  autocorrect="off" autocapitalize="off"');
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="control-label" for="first-name"> Description</span>
                            </label>
                            <?php
                            echo form_textarea('Description', $project['Description'], 'class="form-control col-md-7 col-xs-12"');
                            ?>
                        </div>
                        <div class="col-md-3 form-group">
                            <label class="control-label" for="first-name"> Image 1</span>
                            </label>
                            <div>
                                <input type="file" name="Image1" size="20" />
                            </div>
                        </div>
                        <div class="col-md-3 form-group">
                            <label class="control-label" for="first-name"> Image 2</span>
                            </label>
                            <div>
                                <input type="file" name="Image2" size="20" />
                            </div>
                        </div>
                        <div class="col-md-3 form-group">
                            <label class="control-label" for="first-name"> Image 3</span>
                            </label>
                            <div>
                                <input type="file" name="Image3" size="20" />
                            </div>
                        </div>
                        <div class="col-md-3 form-group">
                            <label class="control-label" for="first-name"> Image 4</span>
                            </label>
                            <div>
                                <input type="file" name="Image4" size="20" />
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary btn" type="reset">Reset</button>
                        <button type="submit" value="Validate!" class="btn btn-success pull-right">Submit</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </section>
</div>
<?php
$this->load->view('layout/footer2');
?>
<script type="text/javascript" src="<?php echo base_url(); ?>layout/js/jquery.validate.js"></script>
<script>
    $(document).ready(function () {
            jQuery.validator.addMethod("lettersonly", function (value, element) {
                return this.optional(element) || /^[a-z]+$/i.test(value);
            }, "Please enter only letters without space.");
            $("#form1").validate({
                errorElement: "p",
                rules: {
                    Name: {
                        required: true
                    },
                    Start_Date: {
                        required: true
                    },
                },
                errorPlacement: function (error, element) {
                    error.appendTo(element.parent());
                }
            });
        }
    );
</script>
